@extends('layouts.app')

@section('content')

{!! Form::open(['action' => 'createJob3Controller@store', 'method' => 'Post']) !!}
    <div class="form-group">
    {{Form::label('education_area', 'education1')}}
    {{Form::text('education1', '', ['class' => 'form-control'])}}
    {{Form::label('Education_Required', 'education1Type')}}
    {{Form::select('education1Type', array('1' => 'High School Diploma', '2' => 'Tafe Degree', '3' => 'Associates Degree', '4' => 'Bachelors Degree', '5' => 'Masters Degree', '6' => 'PHD'))}}
    </div>

    <div class="form-group">
    {{Form::label('education_area', 'education2')}}
    {{Form::text('education2', '', ['class' => 'form-control'])}}
    {{Form::label('Education_Required', 'education1Type')}}
    {{Form::select('education2Type', array('1' => 'High School Diploma', '2' => 'Tafe Degree', '3' => 'Associates Degree', '4' => 'Bachelors Degree', '5' => 'Masters Degree', '6' => 'PHD'))}}
    </div>

    <div class="form-group">
    {{Form::label('education_area', 'education3')}}
    {{Form::text('education3', '', ['class' => 'form-control'])}}
    {{Form::label('Education_Required', 'education1Type')}}
    {{Form::select('education3Type', array('1' => 'High School Diploma', '2' => 'Tafe Degree', '3' => 'Associates Degree', '4' => 'Bachelors Degree', '5' => 'Masters Degree', '6' => 'PHD'))}}
    </div>

    <div class="form-group">
    {{Form::label('education_area', 'education4')}}
    {{Form::text('education4', '', ['class' => 'form-control'])}}
    {{Form::label('Education_Required', 'education1Type')}}
    {{Form::select('education4Type', array('1' => 'High School Diploma', '2' => 'Tafe Degree', '3' => 'Associates Degree', '4' => 'Bachelors Degree', '5' => 'Masters Degree', '6' => 'PHD'))}}
    </div>

    <div class="form-group">
    {{Form::label('education_area', 'education5')}}
    {{Form::text('education5', '', ['class' => 'form-control'])}}
    {{Form::label('Education_Required', 'education1Type')}}
    {{Form::select('education5Type', array('1' => 'High School Diploma', '2' => 'Tafe Degree', '3' => 'Associates Degree', '4' => 'Bachelors Degree', '5' => 'Masters Degree', '6' => 'PHD'))}}
    </div>

    {{Form::submit('next page', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
 
@endsection