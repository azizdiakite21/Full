@include('layouts.app')

<style>
    body {
        background-color: rgba(40, 117, 245, 0.45);
    }
</style>

<div class="container-fluid">
    <div class="container rounded-3">
        <div class="card">
            <div class="card-header text-center h3 p-3">
                Téléchargement du ticket
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <form action="{{route('ticketColis')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-xxl-12 p-4">
                                    <div class="row justify-content-center">
                                        <input type="hidden" name="code_colis" value="{{$code_colis}}"/>
                                        <button type="submit" name="submit" value="colis" class="btn pt-3 btn-success col-12 col-md-6 text-center"><h5>Téléchargez le ticket</h5></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted d-flex justify-content-center">
                <a href="{{route('confirmation')}}" class="col-3 btn btn-primary" >Suivant</a>
            </div>
        </div>
    </div>
</div>