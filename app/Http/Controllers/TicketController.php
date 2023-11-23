<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Ligne;
use App\Models\Ticket;
use App\Models\Vehicule;
use App\Models\Voyage;
use Barryvdh\DomPDF\Facade\Pdf;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('administrationViews.tickets.listesTickets')->with('tickets', $tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Vehicule $vehicule, Voyage $voyage, Ligne $ligne)
    {
        return view('forms_achat_tickets.infosVoyage')->with([
            'voyage' => $voyage,
            'vehicule' => $vehicule,
            'ligne' => $ligne,
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Voyage $voyage, Ligne $ligne, int $nombrePassagers)
    {
        $tickets = array();
        $ticket =null;
        for ($i=1; $i <= $nombrePassagers; $i++){
            $client = Client::all()
            ->where('nom', '=',$request["nom" . "$i"])
            ->where('prenom', '=', $request["prenom" . "$i"]);

            if (count($client) == 0) {
                Client::create([
                    'nom' => $request["nom" . "$i"],
                    'prenom' => $request["prenom" . "$i"],
                    'email' => $request["email" . "$i"],
                    'telephone' => $request["telephone" . "$i"]
                ]);
            }
            $client = Client::all()
            ->where('nom', '=',$request["nom" . "$i"])
            ->where('prenom', '=', $request["prenom" . "$i"])->first();

            $ticket = Ticket::create([
                'numplace' => $voyage->ticketsvendus + 1,
                'depart' => $ligne->depart,
                'arrivee' => $ligne->arrivee,
                'prix' => $ligne->prix,
                'statut' => 'payé',
                'id_voyage' => $voyage->id_voyage,
                'id_client' => $client->id_client,
            ]);

            Voyage::find($voyage->id_voyage)->update([
                'ticketsvendus' => $voyage->ticketsvendus +1,
            ]);

            $voyage=Voyage::find($voyage->id_voyage);

            $tickets[$i-1] = DB::table('tickets')
            ->join('clients', 'tickets.id_client', '=', 'clients.id_client')
            ->join('voyages', 'tickets.id_voyage', '=', 'voyages.id_voyage')
            ->join('lignes', 'voyages.id_ligne', '=', 'lignes.id_ligne')
            ->select('nom', 'prenom', 'numplace', 'tickets.depart', 'telephone','tickets.arrivee', 'lignes.prix', 'id_tickets', 'datevoyage', 'heure_depart')
            ->where('tickets.id_tickets', '=', $ticket->id_tickets)
            ->distinct()
            ->first();

        }






        return view('forms_achat_tickets.telechargement_tickets')->with([
            'tickets' => $tickets,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {   
        $nbre = $ticket->voyage->ticketsvendus;
        $nbre -= 1;
        Voyage::find($ticket->id_voyage)->update([
            'ticketsvendus' => $nbre
        ]);
        $ticket->delete();
        return redirect()->route('listeTickets');
    }

    public function enregistrement(Request $request, Vehicule $vehicule, Voyage $voyage, Ligne $ligne){

        return view('forms_achat_tickets.enregistrementVoyageur')->with([
            'voyage' => $voyage,
            'vehicule' => $vehicule,
            'ligne' => $ligne,
            'nombrePassagers' => $request->nombrePassagers
        ]);
    }

    public function paiement(Request $request, Vehicule $vehicule, Voyage $voyage, Ligne $ligne, int $nombrePassagers){

        //récupération des données (noms, prenom, emails, telephone)
        $donnees = array();
        for($i=1; $i <= $nombrePassagers; $i++){
            $donnees["nom" . "$i"] = $request["nom" ."$i"];
            $donnees["prenom" . "$i"] = $request["prenom" ."$i"];
            $donnees["email" . "$i"] = $request["email" ."$i"];
            $donnees["telephone" . "$i"] = $request["telephone" ."$i"];
        }

        return view('forms_achat_tickets.paiement')->with([
            'voyage' => $voyage,
            'vehicule' => $vehicule,
            'ligne' => $ligne,
            'donnees' => $donnees,
            'nbrePassagers' => $nombrePassagers
        ]);
    }

    public function downloadPDF($id){
        // Génération du QR Code



       $ticket =  DB::table('tickets')
            ->join('clients', 'tickets.id_client', '=', 'clients.id_client')
            ->join('voyages', 'tickets.id_voyage', '=', 'voyages.id_voyage')
            ->join('lignes', 'voyages.id_ligne', '=', 'lignes.id_ligne')
            ->select('nom', 'prenom', 'numplace', 'tickets.depart', 'telephone','tickets.arrivee', 'lignes.prix', 'id_tickets', 'datevoyage', 'heure_depart')
            ->where('tickets.id_tickets', '=', $id)
            ->distinct()
            ->first();

        $qrcode = QrCode::size(100)->generate("Client : " . "$ticket->nom  $ticket->prenom" . "\n" . "Voyage : " );

        $pdf = Pdf::loadview('forms_achat_tickets.ticket_pdf', compact('ticket', 'qrcode'))->setPaper('a6', 'landscape');
        return $pdf->download('fullTransport_ticket.pdf');
    }
}
