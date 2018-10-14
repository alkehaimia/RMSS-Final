@extends('layouts.app')

@section('content')

<head>
  <!--<script src="{{ asset('js/createSkillsInput.js') }}" defer></script>--->
  <link rel="javascript" type="javascript" href="{{ url('/createSkillsInput.js') }}">
</head>

<div class="container">
    <div class="row">
      <div class="container-fluid">
        <div class="navbar-header">
        <div class="col-md-8 col-sm-4">
                <div class="panel-heading" align="center"><b><h3>Welcome To Your Profile</h3></b></div>
                <br>
        </div>
            </div>
          </div>
          <div class="jumbotron">
                <div class="panel-body" align="center">
                    <p>[User's Name]</p> <input name="name" id="name" disabled></input>

                <br><br>

                    <p>[Profile Picture]</p> <input name="picture" id="picture" disabled></input>
                </div>
                <br><br>
            <div class="panel panel-default" align="center">
              <br>
                <div class="panel-body" align="left">

                  <h5>Skills</h5>

                </div>

              <br><br>

              <div class="panel-body" align="left">
                <h5>Education</h5>
              </div>

              <br> <br>

              <div class="panel-body" align="left">

                <h5>Current Job</h5>  <br> <br>
                <h5>Previous Job</h5>  <br> <br>
                <h5>Location</h5>  <br> <br>
                <h5>Area of Work (e.g. IT,Engineering, etc)</h5>  <br> <br>
                <h5>Job Preference</h5> <br><br>

            </div>

            <br> <br>

            <div class="panel-body" align="left">
              <a class="navbar-brand" href="{{ url('/profile') }}">Return to add to your Profile </a>
            </div>

          </div>
        </div>
    </div>
  </div>
@endsection
