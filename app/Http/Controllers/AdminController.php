<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\News;
use App\Ribbon;
use App\About;
use App\Team;
use App\Contactus;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function  deleteRibbon($id){

        $deleteribbon = Ribbon::find($id);

         if ($deleteribbon) {
            $deleteribbon->delete();
            return back()->with('success', 'Ribbon Data Deleted Successfully.');
        } else {
            return back()->with('error', 'Ribbon Data Not Found.');
        }

    }

    public function  deleteAbout($id){

        $deleteabout = About::find($id);

         if ($deleteabout) {
            $deleteabout->delete();
            return back()->with('success', 'About Data Deleted Successfully.');
        } else {
            return back()->with('error', 'About Data Not Found.');
        }

    }

    public function  deleteNews($id){

        $deletenews = News::find($id);

         if ($deletenews) {
            $deletenews->delete();
            return back()->with('success', 'News Data Deleted Successfully.');
        } else {
            return back()->with('error', 'News Data Not Found.');
        }

    }

    public function  deleteTeam($id){

        $deleteteam = Team::find($id);

         if ($deleteteam) {
            $deleteteam->delete();
            return back()->with('success', 'Team Data Deleted Successfully.');
        } else {
            return back()->with('error', 'Team Data Not Found.');
        }

    }

    public function  deleteContacts($id){

        $deletecontactus = Contactus::find($id);

         if ($deletecontactus) {
            $deletecontactus->delete();
            return back()->with('success', 'Contact Data Deleted Successfully.');
        } else {
            return back()->with('error', 'Contact Data Not Found.');
        }

    }

    public function ActionContact(Request $request){


        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'number' => 'required|string',
            'message' => 'required|string',
        ]);

        $contact = new Contactus;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->number = $request->number;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back();

    }

    public function AdminDashboard(){

        return view('admin.index');

    } //END METHOD

    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');

    } //END METHOD


    public function AdminProfile(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view',compact('profileData'));

    } //END METHOD



    public function uploadAbout(Request $request){

        return redirect()->route('admin.uploadabout');
    }

    public function editAboutPage()
    {
        return view('admin.editabout');
    }

    public function currentAbout()
    {
        return view('admin.aboutdata');

    }

    public function AdminProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('images/admin_images/'.$data->photo)); // THIS WILL REPLACE THE OLD PHOTO WITH NEW PHOTO
            $filename = date('YmdHi').$file->getClientOriginalName(); // THE FORMAT WILL BE LIKE "001.image.png"
            $file->move(public_path('images/admin_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } //END METHOD

    public function AdminChangePassword(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password',compact('profileData'));

    } //END METHOD

    public function AdminUpdatePassword(Request $request){

       // VALIDATION
       $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|confirmed'

       ]);

       // MATCH OLD PASSWORD
       if(!Hash::check($request->old_password, auth::user()->password)) {

        $notification = array(
            'message' => 'Previous Password Not Matched',
            'alert-type' => 'error'
        );

        return back()->with($notification);

       }

       // PASSWORD NEW PASSWORD VALIDATION
        User::whereId(auth()->user()->id)->update([
        'password' => Hash::make($request->new_password)

       ]);

       $notification = array(
       'message' => 'Password Change Success',
       'alert-type' => 'success'

       );

       return back()->with($notification);

    } //END METHOD


    public function ribboN()
    {
        return view('admin.ribbon');

    }

    public function newS()
    {
        return view('admin.news');

    }

    public function teaM()
    {
        return view('admin.team');

    }

    public function abouT()
    {
        return view('admin.about');

    }

    public function ribbonData()
    {
        $ribbon = Ribbon::all();
        return view('admin.ribbondata', compact('ribbon'));

    }

    public function newsData()
    {
        $news = News::all();
        return view('admin.newsdata', compact('news'));

    }

    public function teamData()
    {
        $team = Team::all();
        return view('admin.teamdata', compact('team'));

    }

    public function aboutData()
    {
        $about = About::all();
        return view('admin.aboutdata', compact('about'));

    }

    
    public function ContactsData()
    {
        $contacts = Contactus::all();
        return view('admin.contactsdata', compact('contacts'));
    }
}

