<!doctype html>

<html>

<head>

    <title></title>

</head>

<body>

    <ul>

        @foreach ($users as $user)

        <li>Name: {{ $user->First_Name }} {{ $user->Last_Name }} 
        	<br>DoB: {{ $user->Date_of_Birth }} 
        	<br>Gender: {{ $user->Sex }} 
        	<br>Location: {{ $user->Location }} 
        	<br>Current Job: {{ $user->Current_Job }} 
        	<br>Education Area: {{ $user->Education_Area }} 
        	<br>Education Type: {{ $user->Education_Type }}
            <br>Previous Job: {{ $user->Job_Name }}</li>

        @endforeach

    </ul>

</body>

</html>
