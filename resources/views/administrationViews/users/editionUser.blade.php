@include('layouts.app')



<style>
    body {
        background-color: rgba(40, 117, 245, 0.45);
    }
</style>




<div class=" container card mt-2 table-responsive">
    <div class="card-header bg-white text-center">
        <h1 class="text-center h1 text-black-50">Modifier l'utilisateur</h1>
    </div>
    <div class="bg-info bg-opacity-25 h4 mb-3 mt-3 fw-bolder ps-3 pt-3 pb-1">
        <p>Données utilisateur</p>
    </div>
    <div class="container">
        <form class="justify-content-center" method="POST" action="{{route('mise_a_jour_utilisateur', $user->id)}}">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" value="{{$user->nom}}" placeholder="Nom du nouvel utilisateur" style="background-color:azure">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="prenom" value="{{$user->prenom}}" placeholder="Prénom du nouvel utilisateur" style="background-color:azure">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name">Nom d'utilisateur</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Nom d'utilisateur" style="background-color:azure">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="E-mail de l'utilisateur" style="background-color:azure">
                </div>
            </div>
            <hr/>
            <div class="row justify-content-around">
                <button class="btn btn-primary col-3 mb-3" type="submit">Valider</button>
            </div>
        </form>
        <hr/>
        <div class="row justify-content-center">
            <form action="{{(route('changerMotDePasse', $user->id))}}" method="get">
                <button class="btn btn-warning col-12 mb-3" type="submit">Changer le mot de passe</button>
            </form>
        </div>
        <hr/>
        <div class="row justify-content-center">
            <a class="btn btn-danger col-4 mb-3" href="{{route('home')}}">Annuler</a>
        </div>
    </div>
</div>
