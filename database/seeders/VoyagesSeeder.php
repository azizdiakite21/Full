<?php

namespace Database\Seeders;

use App\Models\Voyage;
use Illuminate\Database\Seeder;

class VoyagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Voyage::create([
            'datevoyage' => '11/04/2022',
            'heure_depart' => '7:00',
            'ticketsvendus' => 55,
            'id_vehicule' => 1,
            'id_ligne' => 1,
        ]);

        Voyage::create([
            'datevoyage' => '11/04/2022',
            'heure_depart' => '14:00',
            'ticketsvendus' => 40,
            'id_vehicule' => 2,
            'id_ligne' => 1,
        ]);

        Voyage::create([
            'datevoyage' => '12/10/2023',
            'heure_depart' => '7:00',
            'ticketsvendus' => 55,
            'id_vehicule' => 3,
            'id_ligne' => 3,
        ]);

        Voyage::create([
            'datevoyage' => '11/09/2022',
            'heure_depart' => '14:00',
            'ticketsvendus' => 0,
            'id_vehicule' => 3,
            'id_ligne' => 1,
        ]);

        Voyage::create([
            'datevoyage' => '12/08/2022',
            'heure_depart' => '7:00',
            'ticketsvendus' => 30,
            'id_vehicule' => 2,
            'id_ligne' => 2,
        ]);

        Voyage::create([
            'datevoyage' => '11/09/2022',
            'heure_depart' => '7:00',
            'ticketsvendus' => 60,
            'id_vehicule' => 3,
            'id_ligne' => 1,
        ]);
    }
}
