@extends('templates.structure')

@section('form')
    <div class="container">
        <form action="{{ route('posts.store')}}" method="post">
            @csrf

            <label for="name">Name</label>
            <input type="text" class="form-control"name="name" id="name">

            <label for="surname">Surname</label>
            <input type="text" class="form-control"name="surname" id="surname">
            
            <label for="username">Username</label>
            <input type="text" class="form-control"name="username" id="username">
            
            <label for="title">Title</label>
            <input type="text" class="form-control"name="title" id="title">

            <label for="caption">Caption</label>
            <textarea type="text" class="form-control" name="caption" id="caption" rows="3"></textarea>

            <label for="summary">Summary</label>
            <textarea type="text" class="form-control" name="summary" id="summary"></textarea>

            <label for="position">Position</label>
            <input type="text" class="form-control" name="position" id="position">

            <div class="mt-3 mb-3">
                <label for="image">Add image:</label>
                <input type="file" name="image" id="image">
            </div>

            <div>
                <button type="submit" class="btn btn-dark mb-5" type="submit">Create post</button>
            </div>

        </form>
    </div>
    
@endsection