<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('index');
})->name('index');

Route::get('/home', function (){
    return view('index');
})->name('index');


//Route::get('/', function () {
  //  return view('index');
//});

Route::get('/profile', function(){
    return view('profile');
})->name('profile');

Route::get('/displayedProfile', function(){
    $users = DB::table('user_profiles')->get();
    return view('displayedProfile', compact('users'));
    /*
    $usersSkills = DB::table('profile_skills')->get();
    return view('displayedProfile', compact('$usersSkills'));
    $usersEducation = DB::table('profile_education')->get();
    return view('displayedProfile', compact('$usersEducation'));
    */
})->name('displayedProfile');

Route::get('/profileSkills', function(){
    return view('profileSkills');
})->name('profileSkills');

Route::get('/profileEducation', function(){
    return view('profileEducation');
})->name('profileEducation');

Route::get('/JobSeekerResults', function(){
    return view('JobSeekerResults');
})->name('JobSeekerResults');

Route::resource('UserProfile', 'ProfileController');
Route::resource('ProfileSkills', 'ProfileSkillsController');
Route::resource('ProfileEducation', 'ProfileEducationController');

/*
Route::resource('profile', 'ProfileController');
Route::resource('profile_skills', 'ProfileSkillsController');
Route::resource('profile_education', 'ProfileEducationController');
*/

//Authentication Routes
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
?>
