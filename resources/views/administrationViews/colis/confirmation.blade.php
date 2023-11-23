@include('layouts.app')

<style>
    body {
        background-color: rgba(40, 117, 245, 0.45);
    }
</style>

<div class="container col-xxl-10 col-lg-10 col-md-12 col-xl-10 mt-5">
    <div class="row justify-content-center p-0">
        <div class="justify-content-center rounded-3">
            <div class="p-5 bg-primary rounded-3 mt-5 text-center">
                <h1 class="display-3">Colis enregistré avec succès!</h1>
                <p class="lead"></p>
                <hr class="my-2">
                <p class="lead">
                    <a class="btn btn-success btn-lg mt-2" href="{{route('home')}}" role="button">Retour au menu</a>
                </p>
            </div>
        </div>
    </div>
</div>