@extends('templates.structure')

@section('singlePost')

    <div class="container">

        <div class="row">

            <div class="content col">

                
                <div class="togh-cont">
                    <div class="user-cont">
                        <h1>{{strtoupper($post->title)}}</h1>
                        <h4>By: {{ ucfirst($post->name) }} {{ ucfirst($post->surname) }} </h4>
                        <p>Category: {{ $post->category->name }}</p>
                        <div><i class="fas fa-user"></i> {{ $post->username }}</div>
                        <div><i class="fas fa-map-marker-alt"></i> {{ ucfirst($post->position) }}</div>
                    </div>

                    <div class="img-container mb-2 mt-2">
                        <img src="{{ $post->image }}" alt="{{ $post->title }}' image">
                    </div>

                </div>
                
                <p>{{ $post->caption }}</p>

                <div class="text-right mb-3">{{ $post->created_at }} <i class="fas fa-clock"></i></div>
            </div>
        </div>
    </div>
@endsection