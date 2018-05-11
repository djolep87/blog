@extends('layouts.app')

@section('content')
<a href="/questions" class="btn btn-default">Go Back</a>
<br>
<br>
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
<hr>
<div class="comments">
    <ul class="list-group">
    
        @foreach($post->comments as $comment)

            <li class="list-group-item">

                <strong>
                    {{ $comment->created_at->diffForHumans() }}: &nbsp;
                </strong>
        
                {{ $comment->body }}
            </li>

        @endforeach

    </ul>

</div>
<hr>
<div class="card">
    <div class="card-block">
        
        <form method="POST" action="/questions/{{ $post->id }}/comments">
        {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
            <div class="form-group">
                <textarea name="body" placeholder="Your comment here." class="form-control"></textarea>
            </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
        </form>

    </div>

</div>
</form>
@endsection