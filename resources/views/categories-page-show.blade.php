<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Categories Page Show</title>
  </head>
  <body>
      <h1> {{$id}}  {{$name}}</h1>
  </body>
</html> -->

@extends('layouts.app')

@section('title', 'Categories Page Show')

@section('content')
    <h1> {{$id}}  {{$name}}</h1>
@endsection

@section('script')
<script type="text/javascript">
  alert('Hello World')
</script>
@endsection