@guest
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css')}}"/>
        <script type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script>
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

        <div class="container bg-white mt-5 rounded-3">
            <div class="justify-content-center row text-center">
                @guest
                    <h1 class="mt-5" >Nos destinations travers le pays</h1>
                @endguest

                @auth
                    <h1 class="mt-5" >Choisissez un voyage</h1>
                @endauth
                <div class="data_table table-responsive mt-5 mb-5">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th class="p-4">Départ</th><th class="p-4">Destination</th><th class="p-4">Date</th><th class="p-4">Heure de départ</th><th class="p-4">Nombre de places restantes</th><th class="p-4">Acheter</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!--Boucle foreach lignes et si nombre de places < 10 surligner en rouge  -->
                        @foreach($voyages as $voyage)
                            @if(($voyage->nbplaces - $voyage->ticketsvendus) < 10 and ($voyage->nbplaces - $voyage->ticketsvendus) > 0 )
                            <tr class="table-warning">
                                <td>{{$voyage->depart}}</td>
                                <td>{{$voyage->arrivee}}</td>
                                <td>{{$voyage->datevoyage}}</td>
                                <td>{{$voyage->heure_depart}} heures</td>
                                <td>{{$voyage->nbplaces - $voyage->ticketsvendus}} places</td>
                                <td>
                                    <form method="get" action="{{route('ticketform1', [$voyage->id_vehicule, $voyage->id_voyage, $voyage->id_ligne])}}">
                                    @csrf
                                        @guest
                                            <input class="btn btn-primary" value="Acheter" type="submit"> 
                                        @endguest
                                        @auth
                                            <input class="btn btn-primary" value="Vendre" type="submit">
                                        @endauth
                                    </form>
                                </td>
                            </tr>
                            @elseif(($voyage->nbplaces - $voyage->ticketsvendus) === 0)
                            <tr class="table-danger">
                                <td>{{$voyage->depart}}</td>
                                <td>{{$voyage->arrivee}}</td>
                                <td>{{$voyage->datevoyage}}</td>
                                <td>{{$voyage->heure_depart}} heures</td>
                                <td>Plein</td>
                                <td></td>
                            </tr>
                            @else
                            <tr>
                                <td>{{$voyage->depart}}</td>
                                <td>{{$voyage->arrivee}}</td>
                                <td>{{$voyage->datevoyage}}</td>
                                <td>{{$voyage->heure_depart}} heures</td>
                                <td>{{$voyage->nbplaces - $voyage->ticketsvendus}} places</td>
                                <td>
                                    <form method="get" action="{{route('ticketform1', [$voyage->id_vehicule, $voyage->id_voyage, $voyage->id_ligne])}}">
                                    @csrf
                                        @guest
                                            <input class="btn btn-primary" value="Acheter" type="submit"> 
                                        @endguest
                                        @auth
                                            <input class="btn btn-primary" value="Vendre" type="submit">
                                        @endauth
                                    </form>
                                </td>
                            </tr>
                            @endif
                        <!--Fin boucle for each-->
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <script>
       $(document).ready(function(){
        var table = $('#example').DataTable({
            responsive : true,
            
            buttons:['colvis', 'reload']
        });

        table.buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');
        })
    </script>
</html>


