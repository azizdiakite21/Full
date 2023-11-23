<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;

class PermissionSeeder extends \Illuminate\Database\Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // spatie documentation
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        $permissions = [
            'permission_index',
            'permission_create',
            'permission_show',
            'permission_edit',
            'permission_delete',

            'role_index',
            'role_create',
            'role_show',
            'role_edit',
            'role_delete',

            'employe_index',

            'ticket_delete',

            'colis_delete',

            'ligne_create',
            'ligne_edit',
            'ligne_delete',

            'bus_edit',

            'voyage_edit',
            'voyage_delete',
            'voyage_create'
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }
    }
}
