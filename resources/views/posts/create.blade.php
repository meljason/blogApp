@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {{-- When adding File Upload, make sure to a --}}
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', null, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>

        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>

        {{Form::submit('Submit', ['class' => 'btn btn-dark'])}}
        {!! Form::close() !!}
@endsection