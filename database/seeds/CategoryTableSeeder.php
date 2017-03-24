<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Category::create(['nombre' => 'Vehiculo-Motos']);
       Category::create(['nombre' => 'Propiedades-Inmuebles']);
       Category::create(['nombre' => 'Tv-Audio_videos_Camaras']);
       Category::create(['nombre' => 'Computadores-Portatiles']);
       Category::create(['nombre' => 'Videojuegos-Consolas']);
       Category::create(['nombre' => 'Muebles-Hogar-Jardin']);
       Category::create(['nombre' => 'Electrodomesticos']);
       Category::create(['nombre' => 'Deporte-Bicicletas']);
       Category::create(['nombre' => 'Bebe-Niños-Juguetes']);
       Category::create(['nombre' => 'Moda-belleza']);
       Category::create(['nombre' => 'Hobbies-Musica-Arte-Liros']);
       Category::create(['nombre' => 'Animales-Mascotas']);
       Category::create(['nombre' => 'Maquinaria-Herramienta']);
       Category::create(['nombre' => 'Telefono-Tablets']);
       Category::create(['nombre' => 'Telefono-Tablets']);
       Category::create(['nombre' => 'Telefono-Tablets']);
       Category::create(['nombre' => 'Telefono-Tablets']);
       Category::create(['nombre' => 'Servicios']);
    }
}
