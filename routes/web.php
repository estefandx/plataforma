<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'cors'], function (){

    Route::post('authlogin','ApiAuthController@UserAuth');

});

//rutas restfull

//rutas para la tabla usuarios
Route::resource('user', 'UserController');

//rutas para la tabla productos
Route::resource('product', 'ProductController');

//rutas para la tabla mensajes
Route::resource('message', 'MessageController');

//rutas para la tabla comentarios
Route::resource('Commentary', 'CommentaryController');

//rutas para la tabla perfiles
Route::resource('profile', 'ProfileController');



// rutas especifica que involucran varias tablas 

Route::get('/productos/user/{id}',function($user){

return 'productos del usuario '.$user;

}); 

//ruta para obtener productos  por categoria  (tambien aplica para subcategoria al estar en la misma tabla)
Route::get('/productos/categoria/{id}',function($categoria){
return 'productos para eliminar '.$categoria;

});


//ruta para obtener productos por departamento
Route::get('/productos/departamento/{id}',function($departamento){
//para poder probar la ruta se necesita un formulario
return 'productos por departamento  '.$departamento;

}); 

//ruta para obtener productos por Ciudad
Route::get('/productos/ciudad/{id}',function($ciudad){
//para poder probar la ruta se necesita un formulario
return 'productos por departamento  '.$ciudad;

});   




