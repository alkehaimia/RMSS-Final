<!doctype html>

<html>

<head>

    <title></title>

</head>

<body>

    <ul>

        @foreach ($users as $user)

        <li>{{ $user->First_Name }} {{ $user->Last_Name }} {{ $user->Date_of_Birth }} {{ $user->Sex }} {{ $user->Location }} {{ $user->Current_Job }}</li>


        @endforeach

    </ul>

</body>

</html>
