@guest
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Full Transport</title>
    </head>

    <style>
        body {
            background-color: rgba(40, 117, 245, 0.45);
        }
    </style>

    <body>

       
        <nav class="navbar sticky-top shadow-sm navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand me-5" href="{{route('accueil')}}"><p class="h3 mt-2 ms-2">Full Transport</p></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active ps-4 pe-4" aria-current="page" href="{{route('accueil')}}">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active ps-4 pe-4" href="{{route('lignes')}}">Achetez votre ticket</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active ps-4 pe-4" href="{{route('colis')}}">Envoi de colis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active ps-4 pe-4" href="{{route('contact')}}">Nous contacter</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
@endguest

@auth


@include('layouts.app')


<style>
    body {
        background-color: rgba(40, 117, 245, 0.45);
    }
</style>

@endauth


    <div class="container col-xxl-10 col-lg-10 col-md-12 col-xl-10 mt-5">
        <div class="row justify-content-center p-0">
            <div class="justify-content-center rounded-3">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary col-sm-12" role="progressbar"
                        style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4/4
                    </div>
                </div>
                <div class="p-5 bg-primary rounded-3 mt-5">
                    @guest
                    <h1 class="display-3">Ticket(s) acheté(s) avec succès !</h1>
                    <p class="lead">Merci de nous avoir fait confiance, bon voyage !</p>
                    <hr class="my-2">
                    <p class="lead">
                        <a class="btn btn-success btn-lg mt-2" href="{{route('accueil')}}" role="button">Retour à l'accueil</a>
                    </p>
                    @endguest
                    @auth
                    <h1 class="display-3">Ticket(s) vendu(s) avec succès !</h1>
                    <hr class="my-2">
                    <p class="lead">
                        <a class="btn btn-success btn-lg mt-2" href="{{route('home')}}" role="button">Retour au menu</a>
                    </p>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
