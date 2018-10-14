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

Route::get('/matchmake/{jobListingID}/more', function ($jobListingID){

$job = createJob::find($jobListingID);
$job2 = createJob2::where('Job_Listing_id', $jobListingID)->get();
$job3 = createJob3::where('Job_Listing_id', $jobListingID)->get();
$job4 = createJob4::where('Job_Listing_id', $jobListingID)->get();
return view('matchmake_more')->with('createJob', $job)->with('createJob2', $job2)->with('createJob3', $job3)->with('createJob4', $job4);

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
?>

});
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

