<?php

namespace App\Http\Controllers;

use App\Models\Ligne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LigneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lignes = Ligne::where('deleted_at', null)
        ->orderBy('depart')
        ->get();
        return view('administrationViews.lignes.listeDesLignes')->with('lignes', $lignes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrationViews.lignes.ajoutLigne');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('reciproque')) {
            Ligne::create($request->all());
        } else {
            Ligne::create($request->all());
            Ligne::create([
                "depart" => $request->arrivee,
                "arrivee" => $request->depart,
                "prix" => $request->prix,
                "arrets" => $request->arrets
            ]);
        }
        return redirect()->route('listeLignes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ligne  $ligne
     * @return \Illuminate\Http\Response
     */
    public function show(Ligne $ligne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ligne  $ligne
     * @return \Illuminate\Http\Response
     */
    public function edit(Ligne $ligne)
    {
        return view('administrationViews.lignes.editionLigne', compact('ligne'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ligne  $ligne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ligne $ligne)
    {
        $ligne->prix = $request->prix;
        $ligne->depart = $request->depart;
        $ligne->arrivee = $request->arrivee;
        $ligne->arrets = $request->arrets;
        $ligne->save();
        return redirect()->route('listeLignes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ligne  $ligne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ligne $ligne)
    {
        $ligne->delete();
        return redirect()->route('listeLignes');
    }
}
