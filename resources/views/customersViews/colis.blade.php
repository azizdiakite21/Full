@extends('layouts.customerViews')

@section('content')

<style>
    body {
        background-color: rgba(205, 211, 221, 0.671);
    }

</style>


<div class="container-fluid text-center text-white mt-4 mb-4">
    <h1 class="display-6 text-black text-uppercase fw-bold">Grille tarifaire pour l'envoi des colis</h1>
</div>
<div class="h5 p-2">
    <span class="p-4 mb-2 fw-bolder text-black"> À Full Transport nous avons choisi de publier nos critères de taxe des colis envoyés, pour vous permettre d'envoyer vos colis en toute transparence.
    Ceux-ci sont facturés au kilo, nous vous exhortons vivement à consulter cette grille avant l'envoi de vos colis.
    Pensez à peser vos colis avant de les présenter à la station pour l'envoi.</span> <br>
    <div class="mt-3">
        <span class="text-danger fw-bolder h4 p-4 mb-2">Attention !</span><br>
        <ul class="mt-3">
            <li class="ms-5">
                <span class="fw-bolder p-3 mb-2" style="color: rgb(199,147,1)">L'usage de notre compagnie pour l'envoi de colis aux contenus illicites est fortement interdit,
                    et peut entraîner des poursuites judiciares. Il vous est alors obligatoire de déclarer le contenu de votre colis avant l'envoi. </span>
            </li>
            <li class="ms-5">
                <span class="p-3 mb-2 fw-bolder" style="color: rgb(199,147,1)">Veuillez nous signaler toute tentative de fraude de la part de nos employés. Nous vous en remercions d'avance.</span>
            </li>
        </ul>
    </div>
</div>
<div class="container rounded-3">
    <div class="row justify-content-center rounded-3">
        <table class="table table-light text-center rounded-3">
            <thead>
                <tr>
                    <th>Poids du colis</th><th>Prix d'envoi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>< 5kg</td><td>500 FCFA</td>
                </tr>
                <tr>
                    <td>5kg < poids < 10kg</td><td>1500 FCFA</td>
                </tr>
                <tr>
                    <td>10kg < poids < 20kg</td><td>2500 FCFA</td>
                </tr>
                <tr>
                    <td>20kg < poids < 50kg</td><td>4000 FCFA</td>
                </tr>
                <tr>
                    <td>50kg < poids</td><td>7000 FCFA</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>





@endsection
