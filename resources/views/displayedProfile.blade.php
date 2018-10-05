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

            <div class="panel panel-default" align="center">
              <br>
              <div class="panel-body" align="left">

                <table>
                  @foreach($profileInfo as $key => $value)
                    <tr>
                      <!--<td>First Name</td>-->
                      <td>{{$value->firstName}}</td>
                    </tr>
                    <tr>
                      <!--<td>Last Name</td>-->
                      <td>{{$value->lastName}}</td>
                    </tr>
                    <tr>
                      <!--<td>Current Job</td>-->
                      <td>{{$value->currentJob}}</td>
                    </tr>
                    <tr>
                      <!--<td>Previous Job</td>-->
                      <td>{{$value->previousJob}}</td>
                    </tr>
                    <tr>
                      <!--<td>Location</td>-->
                      <td>{{$value->location}}</td>
                    </tr>
                    <tr>
                      <!--<td>Area of Work</td>-->
                      <td>{{$value->areaOfWork}}</td>
                    </tr>
                    <tr>
                      <!--<td>Job Preference</td>-->
                      <td>{{$value->jobPreference}}</td>
                    </tr>
                    <tr>
                      <!--<td>Describe Yourself</td>-->
                      <td>{{$value->bioDescription}}</td>
                    </tr>
                  @endforeach
                </table>

              </div>

            <br> <br>

            <div class="panel-body" align="left">
              <a class="navbar-brand" href="{{ url('/profile') }}">Return to add to your <b>Profile</b> </a>
              <br>
              - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
              <br>
              <a class="navbar-brand" href="{{ url('/profileSkills') }}">Return to add to your <b>Profile's Skills</b> </a>
              <br>
              - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
              <br>
              <a class="navbar-brand" href="{{ url('/profileEducation') }}">Return to add to your <b>Profile's Education</b> </a>
            </div>

          </div>
        </div>
    </div>
  </div>
@endsection
