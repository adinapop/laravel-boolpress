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
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="trash" data-toggle="modal" data-target="#modal{{ $post->id }}">
                                <i class="far fa-trash-alt"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $post->id }}Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="{{ $post->id }}Label">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        Sei sicuro di voler eliminare questo post?
                                    </div>

                                    <div class="modal-footer">

                                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">No</button>

                                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">Si</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

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


