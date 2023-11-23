@extends('layouts.customerViews')


@section('content')


<style>
    body {
        background-color: rgba(205, 211, 221, 0.671);
    }

</style>



<div class="container-fluid mt-5">
    <div class="container">
        <div class="card text-center">
            <form action={{route('statut')}} method="GET">
                <div class="card-body">
                    <h1 class="card-title mb-5">Statut de votre colis</h1>
                    <p class="h5">Pour connaître l'état de votre colis entrez le code de celui-ci qui inscrit sur votre ticket.</p>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-lg-5 col-xxl-4">
                            <div class="p-2 input-group input-group-lg">
                                <div class="input-group-text">
                                    Entrez le code de votre colis
                                </div>
                                <input type="text" class="form-control" name="code_colis" id="" placeholder="xxxxxxxx">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer row justify-content-center">
                    <input type="submit" name="rechercher" value="Chercher" class="form-control btn btn-primary col-sm-5">
                </div>
            </form>
        </div>
    </div>
</div>





@endsection
