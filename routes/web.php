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
/**
 * web.php je fajl koji je zaduzen da pronadje ko treba da obradi trenutni request.
 * On to radi tako sto proalazi kroz sve rute u ovom fajlu i proevrava da li im se
 * putanja i metod rute slaze sa putanjom i metodom dolazeceg requesta, i ukoliko se poklapa
 * salje se request tom kontroleru tu metodu.
 * Ukoliko ne nadje kontroler koji treba da obradi trenutni request vraca se 404 not found.
 */

/**
 * Pozivamo staticki metod klase Route da registurjemo GET rutu.
 * Prvi argument je putanja(naziv) rute, drugi argument je
 * ImeKontrolera koji treba da obradi request te naziv metode koja u tom kontroleru zapravo obradjuje
 * request. Naziv kontrolera i metode odvojeni su @ simobolm uvek, i pisu se pod navodinicima kao stringovi.
 * Laravel ce taj kotroler instancirati (refleksijom) i pozvati metodu trazenu, i eventualno razersiti
 * method injection ( ubacice u metodu sta ste trazili - vrv Request).
 *
 */
Route::get('/', 'IndexController@home');
Route::get('/primer', 'IndexController@primer');
Route::get('/kolekcije', 'IndexController@kolekcije');

/**
 * Rute za kreiranje dinosaurusa.
 * Pratimo REST arhitekturu:
 *  1. GET request na rutu '/model/create' vraca view za kreiranje modela
 *  2. POST request na rutu '/model' store-uje kreirani model u bazu, i redirektuje na index
 *  3. GET request na rutu '/model' vraca view na kom se prikazuju svi zapisi tog modela
 *      s tim sto ovde to sad nisam napravio
 *      (na prvom domacem ste tako prikazivali sve studente)
 *
 *  Za delete i edit moramo da naucimo jos neke stvari.
 */
Route::get('/dinosaurus/create', 'DinosaurusController@create');
Route::post('/dinosaurus', 'DinosaurusController@store');

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{id}/edit', 'TaskController@edit');
Route::put('/tasks/{id}', 'TaskController@update');
Route::post('/tasks', 'TaskController@store');
Route::get('/tasks/create', 'TaskController@create');


Route::get('/projects', 'ProjectController@index');
Route::post('/projects', 'ProjectController@store');
Route::put('/projects/{id}', 'ProjectController@update');
Route::get('/projects/create', 'ProjectController@create');
Route::get('/projects/{id}/edit', 'ProjectController@edit');

Route::get('/blogs', 'BlogController@index');
Route::get('/blogs/create', 'BlogController@create');
Route::post('/blogs', 'BlogController@store');







