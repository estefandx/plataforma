<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	/*como no hay una forma de controlar la integridad de los datos con las llaver foraneas
    	se debe mirar que al generar las llaves foraneas se generen en el  rango dle numero de registros que se generen el la taba padre*/
        $this->call(CountryTableSeeder::class);
        $this->call(DepartamentTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(ProfileTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
         
    }
    
}
