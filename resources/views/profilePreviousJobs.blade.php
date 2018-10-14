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

                  {!! Form::open(['action' => 'ProfilePreviousJobsController@store', 'method' => 'Post']) !!}
                      <div class="form-group">
                      {{Form::label('Job_Name1', 'Job Name')}}
                      {{Form::text('Job_Name1', '', ['class' => 'form-control'])}}
                      {{Form::label('Job_Company1', 'Company')}}
                      {{Form::text('Job_Company1', '', ['class' => 'form-control'])}}
                      {{Form::label('Duration1', 'Duration')}}
                      {{Form::text('Duration1', '', ['class' => 'form-control'])}}
                      </div>

                      <div class="form-group">
                      {{Form::label('Job_Name2', 'Job Name')}}
                      {{Form::text('Job_Name2', '', ['class' => 'form-control'])}}
                      {{Form::label('Job_Company2', 'Company')}}
                      {{Form::text('Job_Company2', '', ['class' => 'form-control'])}}
                      {{Form::label('Duration2', 'Duration')}}
                      {{Form::text('Duration2', '', ['class' => 'form-control'])}}
                      </div>

                      <div class="form-group">
                      {{Form::label('Job_Name3', 'Job Name')}}
                      {{Form::text('Job_Name3', '', ['class' => 'form-control'])}}
                      {{Form::label('Job_Company3', 'Company')}}
                      {{Form::text('Job_Company3', '', ['class' => 'form-control'])}}
                      {{Form::label('Duration3', 'Duration')}}
                      {{Form::text('Duration3', '', ['class' => 'form-control'])}}
                      </div>

                      <div class="form-group">
                      {{Form::label('Job_Name4', 'Job Name')}}
                      {{Form::text('Job_Name4', '', ['class' => 'form-control'])}}
                      {{Form::label('Job_Company4', 'Company')}}
                      {{Form::text('Job_Company4', '', ['class' => 'form-control'])}}
                      {{Form::label('Duration4', 'Duration')}}
                      {{Form::text('Duration4', '', ['class' => 'form-control'])}}
                      </div>

                      <div class="form-group">
                      {{Form::label('Job_Name5', 'Job Name')}}
                      {{Form::text('Job_Name5', '', ['class' => 'form-control'])}}
                      {{Form::label('Job_Company5', 'Company')}}
                      {{Form::text('Job_Company5', '', ['class' => 'form-control'])}}
                      {{Form::label('Duration5', 'Duration')}}
                      {{Form::text('Duration5', '', ['class' => 'form-control'])}}
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
