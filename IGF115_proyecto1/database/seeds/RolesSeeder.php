<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medico= App\Role::create([
        'nombre'=> 'Medico',
        'permisos'=> json_encode([
        	'create-msg' => true,
        	'update-msg' => true,
        	'publish-receta' => true,
        ]),
        	]);

        $paciente= app\Role::create([
        'nombre'=> 'Paciente',
        'permisos'=> json_encode([
        	'create-msg' => true,
        ]),
        	]);

    }
}
