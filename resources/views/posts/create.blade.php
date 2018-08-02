@extends('layouts.app')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}

@endsection

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostController@store','data-parsley-validate' => '', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'required' => '', 'maxlength' => '10', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['required' => '', 'id' => 'article-ckeditor', 'class' => 'form-control',  'maxlength' => '10', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection