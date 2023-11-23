<?php

namespace Database\Seeders;

use App\Models\Colis;
use Illuminate\Database\Seeder;

class ColisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Colis::create([
            'contenu' => 'Igname',
            'nomdestinataire'=> 'Magnim',
            'prenomdestinataire'=> 'Puissant',
            'destination'=>'Kara',
            'telephonedestinataire'=>'+22891952485',
            'statut_colis'=>'arrivé',
            'taxage' => 2500,
            'poids'=> 12,
            'code_colis' => '45fhe8et',
            'id_voyage'=>3,
            'id_client'=>1,
            'id_caissier'=>1
        ]);

        Colis::create([
            'contenu' => 'Telephone',
            'nomdestinataire'=> 'Tchoklo',
            'prenomdestinataire'=> 'Yann',
            'destination'=>'Kara',
            'telephonedestinataire'=>'+22891952485',
            'poids'=> 30,
            'taxage' => 4000,
            'statut_colis'=>'remis',
            'code_colis' => 'de57fpfa',
            'id_voyage'=>3,
            'id_client'=>1,
            'id_caissier'=>1
        ]);
    }
}
