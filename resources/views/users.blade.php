@extends('layouts.app')

@section('content')
<center>
  <h3>USERS</h3>
</center>

@if(Session::has('success'))
<h3>{{Session::get('success')}}</h3>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Admin</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $key => $user)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->admin}}</td>
                  <td>
                  <center>

                  <form action = "{{ URL('users/'. $user->id) }}" method="POST">
                      <a href="{{URL('users/create') }}" class="btn  btn-success">New</a>
                      <a href="{{URL('users/' . $user->id . '/edit') }}" class="btn  btn-info">Edit</a>
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                      <button type="submit" class="btn btn-danger">Delete</button>
                      <a href="{{URL('users/' . $user->id) }}" class="btn btn-primary">Show</a>
                    </td>
                  </form>
                  </center>
                @endforeach
              </tbody>
                </div>
            </div>
        </div>
    </div>
</div>


</tr>
@endsection
