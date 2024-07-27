<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Team;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function ActionTeamUpload(Request $request)
    {
            $validatedData = $request->validate([
                'photo' => 'required|image|max:2048',
                'name' => 'required|string|max:255',
                'position' => 'required|string|max:255',
            ]);
    
            // Handle file upload
             if ($request->hasFile('photo')) {
                $imageName = time().'.'.$request->photo->extension();
                $request->photo->move(public_path('images/team_images'), $imageName);
    
           // Create a new instance
            $team = new Team();
    
            $team->photo = $imageName ?? null; // Assign null if no photo is uploaded
            $team->name = $validatedData['name'];
            $team->position = $validatedData['position'];
    
            $team->save(); 
    
            return redirect()->back()->with('success', 'Team Member Added successfully.');
        }
    }
}
