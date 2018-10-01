@extends('layouts.app')

@section('content')

{!! Form::open(['action' => 'createJobController@store', 'method' => 'Post']) !!}
    <div class="form-group">
    {{Form::label('Job_Name', 'Job_Name')}}
    {{Form::text('Job_Name', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Job_Company', 'Job_Company')}}
    {{Form::text('Job_Company', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Job_Area', 'Job_Area')}}
    {{Form::text('Job_Area', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Job_Hours', 'Job_Hours')}}
    {{Form::text('Job_Hours', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Contact_Information', 'Contact_Information')}}
    {{Form::text('Contact_Information', '', ['class' => 'form-control'])}}
    </div>

    {{Form::submit('next page', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection