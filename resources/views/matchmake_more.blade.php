@extends('layouts.app')

@section('content')

<div class="panel-body">
                    <center>
                    <h1>{{$UserProfile->First_Name}}</h1>
                    </center>

<div class="card">
<div class="card-body">
<center>
<h4>First Name: {{$UserProfile->First_Name}} </h4>
<h4>Last Name: {{$UserProfile->Last_Name}} </h4>
<h4>Date of Birth: {{$UserProfile->Date_of_Birth}} </h4>
<h4>Sex: {{$UserProfile->Sex}} </h4>
<h4>Current Job: {{$UserProfile->Current_Job}} </h4>
<h4>Location: {{$UserProfile->Location}} </h4>
<h4>Area Of Work: {{$UserProfile->Area_of_Work}} </h4>
<h4>Your Description: {{$UserProfile->Bio_Description}} </h4>

@foreach($ProfileSkills as $ProfileSkills)
<h4>Skill: {{$ProfileSkills->skill}}</h4>
@endforeach

@foreach($ProfileEducation as $ProfileEducation)

@switch($ProfileEducation->Education_Type)
@case(1)
@php $eduType = "High School Diploma" @endphp
@break

@case(2)
@php $eduType = "Tafe Degree" @endphp
@break

@case(3)
@php $eduType = "Associates Degree" @endphp
@break

@case(4)
@php $eduType = "Bachelors Degree" @endphp
@break

@case(5)
@php $eduType = "Masters Degree" @endphp
@break

@case(6)
@php $eduType = "PHD" @endphp
@break

@endswitch

<h4>Education: {{$ProfileEducation->Education_Area}} {{$eduType}}</h4>

@endforeach

@foreach($ProfilePreviousJobs as $ProfilePreviousJobs)
<h4>Previous Job: {{$ProfilePreviousJobs->Job_Name}}</h4>
<h4>Company: {{$ProfilePreviousJobs->Job_Company}}</h4>
<h4>Duration: {{$ProfilePreviousJobs->Duration}}</h4>
@endforeach

<a href="/" class="btn btn-success">Accept</a>
<a href="/matchmake/{{$UserProfile->profile_ID}}" class="btn btn-danger">Decline</a>

</center>

</div>
</div>

</div>

 @endsection
