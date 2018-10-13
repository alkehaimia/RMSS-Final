@extends('layouts.app')

@section('content')

<div class="container">
<div class="col-12 col-md-6">

{!! Form::open(['action' => 'createJob3Controller@store', 'method' => 'Post']) !!}
    <div class="form-group {{ $errors->has('education1') ? 'has-error' : '' }}">
    {{Form::label('education_area', 'Education field')}}
    {{Form::text('education1', '', ['class' => 'form-control', 'id' => 'education1', 'required'])}}
    {{Form::label('Education_Required', 'Degree required')}}
    {{Form::select('education1Type', array('1' => 'High School Diploma', '2' => 'Tafe Degree', '3' => 'Associates Degree', '4' => 'Bachelors Degree', '5' => 'Masters Degree', '6' => 'PHD'))}}
    </div>

    <div class="form-group">
    {{Form::label('education_area', 'Education field')}}
    {{Form::text('education2', '', ['class' => 'form-control'])}}
    {{Form::label('Education_Required', 'Degree required')}}
    {{Form::select('education2Type', array('1' => 'High School Diploma', '2' => 'Tafe Degree', '3' => 'Associates Degree', '4' => 'Bachelors Degree', '5' => 'Masters Degree', '6' => 'PHD'))}}
    </div>

    <div class="form-group">
    {{Form::label('education_area', 'Education field')}}
    {{Form::text('education3', '', ['class' => 'form-control'])}}
    {{Form::label('Education_Required', 'Degree required')}}
    {{Form::select('education3Type', array('1' => 'High School Diploma', '2' => 'Tafe Degree', '3' => 'Associates Degree', '4' => 'Bachelors Degree', '5' => 'Masters Degree', '6' => 'PHD'))}}
    </div>

    <div class="form-group">
    {{Form::label('education_area', 'Education field')}}
    {{Form::text('education4', '', ['class' => 'form-control'])}}
    {{Form::label('Education_Required', 'Degree required')}}
    {{Form::select('education4Type', array('1' => 'High School Diploma', '2' => 'Tafe Degree', '3' => 'Associates Degree', '4' => 'Bachelors Degree', '5' => 'Masters Degree', '6' => 'PHD'))}}
    </div>

    <div class="form-group">
    {{Form::label('education_area', 'Education field')}}
    {{Form::text('education5', '', ['class' => 'form-control'])}}
    {{Form::label('Education_Required', 'Degree required')}}
    {{Form::select('education5Type', array('1' => 'High School Diploma', '2' => 'Tafe Degree', '3' => 'Associates Degree', '4' => 'Bachelors Degree', '5' => 'Masters Degree', '6' => 'PHD'))}}
    </div>

    {{Form::submit('next page', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
    </div>

@endsection