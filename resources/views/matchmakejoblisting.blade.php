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
