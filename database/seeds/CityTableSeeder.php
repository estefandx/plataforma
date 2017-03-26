<?php

use Illuminate\Database\Seeder;
use App\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         City::create(['nombre' => 'manizales',
       					     'departamento_id' => 1]);
        City::create(['nombre' => 'riosucio',
       					     'departamento_id' => 1]);
         City::create(['nombre' => 'anserma',
       					     'departamento_id' => 1]);

         City::create(['nombre' => 'pereira',
       					     'departamento_id' => 2]);
         City::create(['nombre' => 'la virginia',
       					     'departamento_id' => 2]);
         City::create(['nombre' => 'santa rosa',
       					     'departamento_id' => 2]);

        City::create(['nombre' => 'armenia',
       					     'departamento_id' => 3]);
        City::create(['nombre' => 'la loma',
       					     'departamento_id' => 3]);
        City::create(['nombre' => 'calarca',
       					     'departamento_id' => 3]);
    }
}
