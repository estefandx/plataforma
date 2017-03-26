<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
    
});
    /*crear usuarios*/
    $factory->define(App\Usuario::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nombre' => $faker->name,
        'apellido' => $faker->lastName  ,
        'email' => $faker->unique()->safeEmail,
        'telefono' => $faker->PhoneNumber,
        'ciudad_id' => '1',
        'perfil_id' => $faker->numberBetween($min = 1, $max = 2),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
        'updated_at' => date('Y-m-d H:m:s'),
    ];



});


        /*crear productos*/
    $factory->define(App\Product::class, function (Faker\Generator $faker) {
    
    
    return [
        'usuario_id' => $faker->numberBetween($min = 1, $max = 50),
        'titulo' => $faker->text($maxNbChars = 50),
        'descripcion' => $faker->text($maxNbChars = 150),
        'precio' => $faker->randomNumber(8),
        'created_at' => date('Y-m-d H:m:s'),
        'updated_at' => date('Y-m-d H:m:s'),
    ];



});


    /*crear fotos a los productos*/
    $factory->define(App\Photo::class, function (Faker\Generator $faker) {
    
    
    return [
        'producto_id' => $faker->numberBetween($min = 1, $max = 120),
        'nombre' => $faker->name,
        'url' => $faker->imageUrl('640', '480'),
    
    ];



});    
