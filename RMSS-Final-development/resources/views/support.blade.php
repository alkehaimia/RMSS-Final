@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="team" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p class="page-heading"align="center"><strong><i class="fa fa-info-circle" aria-hidden="true"></i>Support-FAQ</strong></p>
                </div>
            </div>

            <div class="panel panel-default">
              <hr>
                <div class="panel-heading"><strong>Account Issues</strong></div>
                <div class="panel-body">

                  <p><strong>I forgot my password.How can i login in?</strong></p>
                  <p> Click the 'Forgot your Password?' The link is on the login page and we will you a link to reset your password.</p><hr>
                    <p><strong>Having trouble access your account?</strong></p>
                    <p>As Admininstrator, we can access to edit your name and email. We can also delete the account that is register.

                    </div>
                    <hr>
                </div>
                <br>
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Applying for a Job</strong></div>
                    <div class="panel-body">
                      <p><strong>What will RMSS do with the Job Application?</strong></p>
                      <p>RMSS will match the job seekers and job employers. Job seekers will need to make a profile in our system. The Job Employers will need to enter their details accurately for a suitable match for the right employee. </p>
                        </div>
                    </div>
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong>Technical Issues</strong></div>
                        <div class="panel-body">
                          <p><strong>Having Issues?</strong></p>
                          <p> Feel free to use our Contact Us if there are any technical fault.</p>
                            </div>
                        </div>
                        <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
