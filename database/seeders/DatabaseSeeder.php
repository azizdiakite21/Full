<?php

namespace Database\Seeders;

use App\Models\Colis;
use Database\Seeders\ClientSeeder;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            RoleHasPermissionSeeder::class,
            ClientSeeder::class,
            UsersSeeder::class,
            LignesSeeder::class,
            VehiculesSeeder::class,
            VoyagesSeeder::class,
            ColisSeeder::class,
        ]);

    }
}
