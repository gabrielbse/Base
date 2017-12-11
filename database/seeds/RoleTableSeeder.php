<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        
		$role = [
            //1 a 2
            [
                'name' => 'Administrador',
                'display_name' => 'Administrador',
                'description' => 'Administrador do Sistema'
            ], 
            [
                'name' => 'Inativo',
                'display_name' => 'Usuário Inativo',
                'description' => 'Usuário Inativo'
            ]       
                        
        ];

        foreach ($role as $key => $value) {
            Role::create($value);
        }
    }

}
