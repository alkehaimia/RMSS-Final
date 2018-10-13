<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Hash;


class UserController extends Controller
{

    public function index()
    {
      $data['users'] = User::all();
      return view('users', $data);
    }
    public function create()
    {
        //return view('createusers');
    }
    public function store(Request $request)
    {
      $user= new \App\User;
      $user->name=$request->get('name');
      $user->email=$request->get('email');
      $user->admin=$request->get('admin');
      $user->save();
      return('/home')->with('success','Information has been added');
    }

    public function edit($id)
    {
    $user =User::find($id);
    return view('edit',compact('user','id'));
    /**  $data['users'] = User::find($id);
      return view('create', $data);**/
    }
    public function update(Request $request, $id)
    {
    $this->validate($request,[
      'name'=>'required',
      'email' => 'required',
    ]);
    User::find($id)->update($request->all());
    return redirect('/home')->with ('success','New User has been updated!!');
    }
    public function show($id){
      //$data['users'] = User::all();
      //dd($data);
    }
    public function destroy($id)
    {
      User::destroy($id);
      return redirect('home')
      ->with('success','User has been deleted');
    }
  }
