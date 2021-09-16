@extends('templates.structure')

@section('header')
    <div class="container">
        <h1 class="text-center">WELCOME TO 
            <div>BOOLPRESS</div>
        </h1>

        <div class="row">
            <div class="users-posts col-6">
                <div class="content">
                    <h1>See others users posts</h1>
                    <a href="{{ route('posts.index') }}"><i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>

            <div class="create-post col-6">
                <div class="content">
                    <h1>Create your own post</h1>
                    <a href="{{ route('posts.create') }}"><i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection