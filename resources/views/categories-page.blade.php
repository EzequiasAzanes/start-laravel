<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Categories Page</title>
  </head>
  <body>
      <h1>This is the Categories Page</h1>
  </body>
</html> -->

@extends('layouts.app')

@section('title', 'Categories Page')

@section('content')
    <h1>Categories Page</h1>

    @if (count($categories))
      <ul>
        @foreach ($categories as $category)
          <li>{{$category}}</li>
        @endforeach
      </ul>
    @endif


@endsection