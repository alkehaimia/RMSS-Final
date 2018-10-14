<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserProfile;

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

    public function store(Request $request)
    {
       $this->validate($request, [
             'First_Name' => 'required',
             'Last_Name' => 'required',
             'Date_of_Birth' => 'required',
             'Sex' => 'required',
             'Current_Job' => 'required',
             'Location' => 'required',
             'Area_of_Work' => 'required',
             'Job_Preference' => 'required',
             'Bio_Description' => 'required'
        ]);

        $post = new UserProfile;
        $post->First_Name = $request->input('First_Name');
        $post->Last_Name = $request->input('Last_Name');
        $post->Date_of_Birth = $request->input('Date_of_Birth');
        $post->Sex = $request->input('Sex');
        $post->Current_Job = $request->input('Current_Job');
        $post->Location = $request->input('Location');
        $post->Area_of_Work = $request->input('Area_of_Work');
        $post->Job_Preference = $request->input('Job_Preference');
        $post->Bio_Description = $request->input('Bio_Description');
        $post->user_ID = auth()->user()->id;
        $post->save();
        return redirect('/profileSkills');
    }
/*
    public function display()
    {
      $profileInfo = UserProfile::all();
      return view('/displayedProfile', compact('user_profile'))
    }
*/
}
