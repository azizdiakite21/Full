@include('layouts.app')



<style>
    body {
        background-color: rgba(40, 117, 245, 0.45);
    }
</style>


        <h1 class="text-center">Modification du Vehicule</h1>
        <div class=" container card mt-2 table-responsive">
            <div class="card-header bg-white text-center">
                <h2 class="h2 text-black-50">Informations du Bus</h2>
            </div>
            <div class="bg-info bg-opacity-25 h4 mb-3 mt-3 fw-bolder ps-3 pt-3 pb-1">
                <p>Données du Vehicule</p>
            </div>
            <form class="form-inline" method="post" action="{{route('majVehicule',$vehicule->id_vehicule)}}">
                @csrf
                <div class="container rounded row">
                    <div class="col-3">
                        <label class="h4 mb-2 mt-3">Nombres de place</label>
                        <input type="number" class="form-control" value={{$vehicule->nbplaces}}  name="nbplaces">
                    </div>
                    <div class="col-3">
                        <label class="h4 mb-2 mt-3">Marque</label>
                        <input type="text" class="form-control" value={{$vehicule->marque}}  name="marque">
                    </div>
                    <div class="col-3 mb-3">
                            <label class="h4 mb-2 mt-3">Climatisation</label><br>
                            <select  class="form-select" value={{$vehicule->climatisation}} name="climatisation">
                                                <option value="true">Oui</option>
                                                <option value="false">Non</option>
                                            </select>
                    </div>
                    <div class="col-3">
                            <label class="h4 mb-2 mt-3">Etat du véhicule</label><br>
                            <select  class="form-select" value={{$vehicule->statut}} name="statut">
                                <option value="maintenance">maintenance</option>
                                <option value="opérationnel">opérationnel</option>
                            </select>
                    </div>

                    <hr/>
                </div>
                <div class="container col-12 justify-content-center row">
                    <div class="col-5 mb-3 row justify-content-center">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

































