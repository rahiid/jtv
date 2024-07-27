<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Ribbon;
use Illuminate\Support\Facades\DB;

class RibbonController extends Controller
{
    public function ActionRibbonUpload(Request $request){

        $validatedData = $request->validate([
            'latest_news' => 'required|string|max:500',
        ]);

       // Create a new instance
        $ribbon = new Ribbon();

        $ribbon->latest_news = $validatedData['latest_news'];

        $ribbon->save();

        return redirect()->back()->with('success', 'Ribbon uploaded successfully.');

    }
}
