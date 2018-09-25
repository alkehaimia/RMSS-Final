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
    
	$joblistings = DB::table('job_listing')
			->join('education_requirement', 'job_listing.Job_Listing_ID', '=', 'education_requirement.Job_Listing_ID')
			->join('job_requirement', 'job_listing.Job_Listing_ID', '=', 'job_requirement.Job_Listing_ID')
			->select('*')
			->where('job_listing.job_listing_ID',$jobListingID)
			->distinct()
			->get();
	return view('matchmake', compact('joblistings'));

	// $users = DB::table('user_profile')
 //            ->join('education', 'user_profile.profile_ID', '=', 'education.profile_ID')
 //            ->join('previous_jobs', 'user_profile.profile_ID', '=', 'previous_jobs.profile_ID')
 //            ->select('*')
 //    return view('matchmake', compact('users'));

})->name('matchmake');

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
