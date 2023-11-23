@extends('layouts.app')

@section('content')

    <style>
        body {
            background-color: rgba(40, 117, 245, 0.45);
        }
    </style>

    <body>

    <div class=" container card mt-2 table-responsive">
        <div class="card-header bg-white text-center">
            <h1 class="text-center h1 text-black-50">Mise à jour du voyage N°{{$voyage->id_voyage}}</h1>
        </div>
        <div class="card-body">
            <div class="bg-info bg-opacity-25 h4 mb-3 mt-3 fw-bolder ps-3 pt-3 pb-1">
                <p>Caractéristiques voyage</p>
            </div>
            <div class="container">
                <form class="justify-content-center" method="post" action="{{route('mise_a_jour_voyage', $voyage->id_voyage)}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="depart">Ligne</label>
                            <select class="form-control"  name="id_ligne">
                                <option name="{{$voyage->ligne->id_ligne}}" value="{{$voyage->ligne->id_ligne}}">{{$voyage->ligne->depart}} - {{$voyage->ligne->arrivee}}</option>
                                @foreach($lignes as $ligne)
                                    <option name="{{$ligne->id_ligne}}" value="{{$ligne->id_ligne}}">{{$ligne->depart}} - {{$ligne->arrivee}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="datevoyage">Date de voyage</label>
                            <input type="date" class="form-control" value="{{$voyage->datevoyage}}" name="datevoyage" min="{{date('Y-m-d')}}"  required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="heure_depart">Heure de départ</label>
                            <input type="time" class="form-control" value="{{$voyage->heure_depart}}" name="heure_depart" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="id_vehicule">Véhicule</label>
                            <select class="form-control" name="id_vehicule">
                                @foreach($vehicules as $vehicule)
                                    <option name="{{$vehicule->id_vehicule}}" value="{{$vehicule->id_vehicule}}">{{$vehicule->marque}} - {{$vehicule->plaque}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <hr/>
                    <div class="row justify-content-center p-3">
                        <a class="btn btn-danger col-3 p-2 m-2" href="{{route('home')}}">Annuler</a>
                        <input class="btn btn-success col-3 p-2 m-2" value="Valider" type="submit"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
