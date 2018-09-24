<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\createJob3;

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

                $nullCheck = $request->input('education'.$i);
                if(!isset($nullCheck) || trim($nullCheck)  == '') {
                   
                }else { 
                    
                $post = new createJob3;
                $post->education = $request->input('education'.$i);
                $post->educationType = $request->input('education'.$i.'Type');
                $post->userID = auth()->user()->id;
                $post->save();

                }

            }

            return redirect('/');
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
