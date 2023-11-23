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

        <div class="container mt-2 mb-5">
            <div class="row justify-content-center p-0">
                <div class="justify-content-center rounded-3">
                    <div class="progress mt-5 mb-5">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary col-sm-12" role="progressbar"
                            style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">2/4
                        </div>
                    </div>
                    <div class="card mt-2 table-responsive">
                        @guest
                            <form action="{{route('ticketform3', [$vehicule->id_vehicule, $voyage->id_voyage, $ligne->id_ligne, $nombrePassagers])}}" method="get">
                        @endguest
                        @auth
                            <form method="post" action="{{route('enregistrementTicket', [$voyage->id_voyage, $ligne->id_ligne, $nombrePassagers])}}">
                        @endauth
                            @csrf
                            <div class="card-header bg-white text-center">
                                <h2 class="h3 text-black-50">Information voyageur(s)</h2>
                            </div>
                            <div class="bg-info bg-opacity-25 h4 mb-3 mt-3 fw-bolder ps-3 pt-3 pb-1" >
                                <p>Données voyageurs</p>
                            </div>
                            <div class="table-responsive card-body">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">Titre</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Prénom</th>
                                            <th scope="col">Telephone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Prix</th>
                                        </tr>
                                    </thead>
                                    @for($i=1; $i<= $nombrePassagers; $i++ )
                                        <tr>
                                            <td scope="row">
                                                <div class="p-2">
                                                  <select class="form-control form-control-sm" name="titre" id="">
                                                    <option>M.</option>
                                                    <option>Mme.</option>
                                                    <option>Mle.</option>
                                                  </select>
                                                </div>

                                            </td>
                                            <td scope="row" class="">
                                                <div class="p-2 input-group">
                                                    <div class="input-group-text">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                        </svg>
                                                    </div>
                                                  <input type="text" class="form-control" name="nom{{$i}}" id="" placeholder="Nom" >
                                                </div>
                                            </td>
                                            <td>
                                                <div class="p-2 input-group">
                                                    <div class="input-group-text">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                       </svg>
                                                    </div>
                                                    <input type="text" class="form-control" name="prenom{{$i}}" id="" placeholder="Prenom">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="p-2 input-group">
                                                    <div class="input-group-text">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                          <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                                        </svg>
                                                    </div>
                                                    <input type="text" class="form-control" name="telephone{{$i}}" id="" placeholder="Numéro de téléphone">
                                                  </div>
                                            </td>
                                            <td>
                                                <div class="p-2 input-group">
                                                    <div class="input-group-text">@</div>
                                                    <input type="text" class="form-control" name="email{{$i}}" id="" placeholder="Email">
                                                  </div>
                                            </td>
                                            <td class="">
                                                <span class="mt-3">{{$ligne->prix}}</span>
                                            </td>
                                        </tr>
                                    @endfor
                                </table>
                            </div>
                            <div class=" flex-row-reverse pe-3">
                                <button type="submit" class="btn float-end btn-primary mb-3">Suivant</button>
                            </div>
                            <div class="card-footer row justify-content-center bg-transparent ">
                                <a name="" id="" class="col-md-2 btn btn-danger" href="{{route('lignes')}}" role="button">Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}" defer></script>
</html>
