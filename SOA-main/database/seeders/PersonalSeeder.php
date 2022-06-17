<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->getData() as $keyName => $name){
            DB::table('personals')->insert([
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
            'admin'        => 'Administrador',
            'vendedor'     => 'Vendedor',
        ];
    }
}
