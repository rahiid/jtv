<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function ActionNewsUpload(Request $request)
    {
            $validatedData = $request->validate([
                'photo' => 'required|image|max:2048',
                'headline' => 'required|string|max:500',
                'article' => 'required|string',
            ]);

            // Handle file upload
             if ($request->hasFile('photo')) {
                $imageName = time().'.'.$request->photo->extension();
                $request->photo->move(public_path('images/news_images'), $imageName);

           // Create a new instance
            $news = new News();

            $news->photo = $imageName ?? null; // Assign null if no photo is uploaded
            $news->headline = $validatedData['headline'];
            $news->article = $validatedData['article'];

            $news->save();

            return redirect()->back()->with('success', 'News uplaoded successfully.');
        }
    }
}
