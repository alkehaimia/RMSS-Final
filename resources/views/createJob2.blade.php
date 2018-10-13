@extends('layouts.app')

@section('content')

<div class="container">
<div class="col-12 col-md-6">

{!! Form::open(['action' => 'createJob2Controller@store', 'method' => 'Post']) !!}
    <div class="form-group {{ $errors->has('skill1') ? 'has-error' : '' }}">
    {{Form::label('Skill_required', 'Skill required')}}
    {{Form::text('skill1', '', ['class' => 'form-control', 'id' => 'skill1', 'required'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required ', 'Skill required')}}
    {{Form::text('skill2', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'Skill required')}}
    {{Form::text('skill3', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'Skill required')}}
    {{Form::text('skill4', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'Skill required')}}
    {{Form::text('skill5', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'Skill required')}}
    {{Form::text('skill6', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'Skill required')}}
    {{Form::text('skill7', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'Skill required')}}
    {{Form::text('skill8', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'Skill required')}}
    {{Form::text('skill9', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'Skill required')}}
    {{Form::text('skill10', '', ['class' => 'form-control'])}}
    </div>

    {{Form::submit('next page', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
    </div>

@endsection