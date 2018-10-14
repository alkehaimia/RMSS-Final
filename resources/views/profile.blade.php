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

                {!! Form::open(['action' => 'ProfileController@store', 'method' => 'Post']) !!}
                  <div class="form-group">
                    {{Form::label('First_Name', 'First Name')}}
                    {{Form::text('First_Name', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('Last_Name', 'Last Name')}}
                    {{Form::text('Last_Name', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('Date_of_Birth', 'Date of Birth')}}
                    {{Form::text('Date_of_Birth', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('Sex', 'Your Sex')}}
                    {{Form::text('Sex', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('Current_Job', 'Current Job')}}
                    {{Form::text('Current_Job', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('Location', 'Location')}}
                    {{Form::text('Location', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('Area_of_Work', 'Area Of Work')}}
                    {{Form::text('Area_of_Work', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('Job_Preference', 'Job Preference')}}
                    {{Form::text('Job_Preference', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('Bio_Description', 'Describe Yourself')}}
                    {{Form::textarea('Bio_Description', '', ['class' => 'form-control'])}}
                  </div>

                  {{Form::submit('next page', ['class'=>'btn btn-primary'])}}
                  {!! Form::close() !!}

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
