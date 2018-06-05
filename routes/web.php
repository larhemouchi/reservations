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

//Route::post('/finnformati', 'HomeController@formati');

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/shows-conf', 'ShowController@conf')->name('shows.conf');

// les routes des users
/*
Route::get('users', 'UserController@index');
Route::get('users/create', 'UserController@create');
Route::post('users', 'UserController@store');
Route::get('users/{id}/edit', 'UserController@edit');
Route::put('users/{id}', 'UserController@update');
Route::delete('users/{id}', 'UserController@destroy');
*/
Route::resource('users', 'UserController');// cette ligne equivalent de tt les les routes

// les routes de artists
Route::get('artists', 'ArtistController@index');
Route::get('artists/create', 'ArtistController@create');
Route::post('artists', 'ArtistController@store');
Route::get('artists/{id}/edit', 'ArtistController@edit');
Route::put('artists/{id}', 'ArtistController@update');
Route::delete('artists/{id}', 'ArtistController@destroy');

// les routes de types
Route::get('types', 'TypeController@index');
Route::get('types/create', 'TypeController@create');
Route::post('types', 'TypeController@store');
Route::get('types/{id}/edit', 'TypeController@edit');
Route::put('types/{id}', 'TypeController@update');
Route::delete('types/{id}', 'TypeController@destroy');

//les routes de artiste_type_show
Route::get('artiste_type_shows', 'Artiste_type_showController@index');
Route::get('artiste_type_shows/create', 'Artiste_type_showController@create');
Route::post('artiste_type_shows', 'Artiste_type_showController@store');
Route::get('artiste_type_shows/{id}/edit', 'Artiste_type_showController@edit');
Route::put('artiste_type_shows/{id}', 'Artiste_type_showController@update');
Route::delete('artiste_type_shows/{id}', 'Artiste_type_showController@destroy');


//les routes de artiste_type
Route::get('artiste_types', 'Artiste_typeController@index');
Route::get('artiste_types/create', 'Artiste_typeController@create');
Route::post('artiste_types', 'Artiste_typeController@store');
Route::get('artiste_types/{id}/edit', 'Artiste_typeController@edit');
Route::put('artiste_types/{id}', 'Artiste_typeController@update');
Route::delete('artiste_types/{id}', 'Artiste_typeController@destroy');

//les routes de localities
Route::get('localities', 'LocalitieController@index');
Route::get('localities/create', 'LocalitieController@create');
Route::post('localities', 'LocalitieController@store');
Route::get('localities/{id}/edit', 'LocalitieController@edit');
Route::put('localities/{id}', 'LocalitieController@update');
Route::delete('localities/{id}', 'LocalitieController@destroy');


//les routes de localions
Route::get('locations', 'LocationController@index');
Route::get('locations/create', 'LocationController@create');
Route::post('locations', 'LocationController@store');
Route::get('locations/{id}/edit', 'LocationController@edit');
Route::put('locations/{id}', 'LocationController@update');
Route::delete('locations/{id}', 'LocationController@destroy');


//les routes de representation_user
/*
Route::get('representation_users', 'Representation_userController@index');
Route::get('representation_users/create', 'Representation_userController@create');
Route::post('representation_users', 'Representation_userController@store');
Route::get('representation_users/{id}/edit', 'Representation_userController@edit');
Route::put('representation_users/{id}', 'Representation_userController@update');
Route::delete('representation_users/{id}', 'Representation_userController@destroy');*/
Route::resource('representation_users', 'Representation_userController');// cette ligne equivalent de tt les les routes


//les routes de representats
Route::get('representations', 'RepresentationController@index');
Route::get('representations/create', 'RepresentationController@create');
Route::post('representations', 'RepresentationController@store');
Route::get('representations/{id}/edit', 'RepresentationController@edit');
Route::put('representations/{id}', 'RepresentationController@update');
Route::delete('representations/{id}', 'RepresentationController@destroy');


//les routes de roles
Route::get('roles', 'RoleController@index');
Route::get('roles/create', 'RoleController@create');
Route::post('roles', 'RoleController@store');
Route::get('roles/{id}/edit', 'RoleController@edit');
Route::put('roles/{id}', 'RoleController@update');
Route::delete('roles/{id}', 'RoleController@destroy');

//les routes de show
Route::get('shows', 'ShowController@index');
Route::get('shows/create', 'ShowController@create');
Route::post('shows', 'ShowController@store');
Route::get('shows/{id}/edit', 'ShowController@edit');
Route::put('shows/{id}', 'ShowController@update');
Route::delete('shows/{id}', 'ShowController@destroy');
Route::get('shows/{slug}', 'ShowController@afficher')->name('shows');
//Route::resource('shows', 'ShowController');// cette ligne equivalent de tt les les routes




Auth::routes();
Route::get('/accueil', 'AccueilController@index')->name('accueil');
Route::get('/home', 'HomeController@index')->name('home');