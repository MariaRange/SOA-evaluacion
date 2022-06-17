<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->getData() as $keyName => $name){
            DB::table('permisos')->insert([
                'key_name'      => $keyName,
                'name'          => $name,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]);
        }
    }

    private function getData()
    {
        return [
            'ver_personal'         => 'Ver Personal',
            'actualizar_personal'  => 'Actualizar Personal',
            'insertar_personal'    => 'Insertar Personal',
            'eliminar_personal'    => 'Elimnar Personal',
        ];
    }
}
