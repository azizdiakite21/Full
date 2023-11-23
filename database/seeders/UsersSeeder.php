<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'ydaou',
            'nom' => 'TEOURI',
            'prenom' => 'Touré-Ydaou',
            'email'=>'ttoureydaou@gmail.com',
            'password'=> Hash::make('ydaou')
        ]);

        $user->assignRole('Gestionnaire');

        $user = User::create([
            'name'=>'samrou',
            'nom' => 'TEOURI',
            'prenom' => 'Samrou',
            'email'=>'samrouteouri@gmail.com',
            'password'=>Hash::make('samrou')
        ]);

        $user->assignRole('Gestionnaire');

        $user = User::create([
            'name'=>'aziz',
            'nom' => 'ISSA-TOURE',
            'prenom' => 'Aziz',
            'email'=>'azizdiakite21@gmail.com',
            'password'=>Hash::make('aziz')
        ]);

        $user->assignRole('Gestionnaire');
    }
}
