<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProfileSkills;

class ProfileSkillsController extends Controller
{
  public function showProfile()
  {
    return view('profileSkills');
  }

  public function store(Request $request)
   {
       $this->validate($request, [
           'skill1' => 'required'
           ]);
           for ($i = 1; $i < 11; $i++){
               $nullCheck = $request->input('skill'.$i);
               if(!isset($nullCheck) || trim($nullCheck)  == '') {

               }else {
               $post = new ProfileSkills;
               $post->skill = $request->input('skill'.$i);
               //$post->userID = auth()->user()->id;
               $post->save();
               }
           }
           return redirect('/profileEducation');
   }
}
