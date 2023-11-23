<?php

use function Ramsey\Uuid\v1;
use App\Models\Colis;
use App\Models\Ligne;
use App\Models\Ticket;


    if (!function_exists("generateString")) {
        function generateString ($len_of_gen_str) {
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
            $var_size = strlen($chars);
            $random_str="";
            for( $x = 0; $x < $len_of_gen_str; $x++ ) {  
                $random_str = $random_str. $chars[ rand( 0, $var_size - 1 ) ];   
            }
            return $random_str; 
        }
    }

    if (!function_exists("getRecette")) {
        function getRecette() {
            $recette = 0;
            $lignes = Ligne::all();
            foreach ($lignes as $ligne) {
                $nbre_tickets_vendus = Ticket::join('voyages', 'voyages.id_voyage', '=', 'tickets.id_voyage')
                    ->join('lignes', 'lignes.id_ligne', '=', 'voyages.id_ligne')
                    ->where('lignes.id_ligne', '=', $ligne->id_ligne)
                    ->where('tickets.created_at', '>=', date('Y-m-d 00:00:00'))
                    ->count();
                $recette_ligne = $nbre_tickets_vendus * $ligne->prix;
                $recette += $recette_ligne;
            }
            $colis = Colis::all()->where('date_enregistrement', '=', date('Y-m-d'));
            foreach ($colis as $coli) {
                $recette += $coli->taxage;
            }
            return $recette;
        }
    }
    
    // Tickets Vendus aujourd'hui
    
    if (!function_exists("getTicketsVendus")) {
        function getTicketsVendus() {
            $nbre_tickets_vendus = Ticket::join('voyages', 'voyages.id_voyage', '=', 'tickets.id_voyage')
                ->join('lignes', 'lignes.id_ligne', '=', 'voyages.id_ligne')
                ->where('tickets.created_at', '>=', date('Y-m-d'))
                ->count();
            return $nbre_tickets_vendus;
        }
    }
    
    // Colis reçus aujourd'hui
    
    if (!function_exists("getColisRecus")) {
        function getColisRecus() {
            $nbre_colis_recus = Colis::all()->where('created_at', '>=', date('Y-m-d'))->count();
            return $nbre_colis_recus;
        }
    }