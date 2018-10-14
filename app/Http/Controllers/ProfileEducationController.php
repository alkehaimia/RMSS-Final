<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProfileEducation;
use App\UserProfile;

class ProfileEducationController extends Controller
{
  public function showProfile()
  {
    return view('profileEducation');
  }

  public function store(Request $request)
   {
       $this->validate($request, [
           'Education_Area1' => 'required',
           'Education_Type1' => 'required'
          ]);

           for ($i = 1; $i < 6; $i++){

               $profile_New2 = UserProfile::latest()->value('profile_ID');

               $nullCheck = $request->input('Education_Area'.$i);
               if(!isset($nullCheck) || trim($nullCheck)  == '') {

               }else {
               $post = new profileEducation;
               $post->Education_Area = $request->input('Education_Area'.$i);
               $post->Education_Type = $request->input('Education_Type'.$i);
               $post->User_ID = auth()->user()->id;
               $post->profile_ID = $profile_New2;
               $post->save();
               }
           }
           return redirect('/profilePreviousJobs');
   }
}
