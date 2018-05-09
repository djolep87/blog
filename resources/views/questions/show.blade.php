@extends('layouts.app')

@section('content')
<a href="/questions" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
<small>Writen on {{$post->created_at}}</small>


@if(!Auth::guest())
@if(Auth::user()->id ==$post->user_id)
    <a href="/questions/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['QuestionsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endif    
@endif   
@endsection