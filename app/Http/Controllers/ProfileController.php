<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile()
    {
      return view('profile');
    }

    public function showdisplayedProfile()
    {
      return view('displayedProfile');
    }

    public function edit($id)
    {
      //
    }

    public function update($id)
    {
      //
    }

    public function destroy($id)
    {
      //
    }

    public function addSkillsInProfile(Request $request)
  {
      $rules = [];
      foreach($request->input('name') as $key => $value) {
          $rules["name.{$key}"] = 'required';
      }

      $validator = Validator::make($request->all(), $rules);
      if ($validator->passes()) {
          foreach($request->input('skill') as $key => $value) {
              SkillsList::create(['skill'=>$value]);
          }
          return response()->json(['success'=>'done']);
      }
      return response()->json(['error'=>$validator->errors()->all()]);
  }
}
