@extends('layouts.app')

@section('content')
<html>
<head>
<meta charset="utf-8">
<title>Edit</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                  <form action = "{{action('UserController@update',$id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for ="name">Name</label>
                      <input type="text" name="name" placeholder="name" class="form-control" value="{{$user->name}}">
                      <br>
                      <label for ="Email">Email</label>
                      <input type="email" name="email" placeholder="Email" class="form-control" value="{{$user->email}}">
                      <label for ="ADMIN">Admin</label>
                      <input type="admin" name="admin" placeholder="Admin" class="form-control" value="{{$user->admin}}">
                      <button type="submit" class="btn btn-success">Submit</button>
                    </td>
                  </form>
                  </center>
              </tbody>
                </div>
            </div>
        </div>
    </div>
</div>


</tr>
@endsection
