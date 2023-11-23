@extends('layouts.customerViews')

@section('content')
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="{{asset('images/colombe.jpeg')}}" class="d-block w-100" alt="...">
                  <div class="bg-white rounded-3 carousel-caption d-none d-md-block">
                    <h4>Réservez vos billets en ligne avec Full Transport</h4>
                    <p>Avec Full Transport c'est toutes les villes du Togo en un clic</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="{{asset('images/sokode.png')}}" class="d-block w-100" alt="...">
                  <div class="carousel-caption bg-white rounded-3 d-none d-md-block">
                    <h4>Full transport plus proche de vous</h4>
                    <p>La première compagnie de bus togolaise à proposer un service en ligne à ses clients</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="{{asset('images/kara.png')}}" class="d-block w-100" alt="...">
                  <div class="bg-white rounded-3 carousel-caption d-none d-md-block">
                    <h4>Envoyez vos colis en toute sureté</h4>
                    <p>N'hésitez pas à jeter un coup d'œil à notre grille tarifaire,
                     pour envoyer vos colis aux meilleurs prix.  </p>
                  </div>
              </div>
            </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
        </div>

        <div class="container-fluid row text-center justify-content-center text-white m-0 me-0 col-sm-10 pt-8 pb-8 bg-primary" style="height: 300px; width: 100%;">
            <div class="container">
                <h1 class="display-5">Bienvenue sur le site officiel de Full Transport</h1>
                <p class="mt-8 ms-8 me-8 mb-8 ps-8 h5">Full Transport est une compagnie de transport routier, située à Sokode au centre du Togo.
                Notre but est de permettre le transport des passagers sur toute l'étendue du territoire.
                Ce site est un moyen de nous rapprocher de vous et vous de nous.
                </p>
            </div>
        </div>

        <div class="container-fluid text-center text-primary m-0 me-0 col-sm-10 pt-8 pb-8 bg-white" style="height: 300px; width: 100%;">
            <div class="container">
                <h1 class="display-5">Voyagez vers n'importe quelle ville en un clic</h1>
                <p class="mt-8 ms-8 me-8 mb-8 ps-8 h5">Grâce à Full Transport voyager vers n'importe ville du pays.
                Avec notre site internet choisissez votre lieu de départ et votre destination et payez en toute simplicitée.
                Retrouvez des inspirations ici pour bien préparer votre voyage et toute l'information pratique sur vos destinations préférées.
                </p>
            </div>
        </div>
    </body>
@endsection
