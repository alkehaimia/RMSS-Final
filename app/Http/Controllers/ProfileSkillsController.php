<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProfileSkills;
use App\UserProfile;

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

               $profile_New = UserProfile::latest()->value('profile_ID');

               $nullCheck = $request->input('skill'.$i);
               if(!isset($nullCheck) || trim($nullCheck)  == '') {

               }else {
               $post = new ProfileSkills;
               $post->skill = $request->input('skill'.$i);
               $post->User_ID = auth()->user()->id;
               $post->profile_ID = $profile_New;
               $post->save();
               }
           }
           return redirect('/profileEducation');
   }
}
