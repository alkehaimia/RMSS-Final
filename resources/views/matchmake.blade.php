@extends('layouts.app')

@section('content')

<!doctype html>

<html>

<head>

    <title></title>

</head>

<body>
<center>
<h1> Matchmaking </h1>
</center>

{{--
<div class="card">
<div class="card-body">
<h4> <a href="/">test1 </a> </h4>
</div>
</div>

<div class="card">
<div class="card-body">
<h4> test1 </h4>
<h4> test12 </h4>
<h4> test1333333 </h4>
<h4> test14444444444 </h4>
</div>
</div>
--}}

        @foreach ($joblistings as $joblisting)

        <div class="card">
        <div class="card-body">
        <h4> <a href="/">Job Name: {{ $joblisting->Job_Name }}</a> </h4>
        <h4> Job Company: {{ $joblisting->Job_Company }} </h4>
        </div>
        </div>
    
        @endforeach

</body>

</html>

@endsection