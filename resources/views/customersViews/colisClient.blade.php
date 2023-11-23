@extends('layouts.customerViews')


@section('content')

<style>
    body {
        background-color: rgba(205, 211, 221, 0.671);
    }

</style>


<div class="container-fluid">
    <div class="container col-11 bg-white mt-5 rounded-3">
        <div class="justify-content-center row m-5 text-center">
            <h1 class="mt-5">État du colis</h1>
            <div class="container table-responsive data_table m-5">
                <table id="example" class="table table-striped table-bordered table-hover mt-5">
                    <thead class="text-center h5 mt-5">
                        <tr class="text-center p-2">
                            <th class="p-4">Numéro du colis</th><th class="p-4">Expéditeur</th><th class="p-4">Telephone expéditeur</th><th class="p-4">Date enregistrement</th><th class="p-4">Lieu d'expédition</th><th class="p-4">Lieu destinataire</th><th class="p-4">Taxe</th><th class="p-4">Destinataire</th><th class="p-4">Telephone destinataire</th><th class="p-4">Contenu</th><th class="p-4">État du colis</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!--Boucle foreach lignes et si nombre de places < 10 surligner en rouge  -->
                        @if ($colis->statut_colis === "remis")
                        <tr class="h5 table-success">
                            <td>{{$colis->id_colis}}</td>
                            <td>{{$colis->client->nom}} {{$colis->client->prenom}}</td>
                            <td>{{$colis->client->telephone}}</td>
                            <td>{{$colis->created_at}}</td>
                            <td>{{$colis->voyage->ligne->depart}}</td>
                            <td>{{$colis->voyage->ligne->arrivee}}</td>
                            <td>{{$colis->taxage}} FCFA</td>
                            <td>{{$colis->nomdestinataire}} {{$colis->prenomdestinataire}}</td>
                            <td>{{$colis->telephonedestinataire}}</td>
                            <td>{{$colis->contenu}}</td>
                            <td>{{$colis->statut_colis}}</td>
                        </tr>
                        @else
                        <tr class="h5">
                            <td>{{$colis->id_colis}}</td>
                            <td>{{$colis->client->nom}} {{$colis->client->prenom}}</td>
                            <td>{{$colis->client->telephone}}</td>
                            <td>{{$colis->created_at}}</td>
                            <td>{{$colis->voyage->ligne->depart}}</td>
                            <td>{{$colis->voyage->ligne->arrivee}}</td>
                            <td>{{$colis->taxage}} FCFA</td>
                            <td>{{$colis->nomdestinataire}} {{$colis->prenomdestinataire}}</td>
                            <td>{{$colis->telephonedestinataire}}</td>
                            <td>{{$colis->contenu}}</td>
                            <td>{{$colis->statut_colis}}</td>
                        </tr>
                        @endif
                    <!--Fin boucle for each-->

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection