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

Route::get('/users', function (){
    
	$users = DB::table('user_profile')->get();
    return view('users', compact('users'));

})->name('users');

Route::get('/matchmakeLocation', function (){
    
	$users = DB::table('user_profile')->where('Location','Melbourne')->get();
    return view('matchmakeLocation', compact('users'));

})->name('MatchmakeLocation');

Route::get('/matchmakeLocation/{location}', function ($location){
    
	$users = DB::table('user_profile')->where('Location',$location)->get();
    return view('matchmakeLocation', compact('users'));

})->name('MatchmakeLocation');

// Route::get('/matchmakeEducation/{Education_Area}', function ($educationArea){
    
// 	$users = DB::table('user_profile')
//             ->join('education', 'user_profile.profile_ID', '=', 'education.profile_ID')
//             ->select('*')
//             ->where('education.education_Area',$educationArea)
//             ->get();
//     return view('matchmakeEducation', compact('users'));

// })->name('MatchmakeLocation');

Route::get('/matchmakeEducation/{Education_Area}/{Education_Type}', function ($educationArea, $educationtype){
    
	$users = DB::table('user_profile')
            ->join('education', 'user_profile.profile_ID', '=', 'education.profile_ID')
            ->select('*')
            ->where('education.education_Area',$educationArea)
            ->where('education.Education_Type', '>' ,$educationtype)
            ->get();
    return view('matchmakeEducation', compact('users'));

})->name('MatchmakeLocation');

Route::get('/matchmakeuser/{Education_Area}/{Education_Type}/{Location}/{previous_jobs}', function ($educationArea, $educationtype, $location, $previousjob){
    
	$users = DB::table('user_profile')
            ->join('education', 'user_profile.profile_ID', '=', 'education.profile_ID')
            ->join('previous_jobs', 'user_profile.profile_ID', '=', 'previous_jobs.profile_ID')
            ->select('*')
            ->where('education.education_Area',$educationArea)
            ->where('education.Education_Type', '>' ,$educationtype)
            ->where('user_profile.Location',$location)
            ->where('previous_jobs.Job_Name',$previousjob)
            ->get();
    return view('matchmakeuser', compact('users'));

})->name('matchmakeuser');

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

    // $joblistings = DB::table('job_listing')
    //      ->join('education_requirement', 'job_listing.Job_Listing_ID', '=', 'education_requirement.Job_Listing_ID')
    //      ->join('job_requirement', 'job_listing.Job_Listing_ID', '=', 'job_requirement.Job_Listing_ID')
    //      ->join('skills_requirement', 'job_listing.Job_Listing_ID', '=', 'skills_requirement.Job_Listing_ID')
    //      ->select('*')
    //      ->where('education_requirement.education_required', '>=', $educationrequired)
    //      // ->where('education_requirement.education_Area', $educationarearequired)
    //      ->orwhere('skills_requirement.skill_required', $skillsrequired)
    //      ->orwhere('job_requirement.job_required', $jobrequired)
    //      ->distinct()
    //      ->get();
    // return view('matchmake', compact('joblistings'));

})->name('matchmake');

Route::get('/matchmakejobs/{profile_ID}', function ($profileID){

    $educations = DB::table('education')->where('profile_ID',$profileID)->value('education_Type');
    // $educationarearequired = DB::table('education_requirement')->where('job_listing_ID',$jobListingID)->value('education_area');
    $skill = DB::table('skills')->where('profile_ID',$profileID)->pluck('skill');
    $job = DB::table('previous_jobs')->where('profile_ID',$profileID)->pluck('Job_Name');

    $joblistings = DB::table('job_listing')
         ->join('education_requirement', 'job_listing.Job_Listing_ID', '=', 'education_requirement.Job_Listing_ID')
         ->join('job_requirement', 'job_listing.Job_Listing_ID', '=', 'job_requirement.Job_Listing_ID')
         ->join('skills_requirement', 'job_listing.Job_Listing_ID', '=', 'skills_requirement.Job_Listing_ID')
         ->select('*')
         ->where('education_requirement.education_required', '>=', $educations)
         // // ->where('education_requirement.education_Area', $educationarearequired)
         ->orwhere('skills_requirement.skill_required', $skill)
         ->orwhere('job_requirement.job_required', $job)
         ->distinct()
         ->get();
    return view('matchmakejobs' , compact('joblistings'));

})->name('matchmakejobs');

Route::get('/matchmakejoblisting', function (){
	$joblistings = DB::table('job_listing')
			->join('education_requirement', 'job_listing.Job_Listing_ID', '=', 'education_requirement.Job_Listing_ID')
			->join('job_requirement', 'job_listing.Job_Listing_ID', '=', 'job_requirement.Job_Listing_ID')
			->select('*')
			->get();
	return view('matchmakejoblisting', compact('joblistings'));

 })->name('MatchmakeJoblisting');

//Route::get('/', function () {
  //  return view('index');
//});

//Authentication Routes
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
?>
