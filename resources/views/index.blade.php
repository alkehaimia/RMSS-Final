@extends('layouts.app')

@section('content')
<head>
</style>
<div class="container">
    <div class="row">
      <div class="container-fluid">
        <div class="navbar-header">
        <div class="col-md-8 col-sm-4">
                <div class="panel-heading" align="center"><b><h3>Welcome to RMSS</h3></b></div>
                <br>
              </div>
            </div>
          </div>
                  <div class="jumbotron">
                <div class="panel-body" align="center">
                    <p>RMSS is a job matchmaking website based in Melbourne , Australia. We are focused in the matching potential graduate students with a job.</p><br>
                    <p><a class="btn btn-success" @(Auth::guest()) href="{{ route('register') }}">Join now </a></p>
                </div>
            <div class="panel panel-default" align="left">
                <div class="panel-heading"><b><h4>Algorithmic matchmaking</h4></b></div>
<br>
                <div class="panel-body" align="left">
                    <p>RMSS will use an matchmaking algorithm for your skillset and will find the suitable job.</p>
                    <p>After you place your registration, the matchmaking will list the most suitable match depending on the requirements of the job and your current skillset.</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><h4>We are here to help</h4></div>

                <div class="panel-body" align="left">
                    <p class="index-ad-panel"><i class="fa fa-users" aria-hidden="true"></i></p>
                    <p>&bull; Match your skills and strengths with current job vacancies.</p>
                    <p>&bull; Connect you with a potential employers and jobs to your skills.</p>
                    <p>&bull; Find your dream job or let our matchmaking to find it for you.</p>
                </div>
            </div>
        </div>
    </div>
  </div>
</head>
@endsection
