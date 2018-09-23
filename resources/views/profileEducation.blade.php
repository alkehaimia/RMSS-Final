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

                </div>
                <br><br>
            <div class="panel panel-default" align="center">
              <br>
                <div class="panel-body" align="left">



                </div>

              <br><br>


            </div>

            <br> <br>

            <div class="panel-body" align="left">
              <a class="navbar-brand" href="{{ url('/displayedProfile') }}">View your Profile</a>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection
