@extends('layouts.app')

@section('content')

<div class="container">
<div class="col-12 col-md-6">

{!! Form::open(['action' => 'createJob4Controller@store', 'method' => 'Post']) !!}
    <div class="form-group {{ $errors->has('jobreq1') ? 'has-error' : '' }}">
    {{Form::label('Job_Required', 'Previous job requirement')}}
    {{Form::text('jobreq1', '', ['class' => 'form-control', 'id' => 'jobreq1', 'required'])}}
    </div>

    <div class="form-group">
    {{Form::label('Job_Required ', 'Previous job requirement')}}
    {{Form::text('jobreq2', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Job_Required', 'Previous job requirement')}}
    {{Form::text('jobreq3', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Job_Required', 'Previous job requirement')}}
    {{Form::text('jobreq4', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Job_Required', 'Previous job requirement')}}
    {{Form::text('jobreq5', '', ['class' => 'form-control'])}}
    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
    </div>

@endsection