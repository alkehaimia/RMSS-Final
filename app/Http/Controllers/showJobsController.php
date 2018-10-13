<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\createJob;
use \App\createJob2;
use \App\createJob3;
use \App\createJob4;

class showJobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('showJobs')->with('createJob', $user->createJob);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = createJob::find($id);
        $job2 = createJob2::where('Job_Listing_id', $id)->get();
        $job3 = createJob3::where('Job_Listing_id', $id)->get();
        $job4 = createJob4::where('Job_Listing_id', $id)->get();
        return view('showJobs2')->with('createJob', $job)->with('createJob2', $job2)->with('createJob3', $job3)->with('createJob4', $job4);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
