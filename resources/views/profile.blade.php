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
                <div class="panel-body" align="center">
                    <p>[User's Name]</p> <input name="name" id="name" disabled></input>
                </div>
                <br>
                <div class="panel-body" align="center">
                    <p>[Profile Picture]</p>
                </div>
                <bbr>
            <div class="panel panel-default" align="left">
              <br>
                <div class="panel-body" align="left">
                  <form action="" method="POST">
                    <p>Skills</p> <textarea rows="4" col="50"> </textarea> <br> <br>
                    <p>Education</p> <textarea rows="4" col="50"> </textarea> <br> <br>
                    <p>Current Job</p> <textarea rows="4" col="50"> </textarea> <br> <br>
                    <p>Previous Job</p> <textarea rows="4" col="50"> </textarea> <br> <br>
                    <p>Location</p> <textarea rows="4" col="50"> </textarea> <br> <br>
                    <p>Area of Work (e.g. IT,Engineering, etc)</p> <textarea rows="4" col="50"> </textarea> <br> <br>
                    <p>Job Preference</p> <textarea rows="4" col="50"> </textarea>
                  </form>
                </div>
            </div>
          </div>
    </div>
  </div>
@endsection
