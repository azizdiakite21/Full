<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'nom' => 'TOURE',
            'prenom' => 'Djallo',
            'telephone' => '+22893358485',
            'email' => 'samrouteouri@gmail.com'
        ]);

        Client::create([
            'nom' => 'TEOURI',
            'prenom' => 'Toure Ydaou',
            'telephone' => '+22891414124',
            'email' => 'azizdiakite21@gmail.com'
        ]);

        Client::create([
            'nom' => 'KATOKA',
            'prenom' => 'Sannie',
            'telephone' => '+22891384224',
            'email' => 'ttoureydaou@gmail.com'
        ]);

        Client::create([
            'nom' => 'AONE',
            'prenom' => 'Nell',
            'telephone' => '+22890035191',
            'email' => 'test@gmail.com'
        ]);

        Client::create([
            'nom' => 'SPOKPIE',
            'prenom' => 'Aurelien',
            'telephone' => '+22893358485',
            'email' => 'helloworld@gmail.com'
        ]);
    }
}
