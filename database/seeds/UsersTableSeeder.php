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
        $user = User::create([
                	'name' => 'Camilo',
                	'email' => 'camilorodri28@outlook.com',
                	'password' => bcrypt('123')
                ]);

        $role = Role::where('name', '=', 'Administrador')->first();
        $user->attachRole($role);

    }
}
