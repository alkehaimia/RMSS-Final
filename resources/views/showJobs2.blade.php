@extends('layouts.app')

@section('content')

<div class="panel-body">
                    <center>
                    <h1>{{$createJob->Job_Name}}</h1>
                    </center>

<div class="card">
<div class="card-body">
<center>
<h4>Company name: {{$createJob->Job_Company}} </h4>
<h4>Area of Job: {{$createJob->Job_Area}} </h4>
<h4>Job hours: {{$createJob->Job_Hours}} </h4>
<h4>Contact information: {{$createJob->Contact_Information}} </h4>
@foreach($createJob2 as $createJob2)
<h4>skill: {{$createJob2->Skill_required}}</h4>
@endforeach
@foreach($createJob3 as $createJob3)

@switch($createJob3->Education_Required)
@case(1)
@php $edureq = "High School Diploma" @endphp
@break

@case(2)
@php $edureq = "Tafe Degree" @endphp
@break

@case(3)
@php $edureq = "Associates Degree" @endphp
@break

@case(4)
@php $edureq = "Bachelors Degree" @endphp
@break

@case(5)
@php $edureq = "Masters Degree" @endphp
@break

@case(6)
@php $edureq = "PHD" @endphp
@break

@endswitch

<h4>education: {{$createJob3->education_area}} {{$edureq}}</h4>

@endforeach

@foreach($createJob4 as $createJob4)
<h4>Job required: {{$createJob4->Job_Required}}</h4>
@endforeach

<a href="/matchmake/{{$createJob->Job_Listing_id}}" class="btn btn-default">Matchmake</a>
</center>

</div>
</div>

</div>

 @endsection