<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProfileEducation;

class ProfileEducationController extends Controller
{
  public function showProfile()
  {
    return view('profileEducation');
  }

  public function store(Request $request)
   {
       $this->validate($request, [
           'educationArea1' => 'required',
           'educationType1' => 'required'
          ]);

           for ($i = 1; $i < 11; $i++){
               $nullCheck = $request->input('education'.$i);
               if(!isset($nullCheck) || trim($nullCheck)  == '') {

               }else {
               $post = new profileEducation;
               $post->skill = $request->input('education'.$i);
               //$post->userID = auth()->user()->id;
               $post->save();
               }
           }
           return redirect('/displayedProfile');
   }
}
