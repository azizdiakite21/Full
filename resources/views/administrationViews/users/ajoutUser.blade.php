@include('layouts.app')



<style>
    body {
        background-color: rgba(40, 117, 245, 0.45);
    }
</style>


<div class=" container card mt-2 table-responsive">
    <div class="card-header bg-white text-center">
        <h1 class="text-center h1 text-black-50">Ajout d'un nouvel utilisateur</h1>
    </div>
    <div class="bg-info bg-opacity-25 h4 mb-3 mt-3 fw-bolder ps-3 pt-3 pb-1">
        <p>Données utilisateur</p>
    </div>
    <div class="align-content-center" style="font-size: large; margin-left: 100px">
        <form class="justify-content-center" method="POST" action="{{route('enregistrementUser')}}">
            @csrf
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" placeholder="Nom du nouvel utilisateur" style="background-color:azure">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="prenom" placeholder="Prénom du nouvel utilisateur" style="background-color:azure">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="username">Nom d'utilisateur</label>
                    <input min="0" step="500" type="text" class="form-control" name="name" placeholder="Nom d'utilisateur" style="background-color:azure">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" placeholder="E-mail de l'utilisateur" style="background-color:azure">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" name="password" placeholder="Mot de passe utilisateur" style="background-color:azure">
                </div>
            </div>
            <br>
            <a class="btn btn-danger col-1" href="{{route('accueil')}}">Annuler</a>
            <button class="btn btn-primary" type="submit">Valider</button>
        </form>
    </div>
</div>
