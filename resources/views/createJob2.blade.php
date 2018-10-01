@extends('layouts.app')

@section('content')

{!! Form::open(['action' => 'createJob2Controller@store', 'method' => 'Post']) !!}
    <div class="form-group">
    {{Form::label('Skill_required', 'skill1')}}
    {{Form::text('skill1', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required ', 'skill2')}}
    {{Form::text('skill2', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'skill3')}}
    {{Form::text('skill3', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'skill4')}}
    {{Form::text('skill4', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'skill5')}}
    {{Form::text('skill5', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'skill6')}}
    {{Form::text('skill6', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'skill7')}}
    {{Form::text('skill7', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'skill8')}}
    {{Form::text('skill8', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'skill9')}}
    {{Form::text('skill9', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('Skill_required', 'skill10')}}
    {{Form::text('skill10', '', ['class' => 'form-control'])}}
    </div>

    {{Form::submit('next page', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection