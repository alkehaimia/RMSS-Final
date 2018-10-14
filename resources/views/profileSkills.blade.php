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


                  {!! Form::open(['action' => 'ProfileSkillsController@store', 'method' => 'Post']) !!}

                      <div class="form-group">
                      {{Form::label('skill', 'skill1')}}
                      {{Form::text('skill1', '', ['class' => 'form-control'])}}
                      </div>

                      <div class="form-group">
                      {{Form::label('skill ', 'skill2')}}
                      {{Form::text('skill2', '', ['class' => 'form-control'])}}
                      </div>

                      <div class="form-group">
                      {{Form::label('skill', 'skill3')}}
                      {{Form::text('skill3', '', ['class' => 'form-control'])}}
                      </div>

                      <div class="form-group">
                      {{Form::label('skill', 'skill4')}}
                      {{Form::text('skill4', '', ['class' => 'form-control'])}}
                      </div>

                      <div class="form-group">
                      {{Form::label('skill', 'skill5')}}
                      {{Form::text('skill5', '', ['class' => 'form-control'])}}
                      </div>

                      <div class="form-group">
                      {{Form::label('skill', 'skill6')}}
                      {{Form::text('skill6', '', ['class' => 'form-control'])}}
                      </div>

                      <div class="form-group">
                      {{Form::label('skill', 'skill7')}}
                      {{Form::text('skill7', '', ['class' => 'form-control'])}}
                      </div>

                      <div class="form-group">
                      {{Form::label('skill', 'skill8')}}
                      {{Form::text('skill8', '', ['class' => 'form-control'])}}
                      </div>

                      <div class="form-group">
                      {{Form::label('skill', 'skill9')}}
                      {{Form::text('skill9', '', ['class' => 'form-control'])}}
                      </div>

                      <div class="form-group">
                      {{Form::label('skill', 'skill10')}}
                      {{Form::text('skill10', '', ['class' => 'form-control'])}}
                      </div>

                      {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                  {!! Form::close() !!}

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
