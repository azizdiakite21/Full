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

    <div class="container-fluid" style="min-height: 95vh; width: 100%;">
        
        <div class="container bg-white mt-5 rounded-3">
            <div class="bg-white text-black-50 text-center m-0 p-4" style="width: 100%">
                <h3>Télécharger vos tickets</h3>
            </div>
            <div class="mt-2 table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Numéro Ticket</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Téléphone</th>
                            <th>Voyage</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                        <form method="POST">
                            @csrf
                        <tr>
                            <td scope="row">{{$ticket->id_tickets}}</td>
                            <td>{{$ticket->nom}}</td>
                            <td>{{$ticket->prenom}}</td>
                            <td>{{$ticket->telephone}}</td>
                            <td>{{$ticket->depart}} - {{$ticket->arrivee}}</td>
                            <td><a class="btn btn-primary" href="{{route('download-ticket', $ticket->id_tickets)}}">Télecharger</a></td>
                        </tr>  
                        </form> 
                        @endforeach
                    </tbody>
                </table>
                <div class="justify-content-center row">
                    <a class="btn btn-primary col-sm-1 mb-3" href="{{route('fin_achats')}}">Suivant</a>
                </div>
            </div>
        </div>
    </div>
</body>

