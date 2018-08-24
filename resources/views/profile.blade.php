@extends('layouts.app')

@section('content')
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
                    <p>[User's Name]</p>
                </div>
                <br>
                <div class="panel-body" align="center">
                    <p>[Profile Picture]</p>
                </div>
                <bbr>
            <div class="panel panel-default" align="left">
              <br>
                <div class="panel-body" align="left">
                    <p>Skills</p>
                    <p>Education</p>
                    <p>Current Job</p>
                    <p>Previous Job</p>
                    <p>Location</p>
                    <p>Area of Work (e.g. IT,Engineering, etc)</p>
                    <p>Job Preference</p>
                </div>
            </div>
          </div>
    </div>
  </div>
@endsection
