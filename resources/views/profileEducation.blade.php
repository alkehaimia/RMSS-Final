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
                      {{Form::label('educationArea1', 'Field of Study 1')}}
                      {{Form::text('educationArea1', '', ['class' => 'form-control'])}}
                      <br>
                      {{Form::select('educationType1', array('1' => 'High School Diploma','2' => 'Tafe Degree','3' => 'Associates Degree','4' => 'Bachelors Degree','5' => 'Masters Degree','6' => 'PHD'))}}
                    </div>

                    <br><br>

                    <div class="form-group">
                      {{Form::label('educationArea2', 'Field of Study 2')}}
                      {{Form::text('educationArea2', '', ['class' => 'form-control'])}}
                      <br>
                      {{Form::select('educationType2', array('1' => 'High School Diploma','2' => 'Tafe Degree','3' => 'Associates Degree','4' => 'Bachelors Degree','5' => 'Masters Degree','6' => 'PHD'))}}
                    </div>

                    <br><br>

                    <div class="form-group">
                      {{Form::label('educationArea3', 'Field of Study 3')}}
                      {{Form::text('educationArea3', '', ['class' => 'form-control'])}}
                      <br>
                      {{Form::select('educationType3', array('1' => 'High School Diploma','2' => 'Tafe Degree','3' => 'Associates Degree','4' => 'Bachelors Degree','5' => 'Masters Degree','6' => 'PHD'))}}
                    </div>

                    <br><br>

                    <div class="form-group">
                      {{Form::label('educationArea4', 'Field of Study 4')}}
                      {{Form::text('educationArea4', '', ['class' => 'form-control'])}}
                      <br>
                      {{Form::select('educationType4', array('1' => 'High School Diploma','2' => 'Tafe Degree','3' => 'Associates Degree','4' => 'Bachelors Degree','5' => 'Masters Degree','6' => 'PHD'))}}
                    </div>

                    <br><br>

                    <div class="form-group">
                      {{Form::label('educationArea5', 'Field of Study 5')}}
                      {{Form::text('educationArea5', '', ['class' => 'form-control'])}}
                      <br>
                      {{Form::select('educationType5', array('1' => 'High School Diploma','2' => 'Tafe Degree','3' => 'Associates Degree','4' => 'Bachelors Degree','5' => 'Masters Degree','6' => 'PHD'))}}
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
