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
                    {{Form::label('firstName', 'First Name')}}
                    {{Form::text('firstName', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('lastName', 'Last Name')}}
                    {{Form::text('lastName', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('currentJob', 'Current Job')}}
                    {{Form::text('currentJob', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('previousJob', 'Previous Job')}}
                    {{Form::text('previousJob', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('location', 'Location')}}
                    {{Form::text('location', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('areaOfWork', 'Area Of Work')}}
                    {{Form::text('areaOfWork', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('jobPreference', 'Job Preference')}}
                    {{Form::text('jobPreference', '', ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('bioDescription', 'Describe Yourself')}}
                    {{Form::textarea('bioDescription', '', ['class' => 'form-control'])}}
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

<!--
<input type="text" name="skill_1" placeholder="Skill 1" required> <br> <br>
<input type="text" name="skill_2" placeholder="Skill 2"> <br> <br>
<input type="text" name="skill_3" placeholder="Skill 3"> <br> <br>
<input type="text" name="skill_4" placeholder="Skill 4"> <br> <br>
<input type="text" name="skill_5" placeholder="Skill 5"> <br> <br>
<input type="text" name="skill_6" placeholder="Skill 6"> <br> <br>
<input type="text" name="skill_7" placeholder="Skill 7"> <br> <br>
<input type="text" name="skill_8" placeholder="Skill 8"> <br> <br>
<input type="text" name="skill_9" placeholder="Skill 9"> <br> <br>
<input type="text" name="skill_10" placeholder="Skill 10"> <br> <br>
-->

<!--
<p>How many skills would you like to enter?</p>
<br>
<p>Please enter in the box <b>below</b>.</p>
<br>
<input type="text" name="numberOfSkills" id="numberOfSkills" placeholder="Number of Skills"></input>
<br><br>
<button type="button" onclick="addFields()">Add More Skills</button>
comment out normally -> <a href="#" onclick="addFields()">Add More Skills</a>
<br><br>
<h5>Skills</h5>
<br><br>

<form action="" method="POST">
  <div class="panel-body" name="addSkillsField" id="addSkillsField">

  </div>

  <p>Click here to submit your <b>skills</b></p>
  <input type="submit" value="Save"></input>
  </form>
-->
