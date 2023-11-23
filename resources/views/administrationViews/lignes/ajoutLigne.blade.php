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
                <h1 class="text-center h1 text-black-50">Ajout d'une nouvelle ligne</h1>
            </div>
            <div class="card-body">
                <div class="bg-info bg-opacity-25 h4 mb-3 mt-3 fw-bolder ps-3 pt-3 pb-1">
                    <p>Données ligne</p>
                </div>
                <div class="container">
                    <form class="justify-content-center" method="post" action="{{route('enregistrementLigne')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="depart">Départ</label>
                                <input type="text" class="form-control" name="depart" placeholder="Ville de départ" style="background-color:azure">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="arrivee">Arrivée</label>
                                <input type="text" class="form-control" name="arrivee" placeholder="Ville d'arrivée" style="background-color:azure">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="prix">Prix</label>
                                <input min="0" step="500" type="number" class="form-control" name="prix" placeholder="0" style="background-color:azure">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="arrets">Arrets</label>
                                <input type="text" class="form-control" name="arrets" placeholder="Lien trajet Google Maps" style="background-color:azure">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="reciproque" id="reciproque">
                                <label class="form-check-label btn-warning" for="reciproque">Ne pas créer la ligne réciproque</label>
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
