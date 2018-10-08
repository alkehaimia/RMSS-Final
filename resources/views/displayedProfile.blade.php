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

                <h4>Your Profile</h4>
                <br>
                <table>
                  @foreach($users as $user)
                    <tr>
                      <td>First Name: </td>
                      <td>{{$user->firstName}}</td>
                    </tr>
                    <tr>
                      <td>Last Name: </td>
                      <td>{{$user->lastName}}</td>
                    </tr>
                    <tr>
                      <td>Current Job: </td>
                      <td>{{$user->currentJob}}</td>
                    </tr>
                    <tr>
                      <td>Previous Job: </td>
                      <td>{{$user->previousJob}}</td>
                    </tr>
                    <tr>
                      <td>Location: </td>
                      <td>{{$user->location}}</td>
                    </tr>
                    <tr>
                      <td>Area of Work: </td>
                      <td>{{$user->areaOfWork}}</td>
                    </tr>
                    <tr>
                      <td>Job Preference: </td>
                      <td>{{$user->jobPreference}}</td>
                    </tr>
                    <tr>
                      <td>Describe Yourself: </td>
                      <td>{{$user->bioDescription}}</td>
                    </tr>
                  @endforeach
                </table>
                <br><br>

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
