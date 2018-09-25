<!doctype html>

<html>

<head>

    <title></title>

</head>

<body>

    <ul>

        @foreach ($joblistings as $joblisting)

        <li>Job Name: {{ $joblisting->Job_Name }}
        	<br>Job Company: {{ $joblisting->Job_Company }}</li>

        @endforeach

    </ul>

</body>

</html>
