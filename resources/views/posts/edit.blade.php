@extends('templates.structure')

@section('editPost')

    <div class="container">
            
            {{-- quello che si edita, va nella rotta update --}}
            <form action="{{ route('posts.update', $post) }}" method="POST">
                @csrf

                @method("PUT")
    
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $post->name }}">
    
                <label for="surname">Surname</label>
                <input type="text" class="form-control" name="surname" id="surname" value="{{ $post->surname }}">
                
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="{{ $post->username }}">
                
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
    
                <label for="caption">Caption</label>
                <textarea type="text" class="form-control" name="caption" id="caption" rows="3" value="{{ $post->caption }}"></textarea>
    
                <label for="summary">Summary</label>
                <textarea type="text" class="form-control" name="summary" id="summary" value="{{ $post->summary }}"></textarea>
    
                <label for="position">Position</label>
                <input type="text" class="form-control" name="position" id="position" value="{{ $post->position }}">
    
                <div class="mt-3 mb-3">
                    <label for="image">Add image:</label>
                    <input type="file" name="image" id="image" value="{{ $post->image }}">
                </div>
    
                <div>
                    <button type="submit" class="btn btn-dark mb-5" type="submit">Salva</button>
                </div>
    
            </form>

    </div>
    
@endsection