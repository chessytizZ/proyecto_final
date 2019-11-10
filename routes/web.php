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

// Route::get('/', function () {
//     $genero= App\Genero::find(2);
//     return $genero->posts;
// });
Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/pdf', 'PostController@exportPdf')->name('post');
Route::get('/video/pdf', 'VideoController@exportPdf')->name('post');

Route::get('/post', function () {
    return view('formulario_post');
});
Route::get('/video', function () {
    return view('formulario_video');
});
Route::get('/genero', function () {
    return view('formulario_genero');
});
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@Login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::get('/inicio', 'InicioController@index')->name('inicio');
Route::get('/succes/{message}', 'InicioController@succes')->name('succes');
Route::post('/inicio', 'InicioController@action')->name('inicio');
Route::get('/tareados', 'TareadosController@create')->name('tareados');
Route::get('/video/{id}', 'VideoController@individual')->name('video');
Route::get('/post/{id}', 'PostController@individual')->name('post');


Route::post('/post', 'PostController@register')->name('post');
Route::post('/video', 'VideoController@register')->name('video');
Route::post('/genero', 'GeneroController@register')->name('genero')->middleware("admin");

Route::put('/post', 'PostController@editar')->name('post');
Route::put('/video', 'VideoController@editar')->name('video');
Route::put('/genero', 'GeneroController@editar')->name('genero')->middleware("admin");

Route::get('/post/editar/{id}', 'PostController@editar_form')->name('post');
Route::get('/video/editar/{id}', 'VideoController@editar_form')->name('video');
Route::get('/genero/editar/{id}', 'GeneroController@editar_form')->name('genero')->middleware("admin");

Route::get('/post/eliminar/{id}', 'PostController@eliminar')->name('post');
Route::get('/video/eliminar/{id}', 'VideoController@eliminar')->name('video');
Route::get('/genero/eliminar/{id}', 'GeneroController@eliminar')->name('genero')->middleware("admin");

