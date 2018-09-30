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
             'firstName' => 'required',
             'lastName' => 'required',
             'currentJob' => 'required',
             'previousJob' => 'required',
             'location' => 'required',
             'areaOfWork' => 'required',
             'jobPreference' => 'required',
             'bioDescription' => 'required'
        ]);

        $post = new UserProfile;
        $post->firstName = $request->input('firstName');
        $post->lastName = $request->input('lastName');
        $post->currentJob = $request->input('currentJob');
        $post->previousJob = $request->input('previousJob');
        $post->location = $request->input('location');
        $post->areaOfWork = $request->input('areaOfWork');
        $post->jobPreference = $request->input('jobPreference');
        $post->bioDescription = $request->input('bioDescription');
        $post->userID = auth()->user()->id;
        $post->save();
        return redirect('/profileSkills');
    }
}
