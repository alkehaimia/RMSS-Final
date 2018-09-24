@extends('layouts.app')

@section('content')

{!! Form::open(['action' => 'createJobController@store', 'method' => 'Post']) !!}
    <div class="form-group">
    {{Form::label('name', 'name')}}
    {{Form::text('name', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('currentJob', 'currentJob')}}
    {{Form::text('currentJob', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('currentJobTime', 'currentJobTime')}}
    {{Form::text('currentJobTime', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('previousJob', 'previousJob')}}
    {{Form::text('previousJob', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('previousJobTime', 'previousJobTime')}}
    {{Form::text('previousJobTime', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('location', 'location')}}
    {{Form::text('location', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('areaOfWork', 'areaOfWork')}}
    {{Form::text('areaOfWork', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('jobPreference', 'jobPreference')}}
    {{Form::text('jobPreference', '', ['class' => 'form-control'])}}
    </div>

    {{Form::submit('next page', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection