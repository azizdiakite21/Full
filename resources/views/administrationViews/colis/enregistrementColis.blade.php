@extends('layouts.app')

@section('content')

<style>
    body {
        background-color: rgba(40, 117, 245, 0.45);
    }
</style>

<div class="container-fluid">
    <div class="container col-xxl-8">
        <div class="card shadow-sm mt-3">
            <form action="{{route('affectationColis')}}" method="GET">
                @csrf
                <div class="card-header text-center h1 p-3">
                    Enregistrement du colis
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="p-3 text-black-75 opacity-50 bg-info text-center mt-3 h3">
                        Informations sur l'expéditeur
                        </div>
                        <div class="row justify-content-center m-0 mt-2">
                            <div class="col-xxl-3 col-md-6 col-sm-12">
                                <div class="p-2 input-group input-group-lg">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>
                                    </div>
                                <input type="text" class="form-control" name="nom" id="" placeholder="Nom" >
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-6 col-sm-12">            
                                <div class="p-2 input-group input-group-lg">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>
                                    </div>
                                    <input type="text" class="form-control" name="prenom" id="" placeholder="Prenom">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-6 col-sm-12">
                                <div class="p-2 input-group input-group-lg">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg>
                                    </div>
                                    <input type="text" class="form-control" name="telephone" id="" placeholder="Numéro de téléphone">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-6 col-sm-12">
                                <div class="p-2 input-group input-group-lg">
                                    <div class="input-group-text">@</div>
                                        <input type="email" class="form-control" name="email" id="" placeholder="Email">
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="p-3 text-black-75 opacity-50 bg-info text-center mt-3 mb-3 h3 ">
                            Informations sur le colis
                        </div>
                        <div class="row justify-content-center m-0">
                            <div class="col-xxl-4 col-md-4 col-sm-12">
                                <div class="p-2 input-group input-group-lg">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-fill" viewBox="0 0 16 16">
                                            <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z"/>
                                        </svg>
                                    </div>
                                    <input type="text" class="form-control" name="contenu" id="contenu" placeholder="Contenu" >
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-4 col-sm-12">
                                <div class="p-2 input-group input-group-lg">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                                        </svg>
                                    </div>
                                    <select class="form-select" name="destination">
                                        <option value="">Choisissez la destination</option>
                                        @foreach ($destinations as $destination) 
                                        <option value="{{$destination->arrivee}}" name="destination">{{$destination->arrivee}}</option>   
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-4 col-sm-12">
                                <div class="p-2 input-group input-group-lg">
                                    <input type="text" class="form-control" name="poids" id="" placeholder="Poids du colis">
                                    <div class="input-group-text">
                                        Kg
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 text-black-75 opacity-50 bg-info text-center mt-3 mb-3 h3">
                            Informations sur le destinataire
                        </div>
                        <div class="row justify-content-center m-0 mt-2">
                            <div class="col-xxl-4 col-md-4 col-sm-12">
                                <div class="p-2 input-group input-group-lg">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>
                                    </div>
                                    <input type="text" class="form-control" name="nomdestinataire" id="" placeholder="Nom" >
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-4 col-sm-12">       
                                <div class="p-2 input-group input-group-lg">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>
                                    </div>
                                    <input type="text" class="form-control" name="prenomdestinataire" id="" placeholder="Prenom">
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-4 col-sm-12"> 
                                <div class="p-2 input-group input-group-lg">
                                    <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg>
                                    </div>
                                    <input type="text" class="form-control" name="telephonedestinataire" id="" placeholder="Numéro de téléphone">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-center text-muted">
                        <input type="submit" value="Suivant" name="Suivant" class="btn btn-primary col-md-5"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection