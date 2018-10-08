@extends('layouts.app')

@section('content')

<div class="panel-body">
                    <center>
                    <h3>Your Job listings</h3>
                    </center>
                    @if(count($createJob) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Job name</th>
                                <th>Company name</th>
                            </tr>
                            @foreach($createJob as $createJob)
                                <tr>
                                    <td><a href="/showJobs/{{$createJob->Job_Listing_id}}">{{$createJob->Job_Name}}</a></td>
                                    <td>{{$createJob->Job_Company}}</td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                    <center>
                        <h5>You have no job listings</h5>
                        <h5>Click on <a href="/createJob">create job</a> to create a job listing</h5>
                    </center>
                    @endif
                </div>

                @endsection
