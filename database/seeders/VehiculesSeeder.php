<?php

namespace Database\Seeders;

use App\Models\Vehicule;
use Illuminate\Database\Seeder;

class VehiculesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicule::create([
            'nbplaces' => 55,
            'plaque' => 'AZ1542',
            'marque' => 'Mercedes-Benz',
            'climatisation' => false,
            'statut' => 'maintenance',
        ]);

        Vehicule::create([
            'nbplaces' => 50,
            'plaque' => 'BC5247',
            'marque' => 'Mercedes-Benz',
            'climatisation' => true,
            'statut' => 'opérationnel',
        ]);

        Vehicule::create([
            'nbplaces' => 60,
            'plaque' => 'BI9547',
            'marque' => 'Mercedes-Benz',
            'climatisation' => false,
            'statut' => 'opérationnel',
        ]);
    }
}
