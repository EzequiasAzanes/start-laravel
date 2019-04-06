@extends('layouts.app')
@section('title', 'Create Category')

@section('content')

<h1> Create Category </h1>

{!! Form::open(['method' => 'POST', 'route' => 'categories.store', 'class' => 'form-horizontal']) !!}

<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Category Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('title') }}</small>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Category Description') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('description') }}</small>
</div>

<div class="btn-group pull-right">
        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
    </div>
    
{!! Form::close() !!}

@endsection
