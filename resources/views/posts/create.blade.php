@extends('templates.structure')

@section('form')
    <div class="container">

        <h2 class="mt-4 mb-4">Crea un nuovo post</h2>

        <form action="{{ route('posts.store')}}" method="post">
            @csrf

            <label class="mt-2" for="name">Name</label>
            <input type="text" class="form-control"name="name" id="name">

            <label class="mt-2" for="surname">Surname</label>
            <input type="text" class="form-control"name="surname" id="surname">
            
            <label class="mt-2" for="username">Username</label>
            <input type="text" class="form-control"name="username" id="username">
            
            <label class="mt-2" for="title">Title</label>
            <input type="text" class="form-control"name="title" id="title">

            <div class="mt-2">Categoria</div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text mt-2" for="category_id">Opzioni</label>
                    </div>
                    <select class="custom-select mt-2" id="category_id" name="category_id">
                        <option selected>Scegli la categoria del tuo post..</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <label class="mt-2" for="caption">Caption</label>
            <textarea type="text" class="form-control" name="caption" id="caption" rows="3"></textarea>

            <label class="mt-2" for="summary">Summary</label>
            <textarea type="text" class="form-control" name="summary" id="summary"></textarea>

            <label class="mt-2" for="position">Position</label>
            <input type="text" class="form-control" name="position" id="position">

            <div class="mt-3 mb-3">
                <label class="mt-2" for="image">Add image:</label>
                <input type="file" name="image" id="image">
            </div>

            <div>
                <button type="submit" class="btn btn-dark mb-5" type="submit">Create post</button>
            </div>

        </form>

    </div>
    
@endsection