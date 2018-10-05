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

Route::resource('createJob', 'createJobController');
Route::resource('createJob2', 'createJob2Controller');


/**Route::get('/', function (){
    return view('index');
})->name('index');

Route::get('/home', function (){
    return view('index');
})->name('index');
**/
Route::get('/index', function (){
    return view('index');
})->name('index');

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
