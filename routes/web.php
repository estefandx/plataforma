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

/*------------------   rutas para el manejo de usuario    ------------------------------*/

//ruta para registrar un usuario
Route::post('/user',function(){

return 'para registrar usuarios';

}); 


/*ruta para  editar el perfil se un usuario (el parametro del usuario de obtiene 
del inicio de sesion para no mostrarlo en la url)*/
Route::get('/user',function(){

return 'para editar usuarios usuarios';

}); 



/*------------------   rutas para el manejo de mensajes    ------------------------------*/

//ruta para obtener los mensajes de un usuario 
Route::get('/mensaje/user/{id}',function($user){

return $user;

});

//ruta para enviar mensajes
Route::post('/mensaje',function(){

return 'para enviar mensajes';

}); 

//ruta para obtener un mensaje 
Route::get('/mensaje/{id}',function($mensaje){

return 'ver el mensaje '.$mensaje;

}); 

//ruta para eliminar un mensaje 
Route::delete('/mensaje/{id}',function($mensaje){

return 'eliminar mensaje '.$mensaje;

}); 

/*------------------   rutas para el manejo de productos    ------------------------------*/
//ruta para obtener los productos 
Route::get('/productos',function(){

return 'listar todos los productos';

});

//ruta para obtener los productos  de un usuario especifico
Route::get('/productos/user/{id}',function($user){

return 'productos del usuario '.$user;

}); 


//ruta para registrar un producto
Route::post('/productos',function(){
//para poder probar la ruta se necesita un formulario
return 'productos a registrar  ';

}); 

//ruta para editar un producto
Route::put('/productos/{id}',function($producto){
//para poder probar la ruta se necesita un formulario
return 'productos  '.$producto;

});

//ruta para eliminar un producto
Route::delete('/productos/{id}',function($producto){
//para poder probar la ruta se necesita un formulario
return 'productos para eliminar '.$producto;

}); 

//ruta para obtener productos  por categoria  (tambien aplica para subcategoria al estar en la misma tabla)
Route::get('/productos/categoria/{id}',function($categoria){
//para poder probar la ruta se necesita un formulario
return 'productos para eliminar '.$categoria;

});


//ruta para obtener productos por departamento
Route::get('/productos/departamento/{id}',function($departamento){
//para poder probar la ruta se necesita un formulario
return 'productos por departamento  '.$departamento;

});  




