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

use \App\createJob;
use \App\createJob2;
use \App\createJob3;
use \App\createJob4;

Route::get('/', function (){
    return view('index');
})->name('index');

Route::get('/home', function (){
    return view('index');
})->name('index');


Route::resource('createJob', 'createJobController');
Route::resource('createJob2', 'createJob2Controller');
Route::resource('createJob3', 'createJob3Controller');
Route::resource('createJob4', 'createJob4Controller');
Route::resource('showJobs', 'showJobsController');

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

Route::get('/matchmakejobs/{jobListingID}/more', function ($jobListingID){

$job = createJob::find($jobListingID);
$job2 = createJob2::where('Job_Listing_id', $jobListingID)->get();
$job3 = createJob3::where('Job_Listing_id', $jobListingID)->get();
$job4 = createJob4::where('Job_Listing_id', $jobListingID)->get();
return view('matchmakejobs_more')->with('createJob', $job)->with('createJob2', $job2)->with('createJob3', $job3)->with('createJob4', $job4);

})->name('matchmakejobs_more');

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

Route::get('/index', function (){
    return view('index');
})->name('index');

Route::group(['prefix' => 'users'], function(){
  Route::resource('/','UserController');
	
});

/**Route::get('/', function (){
    return view('index');
})->name('index');

Route::get('/home', function (){
    return view('index');
})->name('index');
**/
Route::get('/about', function (){
    return view('about');
})->name('about');

Route::get('/support', function (){
  return view('support');
})->name('support');
//Route::get('/contact', function (){
  //  return view('contact');
//})->name('contact');
//Route::get('/contact',[
  //'uses'=>'ContactController@show']);

Route::get('/contactUS', 'ContactUSController@contactus');
Route::post('/contactUS', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);


Route::group(['prefix' => 'users'], function(){
  Route::resource('/','UserController');
});

Route::get('/profile', function(){
    return view('profile');
})->name('profile');

Route::get('/displayedProfile', function(){
    return view('displayedProfile');
})->name('displayedProfile');

Route::get('/profileSkills', function(){
    return view('profileSkills');
})->name('profileSkills');

Route::get('/profileEducation', function(){
    return view('profileEducation');
})->name('profileEducation');

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

//Route::get('/', function () {
  //  return view('index');
//});

//Authentication Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/' , function(){
  if(Auth::check()){return Redirect::to('home');}
  return view('index');
});

Route::delete('/delete/{id}','UserController@destory');



Route::group(['middleware' => ['web','auth']] ,function(){
  Route::get('/home', function (){
      return view('home');
  })->name('home');
});
Route::get('/home',function(){
  if(Auth::user()->admin == 0){
    return view('home');
} else{
  $users['users'] = \App\User::all();
  return view('adminhome',$users);
}
});

?>

