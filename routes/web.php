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
/*
Route::get('/displayedProfile', function(){
    $users = DB::table('user_profile')->get();
    return view('displayedProfile', compact('users'));

    $usersSkills = DB::table('profile_skills')->get();
    return view('displayedProfile', compact('$usersSkills'));
    $usersEducation = DB::table('profile_education')->get();
    return view('displayedProfile', compact('$usersEducation'));

})->name('displayedProfile');
*/

Route::get('/profileSkills', function(){
    return view('profileSkills');
})->name('profileSkills');

Route::get('/profileEducation', function(){
    return view('profileEducation');
})->name('profileEducation');

Route::get('/profilePreviousJobs', function(){
    return view('profilePreviousJobs');
})->name('profilePreviousJobs');


Route::resource('UserProfile', 'ProfileController');
Route::resource('ProfileSkills', 'ProfileSkillsController');
Route::resource('ProfileEducation', 'ProfileEducationController');
Route::resource('ProfilePreviousJobs', 'ProfilePreviousJobsController');
Route::resource('displayedProfile', 'DisplayedProfileController');

/*
Route::resource('profile', 'ProfileController');
Route::resource('profile_skills', 'ProfileSkillsController');
Route::resource('profile_education', 'ProfileEducationController');
*/

Route::get('/matchmake/{jobListingID}', function ($jobListingID){

    $educationrequired = DB::table('education_requirement')->where('job_listing_ID',$jobListingID)->value('education_required');
    // $educationarearequired = DB::table('education_requirement')->where('job_listing_ID',$jobListingID)->value('education_area');
    $skillsrequired = DB::table('skills_requirement')->where('job_listing_ID',$jobListingID)->pluck('skill_required');
    $jobrequired = DB::table('job_requirement')->where('job_listing_ID',$jobListingID)->pluck('job_required');

    $users = DB::table('user_profile')
            ->join('education', 'user_profile.profile_ID', '=', 'education.profile_ID')
            ->join('previous_jobs', 'user_profile.profile_ID', '=', 'previous_jobs.profile_ID')
            ->join('skills', 'user_profile.profile_ID', '=', 'skills.profile_ID')
            ->select('*')
            ->where('education.education_type', '>=', $educationrequired)
    // ->where('education_requirement.education_Area', $educationarearequired)
            ->orwhere('skills.skill', $skillsrequired)
            ->orwhere('previous_jobs.Job_Name', $jobrequired)
            ->get();
    return view('matchmake', compact('users'));
})->name('matchmake');
//Authentication Routes
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
?>
