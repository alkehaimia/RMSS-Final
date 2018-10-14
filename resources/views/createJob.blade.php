@extends('layouts.app')

@section('content')

<div class="container">
<div class="col-12 col-md-6">

{!! Form::open(['action' => 'createJobController@store', 'method' => 'Post']) !!}
    <div class="form-group {{ $errors->has('Job_Name') ? 'has-error' : '' }}">
    {{Form::label('Job_Name', 'Job name')}}
    {{Form::text('Job_Name', '', ['class' => 'form-control', 'id' => 'Job_Name', 'required'])}}
    </div>

    <div class="form-group {{ $errors->has('Job_Company') ? 'has-error' : '' }}">
    {{Form::label('Job_Company', 'Job company')}}
    {{Form::text('Job_Company', '', ['class' => 'form-control', 'id' => 'Job_Company', 'required'])}}
    </div>

    <div class="form-group {{ $errors->has('Job_Area') ? 'has-error' : '' }}">
    {{Form::label('Job_Area', 'Job Field')}}
    {{Form::text('Job_Area', '', ['class' => 'form-control', 'id' => 'Job_Area', 'required'])}}
    </div>

    <div class="form-group {{ $errors->has('Job_Hours') ? 'has-error' : '' }}">
    {{Form::label('Job_Hours', 'Job hours')}}
    {{Form::text('Job_Hours', '', ['class' => 'form-control', 'id' => 'Job_Hours', 'required'])}}
    </div>

    <div class="form-group {{ $errors->has('Contact_Information') ? 'has-error' : '' }}">
    {{Form::label('Contact_Information', 'Contact Information')}}
    {{Form::text('Contact_Information', '', ['class' => 'form-control', 'id' => 'Contact_Information', 'required'])}}
    </div>

    {{Form::submit('next page', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
    </div>

@endsection