<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Transport</title>
</head>

    <style>
        body {
            background-color: rgba(40, 117, 245, 0.45);
        }
    </style>
    

<body>
    <nav class="navbar sticky-top shadow-sm navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="{{route('accueil')}}"><p class="h3 mt-2 ms-2">Full Transport</p></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active ps-4 pe-4" aria-current="page" href="{{route('accueil')}}">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active ps-4 pe-4" href="{{route('lignes')}}">Achetez votre ticket</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active ps-4 pe-4" href="{{route('colis')}}">Envoi de colis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active ps-4 pe-4" href="{{route('contact')}}">Nous contacter</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container col-xxl-5 col-lg-8 col-md-10 col-xl-6 mt-4 mb-5">
        <div class="row justify-content-center p-0">
            <div class="justify-content-center rounded-3">
                <div class="progress mt-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary col-sm-12" role="progressbar"
                        style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">3/4
                    </div>
                </div>
                <div class="card mt-5">
                    <form method="post" action="{{route('enregistrementTicket', [$voyage->id_voyage, $ligne->id_ligne, $nbrePassagers])}}">
                        @csrf
                        <div class="card-header h3 text-black-50 bg-opacity-25 bg-info fw-bolder text-center">
                            Paiement
                        </div>
                        <div class="card-body row justify-content-center mt-2 ">
                            <h5 class="card-title text-center mb-4 h4 mt-2">Choisisser votre méthode de paiement : </h5>
                            <div class="col-sm-5 col-xxl-5 m-4 bg-warning rounded-3">
                                <div class="card bg-warning border-warning">
                                    <img class="card-img-top mt-4 " src="{{asset('images/logoTmoney.png')}}" alt="Title">
                                    <div class="card-body text-center">
                                        <h4 class="card-title text-danger fw-bolder mb-4 mt-2">Payer par Tmoney</h4>
                                        <button name="paiement" value="Tmoney" type="submit" class="btn btn-success" role="button">Payer</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-xxl-5 m-4 bg-primary rounded-3">
                               <div class="card bg-primary border-primary">
                                    <img class="card-img-top mt-4" src="{{asset('images/logoMoov.png')}}" alt="Title">
                                    <div class="card-body text-center">
                                        <h4 class="card-title text-white fw-bolder mb-4 mt-4">Payer par Flooz</h4>
                                         <button name="paiement" value="Flooz" type="submit" class="btn btn-danger" role="button">Payer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center row ">
                            <a name="" id="" class="btn btn-danger col-md-2" href="{{route('lignes')}}" role="button">Annuler</a>
                        </div>
                        @for($i=1; $i <= $nbrePassagers; $i++)
                            <input type="hidden" name="{{"nom" . "$i"}}" value="{{$donnees["nom" . "$i"]}}"/>
                            <input type="hidden" name="{{"prenom" . "$i"}}" value="{{$donnees["prenom" . "$i"]}}"/>
                            <input type="hidden" name="{{"email" . "$i"}}" value="{{$donnees["email" . "$i"]}}"/>
                            <input type="hidden" name="{{"telephone" . "$i"}}" value="{{$donnees["telephone" . "$i"]}}"/>
                        @endfor
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js') }}" defer></script>
    
</body>


</html>
