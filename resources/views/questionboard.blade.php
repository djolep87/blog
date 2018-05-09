@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Questionboard</div>

                <div class="card-body">
                    <a href="/questions/create" class="btn btn-primary">Create Question</a>
                    <h3>Your Questions</h3>
                    @if(count($questions) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($questions as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/questions/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>
                                        {!!Form::open(['action' => ['QuestionsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    @else
                    <p>You have no posts.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection