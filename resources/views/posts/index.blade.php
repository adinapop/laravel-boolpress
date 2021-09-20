@extends('templates.structure')

@section('main')

<div class="container">

    @if (!Auth::check())
        <div class="access">
            <a href="{{ route('login') }}">{{ __('Devi autentificarti per poter modificare o cancellare un post') }}</a>
        </div>
    @endif

    <h1>I post degli altri utenti</h1>
    
    <div class="row">

        @foreach ($posts as $post) 
            <div class="post-container col-4">
                
                <div class="inner-content">

                    <div class="d-flex align-items-center justify-content-end">

                        {{-- IF... --}}
                        @if (Auth::check())

                            {{-- ...the user is logged in, show the edit and delete buttons --}}

                            <a href="{{ route('posts.edit', $post) }}">
                                <i class="far fa-edit"></i>
                            </a>
                            
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=""><i class="far fa-trash-alt"></i></button>
                            </form>
                        @endif
        

                    </div>

                    <h2>{{$post->title}}</h2>
                    <div><span>@</span>{{$post->username}}</div>
                    <p>{{$post->summary}}</p>
                    <div class="text-right">
                        <a class="link-route" href="{{ route('posts.show', $post) }}">Read more..</a>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
</div>

@endsection


