<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('name', '=', 'Administrador')->first();
        $user = Role::where('name', '=', 'Usuario')->first();
        $jefe = Role::where('name', '=', 'Jefe')->first();

        $permission  =  Permission::create([
                        'name' => 'ver-mision',
                        'display_name' => 'ver-mision',
                        'description' => 'Ver Mision'
                    ]);
        
        $admin->attachPermission($permission);
        $user->attachPermission($permission);
        $jefe->attachPermission($permission);

    }
}
