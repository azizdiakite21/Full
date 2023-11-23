@include('layouts.app')

<style>
    body {
        background-color: rgba(40, 117, 245, 0.45);
    }
</style>

<div class="container-fluid">
    <div class="container col-xxl-5">
        <div class="card">
            <form action="{{route('confirmationColis')}}" method="post">
                @csrf
                <div class="card-header text-center h1">
                    <h1>Taxage du colis</h1>
                </div>
                <div class="card-body h5 mt-4">
                    <table class="table table-striped table-hover text-center rounded-3">
                        <thead>
                            <tr>
                                <th>Poids du colis</th><th>Prix d'envoi</th><th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>< 5kg</td><td>500 FCFA</td><td><input type="radio" name="taxage" value="500" id="" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <td>5kg < poids < 10kg</td><td>1500 FCFA</td><td><input type="radio" name="taxage" value="1500" id="" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <td>10kg < poids < 20kg</td><td>2500 FCFA</td><td><input type="radio" name="taxage" value="2500" id="" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <td>20kg < poids < 50kg</td><td>4000 FCFA</td><td><input type="radio" name="taxage" value="4000" id="" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <td>50kg < poids</td><td>7000 FCFA</td><td><input type="radio" name="taxage" value="7000" id="" autocomplete="off"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <input type="submit" class="btn btn-primary col-sm-8" value="Enregistrer">
                </div>
                <input type="hidden" name="id_caissier" value="{{Auth::user()->id}}">
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
                <input type="hidden" name="id_voyage" value="{{$id_voyage}}">
            </form>
        </div>
    </div>
</div>


