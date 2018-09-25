@extends('layouts.app')

@section('content')

{!! Form::open(['action' => 'createJob2Controller@store', 'method' => 'Post']) !!}
    <div class="form-group">
    {{Form::label('skill', 'skill1')}}
    {{Form::text('skill1', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill ', 'skill2')}}
    {{Form::text('skill2', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill', 'skill3')}}
    {{Form::text('skill3', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill', 'skill4')}}
    {{Form::text('skill4', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill', 'skill5')}}
    {{Form::text('skill5', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill', 'skill6')}}
    {{Form::text('skill6', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill', 'skill7')}}
    {{Form::text('skill7', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill', 'skill8')}}
    {{Form::text('skill8', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill', 'skill9')}}
    {{Form::text('skill9', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill', 'skill10')}}
    {{Form::text('skill10', '', ['class' => 'form-control'])}}
    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection