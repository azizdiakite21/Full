<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recette = getRecette();
        $colis=getColisRecus();
        $tickets=getTicketsVendus();
        
        return view('home')->with([
            'recette' => $recette,
            'colis' => $colis,
            'tickets' => $tickets
        ]);
    }
}
