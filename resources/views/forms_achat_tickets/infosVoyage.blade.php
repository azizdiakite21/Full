@guest
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <script src="{{ asset('js/app.js') }}" defer></script>
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


        <div class="container mt-5">
            <div class="row justify-content-center p-0">
                <div class="justify-content-center rounded-3">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary col-sm-12" role="progressbar"
                            style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1/4
                        </div>
                    </div>
                    <div class="card mt-5 mb-5">
                        <form method="get" action="{{route('ticketform2', [$vehicule->id_vehicule, $voyage->id_voyage, $ligne->id_ligne])}}">
                            @csrf
                            <div class="card-header bg-white text-center">
                                <h2 class="h3 text-black-50">Votre voyage</h2>
                            </div>
                            <div class="card-body">
                                <div class="bg-info  bg-opacity-25 ps-3 pb-1 pt-3 h3">
                                    <p>{{$ligne->depart}}   -   {{$ligne->arrivee}} </p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col"></th>
                                                <th scope="col">Départ</th>
                                                <th scope="col">Arrivée</th>
                                                <th scope="col">Climatisation</th>
                                                <th scope="col">Prix</th>
                                                <th scope="col">Bus</th>
                                            </tr>
                                        </thead>
                                            <tr class="text-center fw-bold h5">
                                                <td scope="row"><p>
                                                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#content" role="button" aria-expanded="false" aria-controls="content">
                                                        Arrêts
                                                    </a>
                                                </p>
                                                <td>
                                                    <p class="mt-2">{{$ligne->depart}}</p>
                                                </td>
                                                <td>
                                                    <p class="mt-2">{{$ligne->arrivee}}</p>
                                                </td>
                                                <td class="text-center">
                                                    @if($vehicule->climatisation === true)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="white" class="bi bi-snow bg-primary rounded-3 mt-2 p-1" viewBox="0 0 16 16">
                                                      <path d="M8 16a.5.5 0 0 1-.5-.5v-1.293l-.646.647a.5.5 0 0 1-.707-.708L7.5 12.793V8.866l-3.4 1.963-.496 1.85a.5.5 0 1 1-.966-.26l.237-.882-1.12.646a.5.5 0 0 1-.5-.866l1.12-.646-.884-.237a.5.5 0 1 1 .26-.966l1.848.495L7 8 3.6 6.037l-1.85.495a.5.5 0 0 1-.258-.966l.883-.237-1.12-.646a.5.5 0 1 1 .5-.866l1.12.646-.237-.883a.5.5 0 1 1 .966-.258l.495 1.849L7.5 7.134V3.207L6.147 1.854a.5.5 0 1 1 .707-.708l.646.647V.5a.5.5 0 1 1 1 0v1.293l.647-.647a.5.5 0 1 1 .707.708L8.5 3.207v3.927l3.4-1.963.496-1.85a.5.5 0 1 1 .966.26l-.236.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.883.237a.5.5 0 1 1-.26.966l-1.848-.495L9 8l3.4 1.963 1.849-.495a.5.5 0 0 1 .259.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.236.883a.5.5 0 1 1-.966.258l-.495-1.849-3.4-1.963v3.927l1.353 1.353a.5.5 0 0 1-.707.708l-.647-.647V15.5a.5.5 0 0 1-.5.5z"/>
                                                    </svg>
                                                    @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-x-circle-fill mt-2" viewBox="0 0 16 16">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                                    </svg>
                                                    @endif
                                                </td>
                                                <td><p class="mt-2">{{$ligne->prix}}</p></td>
                                                <td class="text-start"><span class="h5 ms-5">Plaque :  </span> {{$vehicule->plaque}}<br/><span class="h5 ms-5">Marque :  </span>{{$vehicule->marque}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="6<">
                                                    <div class="collapse row" id="content">
                                                        <div class="col-4 text-center align-self-start text-primary">
                                                            <p class="h3">
                                                                Villes desservies lors du voyage :
                                                            </p>
                                                        </div>
                                                        <div class="col-8 align-self-end justify-content-end">
                                                            <!--carte google maps-->
                                                            <iframe src="{{$ligne->arrets}}" width="100%" height="460px" style="border:0;" class="carte-maps" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-borderless p-2">
                                        <tr>
                                            <td class="h4 ps-3">Nombre de voyageurs : </td>
                                            @if(($vehicule->nbplaces - $voyage->ticketsvendus) <= 5)
                                                @for($i=1; $i <= ($vehicule->nbplaces - $voyage->ticketsvendus); $i++)
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" value="{{$i}}" checked="false" type="radio" name="nombrePassagers" id="nombre passagers"{{$i}} onclick="calculPrixTotal()">
                                                            <label class="form-check-label" for="nombre passagers"{{$i}}>
                                                                {{$i}}
                                                            </label>
                                                        </div>
                                                    </td>
                                                @endfor
                                            @else
                                                @for($i=1; $i <= 5; $i++)
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" value="{{$i}}" checked="true" type="radio" name="nombrePassagers" id="nombre passagers"{{$i}} onclick="calculPrixTotal()">
                                                            <label class="form-check-label" for="nombre passagers"{{$i}}>
                                                                {{$i}}
                                                            </label>
                                                        </div>
                                                    </td>
                                                @endfor
                                            @endif
                                        </tr>
                                    </table>
                                </div>
                                <div class="">
                                    <div class="bg-info bg-opacity-25 pt-3 ps-3 pb-3 mt-2 mb-2">
                                        <h3 class="">Prix total</h3>
                                    </div>
                                    <div class="text-center text-success mb-2 mt-4">
                                        <p class="display-4" id="prixTotal">{{$ligne->prix}}  FCFA</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row justify-content-end p-2">
                                    <input type="submit" value="Suivant" class="btn btn-primary col-sm-1"/>
                                </div>
                            </div>
                            <div class="card-footer row justify-content-center">
                                <a name="" id="" class="col-sm-3 mt-4 btn btn-danger" href="{{route('lignes')}}" role="button">Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        function calculPrixTotal() {
            let nombreTickets = document.querySelector('input[name="nombrePassagers"]:checked').value;
            let prixTotal = {{$ligne->prix}} * nombreTickets;
            let prix = document.getElementById('prixTotal');
            prix.innerText = prixTotal + "  FCFA";
        }

    </script>
</html>
