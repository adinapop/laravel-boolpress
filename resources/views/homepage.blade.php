@extends('templates.structure')

@section('main')

<div class="container">
    @foreach ($posts as $post) 
    <div class="row">
        <div class="post-container col">
            <h2>{{$post->title}}</h2>
            <div>By {{$post->username}}</div>
            <p>{{$post->summary}}</p>
            <div class="text-right">{{$post->position}}</div>
            <div class="text-right"><a href="http://">Read more..</a></div>
            {{-- <img src="{{$post->image}}" alt="image"> --}}
            {{-- <p>{{$post->caption}}</p> --}}
        </div>
        
    </div>
    @endforeach
</div>

@endsection


