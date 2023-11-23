@include('layouts.app')

<style>
    body {
        background-color: rgba(40, 117, 245, 0.45);
    }
</style>


<div class="container-fluid">
    <div class="container rounded-3 col-xxl-8">
        <div class="card">
            <form action="{{route('paiementColis')}}" method="get">
                @csrf
                <div class="card-header text-center p-3">
                    <p class="h1 text-black-75">Affectation du colis</p> 
                </div>
                <div class="card-body h5">
                    <div class="table-responsive text-center mt-4">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Bus</th>
                                <th>Date voyage</th>
                                <th>Heure de départ</th>
                                <th>Départ</th>
                                <th>Destination</th>
                                <th>Choix du bus</th>
                            </thead>
                            <tbody>
                            @if (count($voyages_dispos) === 0)
                                <tr>
                                    <td colspan="5">
                                        <p class="h1 fw-bold">Pas de bus disponibles pour cette destination</p>
                                    </td>
                                </tr>
                            @else
                                @foreach ($voyages_dispos as $voyage)
                                    <tr>
                                        <td>{{$voyage->plaque}}</td>
                                        <td>{{$voyage->datevoyage}}</td>
                                        <td>{{$voyage->heure_depart}}</td>
                                        <td>{{$voyage->depart}}</td>
                                        <td>{{$voyage->arrivee}}</td>
                                        <td>
                                            <input type="radio" name="id_voyage" value="{{$voyage->id_voyage}}" id="" autocomplete="off"> 
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <input type="hidden" name="nom" value="{{$request->nom}}">
                <input type="hidden" name="prenom" value="{{$request->prenom}}">
                <input type="hidden" name="telephone" value="{{$request->telephone}}">
                <input type="hidden" name="contenu" value="{{$request->contenu}}">
                <input type="hidden" name="poids" value="{{$request->poids}}">
                <input type="hidden" name="destination" value="{{$request->destination}}">
                <input type="hidden" name="nomdestinataire" value="{{$request->nomdestinataire}}">
                <input type="hidden" name="telephonedestinataire" value="{{$request->telephonedestinataire}}">
                <input type="hidden" name="email" value="{{$request->email}}">
                <input type="hidden" name="prenomdestinataire" value="{{$request->prenomdestinataire}}">
                <div class="card-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary col-md-5">Suivant</button>
                </div>
            </form>
        </div>
    </div>
</div>
