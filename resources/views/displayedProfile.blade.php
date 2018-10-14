@extends('layouts.app')

@section('content')


<!doctype html>

<html>

<head>

    <title></title>

</head>

<body>
<center>
<h1> Your Profile </h1>
</center>

        @foreach ($UserProfile as $UserProfile)

        <div class="card">
        <div class="card-body">
        <h4> <a href="/displayedProfile/{{$UserProfile->profile_ID}}">Name: {{ $UserProfile->First_Name }}</a> </h4>
        <h4> Last Name: {{ $UserProfile->Last_Name }} </h4>
        </div>
        </div>

        @endforeach

</body>

</html>


@endsection
