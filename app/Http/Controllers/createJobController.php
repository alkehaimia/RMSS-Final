<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\createJob;

class createJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createJob');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
             'Job_Name' => 'required',
             'Job_Company' => 'required',
             'Job_Area' => 'required',
             'Job_Hours' => 'required',
             'Contact_Information' => 'required'
        ]);
        
        $post = new createJob;    
        $post->Job_Name = $request->input('Job_Name');
        $post->Job_Company = $request->input('Job_Company');
        $post->Job_Area = $request->input('Job_Area');
        $post->Job_Hours = $request->input('Job_Hours');
        $post->Contact_Information = $request->input('Contact_Information');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/createJob2');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
