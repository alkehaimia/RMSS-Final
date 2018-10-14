<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\createJob3;
use App\createJob;

class createJob3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createJob3');
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
        $this->validate($request, [
            'education1' => 'required',
            'education1Type' => 'required'
            ]);

            for ($i = 1; $i < 6; $i++){ 

                $job_id = createJob::latest()->value('Job_Listing_id');

                $nullCheck = $request->input('education'.$i);
                if(!isset($nullCheck) || trim($nullCheck)  == '') {
                   
                }else { 
                    
                $post = new createJob3;
                $post->education_area = $request->input('education'.$i);
                $post->Education_Required = $request->input('education'.$i.'Type');
                $post->Job_Listing_id = $job_id;
                $post->user_id = auth()->user()->id;
                $post->save();

                }

            }

            return redirect('/createJob4');
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