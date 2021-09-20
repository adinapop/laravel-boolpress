@extends('templates.structure')

@section('content')
    <div class="container welcome-container">
        <div class="row align-items-center">
            <div class="image-box col-6">
                <div class="inner-img-box">
                    <img src="./img/welcome-posts.jpg" alt="Welcome image">
                </div>
            </div>

            <div class="welcome-box col-6">
                <h1>Welcome to 
                    <div>BoolPress</div>
                </h1>
                <div class="mt-5">BoolPress ti offre tutto il necessario per creare il tuo sito web. Hosting gratuito, dominio, team di supporto di qualità e tanto altro ancora.</div>
                <button>ABOUT US</button>
            </div>
        </div>
    </div>

    <div class="button-box">
        <div>
            <button><a href="{{ route('posts.create') }}">Crea il tuo sito <i class="fas fa-long-arrow-alt-right"></i></a></button>
        </div>
    </div>

    <div class="container services-container">
        <h1>I nostri servizi</h1>
        <div class="row">
            <div class="col-6 single-service">
                <i class="fas fa-thumbs-up"></i>
                <h4>Piani per ogni budget</h4>
            </div>

            <div class="col-6 single-service">
                <i class="fas fa-pen-nib"></i>
                <h4>Crea un blog, sito web o ibirido</h4>
            </div>

            <div class="col-6 single-service">
                <i class="fas fa-lightbulb"></i>
                <h4>Suggerimenti e idee creative per il tuo sito</h4>
            </div>

            <div class="col-6 single-service">
                <i class="fas fa-tools"></i>
                <h4>Risoluzione rapida dei problemi e supporto</h4>
            </div>

            <div class="col-6 single-service">
                <i class="fas fa-edit"></i>
                <h4>Editor rapido</h4>
            </div>

            <div class="col-6 single-service">
                <i class="fas fa-chart-line"></i>
                <h4>Crescita rapida del tuo sito</h4>
            </div>
        </div>
    </div>

    <div class="container-themes">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex justify-content-center flex-column">
                    <div class="themes">
                        <h4>Centinaia di temi per i tuoi post</h4>
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
        
                    <div class="others-post">
                        <h4>Guarda i post degli altri utenti</h4>
                        <a href="{{ route('posts.index') }}"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
    
                <div class="col-6">
                    <img src="./img/collage-posts.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
