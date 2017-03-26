<?php

use Illuminate\Database\Seeder;
use App\Profile;


class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Profile::create(['nombre' => 'admin']);
       Profile::create(['nombre' => 'usuario']);
    }
}
