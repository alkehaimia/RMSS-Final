<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProfilePreviousJobs;
use App\UserProfile;

class ProfilePreviousJobsController extends Controller
{
  public function showProfile()
  {
    return view('profilePreviousJobs');
  }

  public function store(Request $request)
   {
       $this->validate($request, [
           'Job_Name1' => 'required',
           'Job_Company1' => 'required',
           'Duration1' => 'required'
           ]);
           for ($i = 1; $i < 11; $i++){

               $profile_New3 = UserProfile::latest()->value('profile_ID');

               $nullCheck = $request->input('Job_Name'.$i);
               $nullCheck = $request->input('Job_Company'.$i);
               $nullCheck = $request->input('Duration'.$i);
               if(!isset($nullCheck) || trim($nullCheck)  == '') {

               }else {
               $post = new ProfilePreviousJobs;
               $post->Job_Name = $request->input('Job_Name'.$i);
               $post->Job_Company = $request->input('Job_Company'.$i);
               $post->Duration = $request->input('Duration'.$i);
               $post->User_ID = auth()->user()->id;
               $post->profile_ID = $profile_New3;
               $post->save();
               }
           }
           return redirect('/displayedProfile');
   }
}
