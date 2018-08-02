@extends('layouts.app')

@section('content')
    <h1>Question</h1>
   
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
            <h3><a href="/questions/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach
        <hr>
        {{$posts->links()}}
    @else
        <p>No questions found</p>
    @endif
@endsection