@extends('layouts.app')
@section('title', 'Edit Category')

@section('content')

<h1> Edit Category </h1>

{!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        {!! Form::label('title', 'Category Title') !!}
        {!! Form::text('title', $category->title, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('title') }}</small>
    </div>

    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        {!! Form::label('description', 'Category Description') !!}
        {!! Form::text('description', $category->description, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('description') }}</small>
    </div>

    <div class="btn-group pull-right">
        {!! Form::submit("Update", ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}

@endsection
