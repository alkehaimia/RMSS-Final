@extends('layouts.app')

@section('content')

<head>
  <!--<script src="{{ asset('js/createSkillsInput.js') }}" defer></script>-->
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
                    <p>[User's Name]</p> <input name="name" id="name" disabled></input>

                <br><br>

                    <p>[Profile Picture]</p> <input name="picture" id="picture" disabled></input>
                </div>
                <br><br>
            <div class="panel panel-default" align="center">
              <br>
                <div class="panel-body" align="left">
                  <h6>How many skills would you like to enter?</h6>
                  <br><br>
                  <h7>Please enter in the box <b>below</b>.</h7>
                  <br><br>
                  <input type="text" id="numberOfSkills" placeholder="Number of Skills"></input>
                  <br><br>
                  <button type="button" onclick="addFields()">Add More Skills</button>
                  <!--<a href="#" onclick="addFields()">Add More Skills</a>-->
                  <br><br>
                  <h5>Skills</h5>
                  <br><br>

                  <form action="" method="POST">
                    <div id="addSkillsField">

                    </div>

                    <h6>Click here to submit your <b>skills</b></h6>
                    <input type="submit" value="Save"></input>
                    </form>
                </div>
              <br><br>
              <form action="" method="POST">
                <h5>Education</h5> <textarea rows="4" col="50" placeholder="Education"> </textarea> <br> <br>
                <h5>Current Job</h5> <textarea rows="4" col="50" placeholder="Current Job"> </textarea> <br> <br>
                <h5>Previous Job</h5> <textarea rows="4" col="50" placeholder="Previous Job"> </textarea> <br> <br>
                <h5>Location</h5> <textarea rows="4" col="50" placeholder="Location"> </textarea> <br> <br>
                <h5>Area of Work (e.g. IT,Engineering, etc)</h5> <textarea rows="4" col="50" placeholder="Area of Work"> </textarea> <br> <br>
                <h5>Job Preference</h5> <textarea rows="4" col="50" placeholder="Job Preference"> </textarea> <br><br>

                <br> <br>
                <h6>Click here to submit your <b>profile information</b></h6>
                <input type="submit" value="Save"></input>
                </form>
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
