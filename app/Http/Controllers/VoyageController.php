<?php

namespace App\Http\Controllers;

use App\Models\Ligne;
use App\Models\Vehicule;
use App\Models\Voyage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoyageController extends Controller
{
    public function afficherVoyage() {
        $voyages = DB::table('lignes')
            ->join('voyages', 'voyages.id_ligne', '=', 'lignes.id_ligne')
            ->join('vehicules', 'vehicules.id_vehicule', '=', 'voyages.id_vehicule')
            ->select('lignes.id_ligne', 'vehicules.id_vehicule', 'id_voyage', 'depart', 'datevoyage','arrivee', 'heure_depart')
            ->where('datevoyage', '>=', date('Y-m-d'), 'and')
            ->where('voyages.deleted_at' ,'=', null)
            ->get();
        return view('administrationViews.voyages.listeDesVoyages')->with('voyages', $voyages);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages = DB::table('lignes')
        ->join('voyages', 'voyages.id_ligne', '=', 'lignes.id_ligne')
        ->join('vehicules', 'vehicules.id_vehicule', '=', 'voyages.id_vehicule')
        ->select('lignes.id_ligne', 'vehicules.id_vehicule', 'id_voyage', 'depart', 'datevoyage','arrivee', 'ticketsvendus', 'nbplaces', 'heure_depart')
        ->where('datevoyage', '>=', date('Y-m-d'), 'and')
        ->where('voyages.deleted_at' ,'=', null)
            ->get();

        return view('customersViews.lignes')->with('voyages', $voyages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicules = Vehicule::all();
        $lignes = Ligne::all();
        return view('administrationViews.voyages.ajoutVoyage', compact('lignes', 'vehicules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Voyage::create(
            ['datevoyage' => $request["datevoyage"],
            'heure_depart' => $request["heure_depart"],
            'id_vehicule' => $request["id_vehicule"],
            'id_ligne' => $request["id_ligne"]]);
        return redirect()->route('listeVoyages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function show(Voyage $voyage)
    {
        return view('voyages.show')->with('voyage', $voyage);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function edit(Voyage $voyage)
    {
        $vehicules = Vehicule::all();
        $lignes = Ligne::all();
        return view('administrationViews.voyages.editionVoyage', compact('voyage', 'lignes', 'vehicules'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voyage $voyage)
    {
        $voyage->dateVoyage = $request["datevoyage"];
        $voyage->heure_depart = $request["heure_depart"];
        $voyage->idBus = $request["id_vehicule"];
        $voyage->idLigne = $request["id_ligne"];
        $voyage->save();
        return redirect()->route('listeVoyages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voyage $voyage)
    {
        echo "hello";
        $voyage->delete();
        return redirect()->route('listeVoyage');
    }
}