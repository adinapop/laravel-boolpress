@extends('templates.structure')

@section('main')

<div class="container">
    <div class="index-container row">
        @foreach ($posts as $post) 

        <div class="post-container col-6">
            <div class="content">
                <h2>{{$post->title}}</h2>
                <div><span>@</span>{{$post->username}}</div>
                <p>{{$post->summary}}</p>
                <div class="text-right">{{$post->position}}</div>
                <div class="text-right"><a class="link-route" href="{{ route('posts.show', $post) }}">Read more..</a></div>
            </div>
        </div>

        @endforeach
    </div>
</div>

@endsection


