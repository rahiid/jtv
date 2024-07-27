<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\RibbonController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;


// MAIN WEBSITE ROUTING
Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/team', function () {
    return view('team');
});

// HOME PAGE ROUTE AUTHENTICATION
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');


//ADMIN PANEL ROUTING
Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard')->middleware('verified');
Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('verified');
Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile')->middleware('verified');
Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password')->middleware('verified');
Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');


// RIBBON ROUTING
Route::get('/admin/ribbon', [AdminController::class, 'ribboN'])->name('admin.ribbon')->middleware('verified');
Route::get('/admin/ribbondata', [AdminController::class, 'ribbonData'])->name('admin.ribbondata')->middleware('verified');

// NEWS ROUTING
Route::get('/admin/news', [AdminController::class, 'newS'])->name('admin.news')->middleware('verified');
Route::get('/admin/newsdata', [AdminController::class, 'newsData'])->name('admin.newsdata')->middleware('verified');

// TEAM ROUTING
Route::get('/admin/team', [AdminController::class, 'teaM'])->name('admin.team')->middleware('verified');
Route::get('/admin/teamdata', [AdminController::class, 'teamData'])->name('admin.teamdata')->middleware('verified');

// ABOUT ROUTING
Route::get('/admin/about', [AdminController::class, 'AbouT'])->name('admin.about')->middleware('verified');
Route::get('/admin/aboutdata', [AdminController::class, 'aboutData'])->name('admin.aboutdata')->middleware('verified');

// ADMIN PROFILE SETTINGS ROUTING
Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile')->middleware('verified');
Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password')->middleware('verified');
Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

// RIBBON UPLOAD FORM ACTION ROUTE
Route::post('/admin/ribbon', [RibbonController::class, 'ActionRibbonUpload'])->name('action.ribbon.upload');

// ABOUT UPLOAD FORM ACTION ROUTE
Route::post('/admin/about', [AboutController::class, 'ActionAboutUpload'])->name('action.about.upload');

// NEWS UPLOAD FORM ACTION ROUTE
Route::post('/admin/news', [NewsController::class, 'ActionNewsUpload'])->name('action.news.upload');

// TEAM UPLOAD FORM ACTION ROUTE
Route::post('/admin/team', [TeamController::class, 'ActionTeamUpload'])->name('action.team.upload');

// CONTACT FORM ACTION ROUTE
Route::post('/contact', [AdminController::class, 'ActionContact'])->name('action.contact');

// VIEW CONTACT DATA ROUTE
Route::get('/admin/contactsdata', [AdminController::class, 'ContactsData'])->name('admin.contactsdata');

//DELETE DATA ROUTE
Route::get('/admin/ribbon/{id}', [AdminController::class, 'deleteRibbon'])->name('admin.ribbon.delete');
Route::get('/admin/about/{id}', [AdminController::class, 'deleteAbout'])->name('admin.about.delete');
Route::get('/admin/news/{id}', [AdminController::class, 'deleteNews'])->name('admin.news.delete');
Route::get('/admin/team/{id}', [AdminController::class, 'deleteTeam'])->name('admin.team.delete');
Route::get('/admin/contactsdata/{id}', [AdminController::class, 'deleteContacts'])->name('admin.contactsdata.delete');

// DISABLE REGISTER ROUTE
Route::get('/register', function (Request $request) {
    return redirect('/');
});
