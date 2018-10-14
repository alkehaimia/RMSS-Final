<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UserProfile;
use App\ProfileSkills;
use App\ProfileEducation;
use App\ProfilePreviousJobs;

class DisplayedProfileController extends Controller
{
    public function index()
    {
        $user_ID = auth()->user()->id;
        $user = User::find($user_ID);
        return view('displayedProfile')->with('UserProfile', $user->UserProfile);
    }

    public function show($id)
    {
        $profile = UserProfile::find($id);
        $profile2 = ProfileSkills::where('profile_ID', $id)->get();
        $profile3 = ProfileEducation::where('profile_ID', $id)->get();
        $profile4 = ProfilePreviousJobs::where('profile_ID', $id)->get();
        return view('displayedProfile2')->with('UserProfile', $profile)->with('ProfileSkills', $profile2)->with('ProfileEducation', $profile3)->with('ProfilePreviousJobs', $profile4);
    }
}
