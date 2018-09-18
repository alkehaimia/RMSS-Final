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

Route::group(['prefix' => 'users'], function(){
  Route::resource('/','UserController');

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

