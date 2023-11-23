@include('layouts.app')



<style>
    body {
        background-color: rgba(40, 117, 245, 0.45);
    }
</style>

<div class="container-fluid">
    <div class="container  bg-white mt-5 rounded-3">
        <div class="justify-content-center row  text-center">
            <h1 class="mt-5">Liste des lignes</h1>
            <div class="container table-responsive data_table m-5">
                <table id="example" class="table table-stripped table-bordered table-hover mt-5">
                    <thead class="h5 mt-5">
                        <tr class="">
                            <th class="p-4 text-center">Numéro de la ligne</th><th class="p-4 text-center">Départ</th><th class="p-4 text-center">Arrivée</th><th class="p-4 text-center">Prix</th><th class="p-4 text-center">Arrets</th>
                            @if(\Illuminate\Support\Facades\Auth::user()->can('voyage_delete', \App\Models\Voyage::class))
                            <th></th><th></th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                    <!--Boucle foreach lignes   -->
                    @foreach($lignes as $ligne)
                        <tr class="h5">
                            <td>{{$ligne->id_ligne}}</td>
                            <td>{{$ligne->depart}}</td>
                            <td>{{$ligne->arrivee}}</td>
                            <td>{{$ligne->prix}}</td>
                            <td scope="row"><p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href={{"#ligne" . $ligne->id_ligne}} role="button" aria-expanded="false" aria-controls={{"ligne" . $ligne->id_ligne}}>
                                    Arrêts
                                </a>
                            </p>
                            </td>
                            @if(\Illuminate\Support\Facades\Auth::user()->can('voyage_delete', \App\Models\Voyage::class))
                            <td>
                                <form action="{{route('editionLigne', $ligne->id_ligne)}}" method="get">
                                    @csrf
                                    <button type="submit" class="btn btn-success" value="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('suppressionLigne', $ligne->id_ligne)}}" method="post" onsubmit="return confirmationSuppression()">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                          </svg>
                                    </button>
                                </form>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            <td colspan="7">
                                <div class="collapse row" id={{"ligne" . $ligne->id_ligne}}>
                                    <div class="col-4 text-center align-self-start text-primary">
                                        <p class="h3">
                                            Villes desservies lors du voyage :
                                        </p>
                                    </div>
                                    <div class="col-8 align-self-end justify-content-end">
                                        <!--carte google maps-->
                                        <iframe src="{{$ligne->arrets}}" width="100%" height="560px" style="border:0;" class="carte-maps" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <!--Fin boucle for each-->
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        var table = $('#example').DataTable({
            buttons:['copy', 'csv', 'excel', 'pdf', 'print', 'colvis']
        });

        table.buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');
    })
</script>

