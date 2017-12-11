<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);

		DB::table('users')->insert([
            'nome' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123123'),
            'role_id' => 1,
            'role_do_usuario' => 1,
            'status' => 'Ativo', 
        ]);

        /*atribuirá permissões ao ADM*/
        DB::table('permission_role')->insert([
            'permission_id' => '1',
            'role_id' => '1',
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => '2',
            'role_id' => '1',
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => '3',
            'role_id' => '1',
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => '4',
            'role_id' => '1',
        ]);
    }
}
