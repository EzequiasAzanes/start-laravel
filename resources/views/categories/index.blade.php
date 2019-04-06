@extends('layouts.app')
@section('title', 'Categories')

@section('content')

<h1> Categories </h1>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($categories as $category)
      <tr>
        <td>{{$category->title}}</td>
        <td>{{$category->description}}</td>
        <td>

        {!! Form::model($category, ['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}

            <div class="btn-group pull-right">
              <a class = "btn btn-primary"
              href = "/categories/{{$category->id}}/edit">Edit
            </a>

            </div>
            {!! Form::submit("Delete", ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{$categories->links()}}
@endsection
