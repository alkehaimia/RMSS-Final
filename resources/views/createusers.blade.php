@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                  <form action = "{{ URL('users') }}{{ isset($user) ? '/'. $user->id : ''}}" method="POST">
                    <div class="form-group">
                      {{csrf_field()}}
                       @if (isset($user))
                        {{method_field('PUT')}}
                      @endif
                      <input type="text" name="name" placeholder="Name" class="form-control" value="{{isset($users) ? $user->name :''}}">
                      <br>
                      <input type="email" name="email" placeholder="Email" class="form-control" value="{{isset($users) ? $user->email :''}}">
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
