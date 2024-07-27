<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\About;

use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function ActionAboutUpload(Request $request)
    {
            $validatedData = $request->validate([
                'photo' => 'required|image|max:2048',
                'headline' => 'required|string|max:500',
                'description' => 'required|string|max:3000',
            ]);

            // Handle file upload
             if ($request->hasFile('photo')) {
                $imageName = time().'.'.$request->photo->extension();
                $request->photo->move(public_path('images/about_images'), $imageName);

           // Create a new instance
            $about = new About();

            $about->photo = $imageName ?? null; // Assign null if no photo is uploaded
            $about->headline = $validatedData['headline'];
            $about->description = $validatedData['description'];

            $about->save();

            return redirect()->back()->with('success', 'About Uploaded successfully.');
        }
    }

}
