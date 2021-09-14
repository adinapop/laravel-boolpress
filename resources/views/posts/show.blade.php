@extends('templates.structure')

@section('singlePost')
    <div class="container">
        <div class="row">
            <div class="content col">
                <h1>{{strtoupper($post->title)}}</h1>
                <div><i class="fas fa-user"></i> {{$post->username}} </div>
                <div><i class="fas fa-map-marker-alt"></i> {{$post->position}}</div>
                <div class="mt-4 mb-3"><img src="{{$post->image}}" alt="{{$post->title}}' image"></div>
                <p>{{$post->caption}}</p>
                <div class="text-right mt-2">By: {{ucfirst($post->name)}} {{ucfirst($post->surname)}}</div>
            </div>
        </div>
    </div>
@endsection