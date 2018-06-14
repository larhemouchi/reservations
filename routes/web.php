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
})->name('index');

//Route::post('/finnformati', 'HomeController@formati');

Auth::routes();
Route::get('/accueil', 'AccueilController@index')->name('accueil');
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['admin']], function () {

Route::get('/test-api/', 'ShowController@api');

Route::get('/dashboard	', 'DashboardController@index')->name('dashboard.index');


Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/shows-conf', 'ShowController@conf')->name('shows.conf');
//Route::post('/shows-post', 'ShowController@post')->name('shows.post');
//Route::delete('/shows-delete', 'ShowController@delete')->name('shows.delete');
Route::post('/shows-post/{id}', 'ShowController@post')->name('shows.post');
Route::delete('/shows-delete/{id}', 'ShowController@delete')->name('shows.delete');

Route::get('/shows_dashboard', 'ShowController@fetch')->name('shows.list_repre_conf');
Route::get('/locations-conf', 'LocationController@conf')->name('locations.conf');
Route::post('/locations-post/{id}', 'LocationController@post')->name('locations.post');
Route::delete('/locations-delete/{id}', 'LocationController@delete')->name('locations.delete');
Route::get('/representations-conf/{show}', 'RepresentationController@conf')->name('representations.conf');

/**************************/

Route::get('representations/create', 'RepresentationController@create');
Route::post('representations', 'RepresentationController@store');
Route::get('representations/{id}/edit', 'RepresentationController@edit');
Route::put('representations/{id}', 'RepresentationController@update');
Route::delete('representations/{id}', 'RepresentationController@destroy');

/*********************************************/
Route::get('artists/create', 'ArtistController@create');
Route::post('artists', 'ArtistController@store');
Route::get('artists/{id}/edit', 'ArtistController@edit');
Route::put('artists/{id}', 'ArtistController@update');
Route::delete('artists/{id}', 'ArtistController@destroy');

/*******************************************/

Route::get('types/create', 'TypeController@create');
Route::post('types', 'TypeController@store');
Route::get('types/{id}/edit', 'TypeController@edit');
Route::put('types/{id}', 'TypeController@update');
Route::delete('types/{id}', 'TypeController@destroy');


/*******************************************/

Route::get('artiste_type_show/create', 'Artiste_type_showController@create');
Route::post('artiste_type_show', 'Artiste_type_showController@store');
Route::get('artiste_type_show/{id}/edit', 'Artiste_type_showController@edit');
Route::put('artiste_type_show/{id}', 'Artiste_type_showController@update');
Route::delete('artiste_type_show/{id}', 'Artiste_type_showController@destroy');

/*******************************************/
Route::get('artiste_type/create', 'Artiste_typeController@create');
Route::post('artiste_type', 'Artiste_typeController@store');
Route::get('artiste_type/{id}/edit', 'Artiste_typeController@edit');
Route::put('artiste_type/{id}', 'Artiste_typeController@update');
Route::delete('artiste_type/{id}', 'Artiste_typeController@destroy');

/*******************************/
Route::get('localities/create', 'LocalitieController@create');
Route::post('localities', 'LocalitieController@store');
Route::get('localities/{id}/edit', 'LocalitieController@edit');
Route::put('localities/{id}', 'LocalitieController@update');
Route::delete('localities/{id}', 'LocalitieController@destroy');

/**********************************************/
Route::get('locations/create', 'LocationController@create');
Route::post('locations', 'LocationController@store');
Route::get('locations/{id}/edit', 'LocationController@edit');
Route::put('locations/{id}', 'LocationController@update');
Route::delete('locations/{id}', 'LocationController@destroy');
/************************************************/

Route::get('representation_user/create', 'Representation_userController@create');
Route::get('representation_user/reserver', 'Representation_userController@reserver');
Route::post('representation_user', 'Representation_userController@store');
Route::get('representation_user/{id}/edit', 'Representation_userController@edit');
Route::put('representation_user/{id}', 'Representation_userController@update');
Route::delete('representation_user/{id}', 'Representation_userController@destroy');
/******************************************/
Route::get('roles', 'RoleController@index');
Route::get('roles/create', 'RoleController@create');
Route::post('roles', 'RoleController@store');
Route::get('roles/{id}/edit', 'RoleController@edit');
Route::put('roles/{id}', 'RoleController@update');
Route::delete('roles/{id}', 'RoleController@destroy');

/*****************************************/

Route::get('shows/create', 'ShowController@create');
Route::post('shows', 'ShowController@store');
Route::get('shows/{id}/edit', 'ShowController@edit');
Route::put('shows/{id}', 'ShowController@update');
Route::delete('shows/{id}', 'ShowController@destroy');

/***************************************/
Route::get('users', 'UserController@index');
Route::get('users/create', 'UserController@create');
Route::post('users', 'UserController@store');
Route::get('users/{id}/edit', 'UserController@edit');
Route::put('users/{id}', 'UserController@update');
Route::delete('users/{id}', 'UserController@destroy');

});


Route::group(['middleware' => ['user']], function () {
Route::get('users/{id}/edit', 'UserController@edit');
Route::put('users/{id}', 'UserController@update');


/*********************************/
Route::get('representation_user/create', 'Representation_userController@create');
//Route::get('representation_user/{kind}/{representation}/reserver', 'Representation_userController@reserver')->name('reserver');
Route::post('representation_user/{var}/reserver', 'Representation_userController@store');
Route::get('representation_user/{id}/edit', 'Representation_userController@edit');
Route::put('representation_user/{id}', 'Representation_userController@update');
Route::delete('representation_user/{id}', 'Representation_userController@destroy');

});

// les routes des users



//Route::resource('users', 'UserController');// cette ligne equivalent de tt les les routes

// les routes de artists
Route::get('artists', 'ArtistController@index');


// les routes de types
Route::get('types', 'TypeController@index');


//les routes de artiste_type_show
Route::get('artiste_type_show', 'Artiste_type_showController@index');



//les routes de artiste_type
Route::get('artiste_type', 'Artiste_typeController@index');


//les routes de localities
Route::get('localities', 'LocalitieController@index');

//Route::resource('localities', 'LocalityController');

//les routes de localions
Route::get('locations', 'LocationController@index');



//les routes de representation_user

Route::get('representation_user', 'Representation_userController@index');

//Route::resource('representation_user', 'Representation_userController');// cette ligne equivalent de tt les les routes


//les routes de representats
Route::get('representations', 'RepresentationController@index');

Route::get('representations/{id}', 'RepresentationController@afficher')->name('representations');


//les routes de roles


//les routes de show
Route::get('shows', 'ShowController@index');

Route::get('shows/{title}', 'ShowController@afficher')->name('shows');
//Route::resource('shows', 'ShowController');// cette ligne equivalent de tt les les routes

Route::resource('listePieces', 'ListePiecesController');
Route::get('/all.json',[
]);


