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

                  {!! Form::open(['action' => 'ProfileEducationController@store', 'method' => 'Post']) !!}

                    <div class="form-group">

                      {{Form::label('Education_Area1', 'Field of Study 1')}}
                      {{Form::text('Education_Area1', '', ['class' => 'form-control'])}}
                      <br>
                      {{Form::select('Education_Type1', array('1' => 'High School Diploma','2' => 'Tafe Degree','3' => 'Associates Degree','4' => 'Bachelors Degree','5' => 'Masters Degree','6' => 'PHD'))}}
                    </div>

                    <br><br>

                    <div class="form-group">
                      {{Form::label('Education_Area2', 'Field of Study 2')}}
                      {{Form::text('Education_Area2', '', ['class' => 'form-control'])}}
                      <br>
                      {{Form::select('Education_Type2', array('1' => 'High School Diploma','2' => 'Tafe Degree','3' => 'Associates Degree','4' => 'Bachelors Degree','5' => 'Masters Degree','6' => 'PHD'))}}
                    </div>

                    <br><br>

                    <div class="form-group">
                      {{Form::label('Education_Area3', 'Field of Study 3')}}
                      {{Form::text('Education_Area3', '', ['class' => 'form-control'])}}
                      <br>
                      {{Form::select('Education_Type3', array('1' => 'High School Diploma','2' => 'Tafe Degree','3' => 'Associates Degree','4' => 'Bachelors Degree','5' => 'Masters Degree','6' => 'PHD'))}}
                    </div>

                    <br><br>

                    <div class="form-group">
                      {{Form::label('Education_Area4', 'Field of Study 4')}}
                      {{Form::text('Education_Area4', '', ['class' => 'form-control'])}}
                      <br>
                      {{Form::select('Education_Type4', array('1' => 'High School Diploma','2' => 'Tafe Degree','3' => 'Associates Degree','4' => 'Bachelors Degree','5' => 'Masters Degree','6' => 'PHD'))}}
                    </div>

                    <br><br>

                    <div class="form-group">
                      {{Form::label('Education_Area5', 'Field of Study 5')}}
                      {{Form::text('Education_Area5', '', ['class' => 'form-control'])}}
                      <br>
                      {{Form::select('Education_Type5', array('1' => 'High School Diploma','2' => 'Tafe Degree','3' => 'Associates Degree','4' => 'Bachelors Degree','5' => 'Masters Degree','6' => 'PHD'))}}
                    </div>

                    <br><br>


                    {{Form::submit('next page', ['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}


                </div>

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
