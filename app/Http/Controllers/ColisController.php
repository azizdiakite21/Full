<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Colis;
use App\Models\Ligne;
use App\Models\Voyage;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ColisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colis = Colis::paginate(5);
        return view('administrationViews.colis.listeDesColis')->with('colis', $colis);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $destinations = DB::table('lignes')
        ->select('arrivee')
        ->distinct()
        ->get();
        return view('administrationViews.colis.enregistrementColis', compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = Client::all()
            ->where('nom', '=',$request["nom"])
            ->where('prenom', '=', $request["prenom"]);

        if (count($client) == 0) {
            Client::create([
                'nom' => $request["nom"],
                'prenom' => $request["prenom"],
                'email' => $request["email"],
                'telephone' => $request["telephone"]
            ]);
        }
        $client = Client::all()
        ->where('nom', '=',$request["nom"])
        ->where('prenom', '=', $request["prenom"])->first();
    
        $request['id_client'] = $client->id_client;
        $request['statut_colis'] = 'station';
        $request['code_colis'] = generateString(8); 

        Colis::create($request->all());

        return view('administrationViews.colis.telechargement_tickets')->with('code_colis', $request['code_colis']);

        
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colis  $colis
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $colis = Colis::where('code_colis', $request['code_colis'])->first();
        return view('customersViews.colisClient')->with('colis', $colis);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Colis  $colis
     * @return \Illuminate\Http\Response
     */
    public function edit(Colis $colis)
    {
        return view('administrationViews.colis.modifierColis')->with('coli', $colis);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Colis  $colis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colis $colis)
    {
        //
        $colis->update($request->all());
        return redirect()->route('listeColis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colis  $colis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colis $colis)
    {
        //
        $colis->delete();
        return redirect()->route('listeColis');
    }

    public function affectation_colis(Request $request){

        $voyages_dispos = DB::table('voyages')
        ->join('lignes', 'voyages.id_ligne', '=', 'lignes.id_ligne')
        ->join('vehicules', 'vehicules.id_vehicule', '=', 'voyages.id_vehicule')
        ->select('plaque', 'datevoyage', 'depart', 'heure_depart', 'arrivee', 'id_voyage')
        ->where('datevoyage', '>=', date("Y-m-d H:i:s"))
        ->where('lignes.arrivee', '=', $request->destination)
        ->distinct()
        ->get();

        return view('administrationViews.colis.affectationColis', compact('request', 'voyages_dispos'));
    }


    public function paiement(Request $request)
    {
     
        $id_voyage = $request->id_voyage;
        return view('administrationViews.colis.paiementColis', compact('request', 'id_voyage'));
        
    }


    // function generating the parcel ticket for the customer

    public function generationTicket(Request $request)
    {
        $colis =  DB::table('colis')
        ->join('voyages','voyages.id_voyage', '=', 'colis.id_voyage')
        ->join('clients','clients.id_client', '=', 'colis.id_client')
        ->join('users','users.id', '=', 'colis.id_caissier')
        ->join('vehicules','vehicules.id_vehicule', '=', 'voyages.id_vehicule')
        ->select( 
                    'nomdestinataire', 
                            'prenomdestinataire', 
                            'telephonedestinataire', 
                            'taxage', 
                            'destination', 
                            'poids',  
                            'code_colis',
                            'users.nom',
                            'users.prenom',
                            'datevoyage',
                            'plaque',
                            'date_enregistrement',
                            'id_colis',
                            'clients.nom as nomcli',
                            'clients.prenom as prenomcli',
                            'clients.telephone'
        )
        ->where('code_colis', '=', $request['code_colis'])
        ->first();


        // label for the package
        $pdf = Pdf::loadview('administrationViews.colis.ticket_colis_pdf', compact('colis'))->setPaper('a4', 'portrait');
        return $pdf->download('ticket_colis' . $colis->id_colis . '.pdf');


    }

        
     
        

}
