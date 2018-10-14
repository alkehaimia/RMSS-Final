@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                          <p>{{\Session::get('success')}}</p>
                        </div>
                    <br/>
                    @endif
                    <div class="alert alert-success">
                      <p> You're logged in as ADMINISTRATOR</p>
                    </div>
                    <center>
                      <h3>USERS</h3>
                    </center>
                    <table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th> Member Name</th>
                          <th>Email</th>
                          <th>Admin</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    @foreach ($users as $key => $user);
                      <tr>
                        <td>{{ $key+1}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->admin}}</td>
                        <td>
                        <center>

                        <form action = "{{ URL('users/'.$user->id) }}" method="post">
                            <a href="{{action('UserController@edit',$user['id'])}}" class="btn  btn-warning">Edit</a>
                        <form action="{{action('UserController@destory',$user['id'])}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                             <button class="btn  btn-danger" type="submit">Delete</button>
                           </form>
                         </td>
                        </center>
                     @endforeach
                  </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
