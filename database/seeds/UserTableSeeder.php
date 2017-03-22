<?php

use Illuminate\Database\Seeder;
use App\Usuario;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Model::unguard();

         $usuarios = factory(Usuario::class)->times(50)->create();   

        // Model::reguard();

    }
}
