<?php

use Illuminate\Database\Seeder;
use App\Departament;

class DepartamentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Departament::create(['nombre' => 'Caldas',
       					     'pais_id' => 1]);
        Departament::create(['nombre' => 'Risaralda',
       					     'pais_id' => 1]);
         Departament::create(['nombre' => 'Quindio',
       					     'pais_id' => 1]);
    }
}
