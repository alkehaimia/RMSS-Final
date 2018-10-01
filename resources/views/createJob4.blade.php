@extends('layouts.app')

@section('content')

{!! Form::open(['action' => 'createJob4Controller@store', 'method' => 'Post']) !!}
    <div class="form-group">
    {{Form::label('Job_Required', 'jobreq1')}}
    {{Form::text('jobreq1', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Job_Required ', 'jobreq2')}}
    {{Form::text('jobreq2', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Job_Required', 'jobreq3')}}
    {{Form::text('jobreq3', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Job_Required', 'jobreq4')}}
    {{Form::text('jobreq4', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Job_Required', 'jobreq5')}}
    {{Form::text('jobreq5', '', ['class' => 'form-control'])}}
    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}






@endsection