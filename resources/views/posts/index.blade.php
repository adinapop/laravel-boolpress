@extends('templates.structure')

@section('main')

<div class="container">
    @foreach ($posts as $post) 
    <div class="row">
        <div class="post-container col">
            <h2>{{$post->title}}</h2>
            <div><span>@</span>{{$post->username}}</div>
            <p>{{$post->summary}}</p>
            <div class="text-right">{{$post->position}}</div>
            <div class="text-right"><a href="{{ route('posts.show', $post) }}">Read more..</a></div>
        </div>
        
    </div>
    @endforeach
</div>

@endsection


