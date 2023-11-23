@include('layouts.app')



<style>
    body {
        background-color: rgba(40, 117, 245, 0.45);
    }
</style>


        <h1 class="text-center">Ajout d'un nouveau véhicule</h1>
        <div class=" container card mt-2 table-responsive">
            <div class="card-header bg-white text-center">
                <h2 class="h2 text-black-50">Informations du Vehicule</h2>
            </div>
            <div class="bg-info bg-opacity-25 h4 mb-3 mt-3 fw-bolder ps-3 pt-3 pb-1">
                <p>Données du Bus</p>
            </div>
            <form class="form-inline" method="post" action="{{route('enregistrementVehicule')}}">
                @csrf
                <div class="container rounded row">
                    <div class="col-3">
                        <label class="h4 mb-2 mt-3">Nombres de place</label>
                        <input type="number" class="form-control" style="background-color:azure" name="nbplaces">
                    </div><div class="col-1"></div>
                    <div class="col-3">
                        <label class="h4 mb-2 mt-3">Plaque</label>
                        <input type="text" class="form-control" style="background-color:azure" name="plaque">
                    </div><div class="col-1"></div>
                    <div class="col-3">
                        <label class="h4 mb-2 mt-3">Marque</label>
                        <input type="text" class="form-control" style="background-color:azure" name="marque">
                    </div>

                    <br>
                </div>
                <div class="container rounded row">
                    <div class="row">        
                        <div class="col-3 m-3">
                            <label class="h4 mb-2 mt-3">Climatisation</label><br>
                            <select  class="form-select" name="climatisation">
                                                <option value="true">Oui</option>
                                                <option value="false">Non</option>
                                            </select>
                        </div>
                        <div class="col-3 m-3">
                            <label class="h4 mb-2 mt-3">Etat du véhicule</label><br>
                            <select  class="form-select" name="statut">
                                                <option value="maintenance">maintenance</option>
                                                <option value="opérationnel">opérationnel</option>
                                            </select>
                        </div>
                        </div>

                        
                        
                            
                </div>

                <div class="container rounded row">
                    <div class="col-3 mb-3">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

































