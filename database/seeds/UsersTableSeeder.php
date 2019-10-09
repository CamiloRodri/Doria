<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('name', '=', 'Administrador')->first();
        $usua = Role::where('name', '=', 'Usuario')->first();
        $jefe = Role::where('name', '=', 'Jefe')->first();

        $user = User::create([
                	'name' => 'Camilo',
                	'email' => 'camilorodri28@outlook.com',
                	'password' => bcrypt('123')
                ]);
        $user->attachRole($admin);

        $user = User::create([
                    'name' => 'Sebastian',
                    'email' => 'sebastian@outlook.com',
                    'password' => bcrypt('123')
                ]);
        $user->attachRole($jefe);

        $user = User::create([
                    'name' => 'Detallista',
                    'email' => 'detallista@outlook.com',
                    'password' => bcrypt('123')
                ]);
        $user->attachRole($usua);

    }
}
