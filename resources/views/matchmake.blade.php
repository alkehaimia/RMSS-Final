
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

        @foreach ($users as $user)

        <div class="card">
        <div class="card-body">
        <h4> <a href="/matchmake/{{$user->profile_ID}}/more">Name: {{ $user->First_Name }}</a> </h4>
        <h4> Last Name: {{ $user->Last_Name }} </h4>
        </div>
        </div>

        @endforeach

</body>

</html>

@endsection
