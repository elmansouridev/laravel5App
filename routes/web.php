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
use App\User;

Route::get('/', function () {
    return view('accueil');
});
Route::get('home', function () {
    return view('new.home');
});






/*
Route::get('inscriptions', 'InscController@index');
Route::get('inscriptions/create', 'InscController@create');
Route::post('inscriptions', 'InscController@store');
Route::get('inscriptions/{id}/edit', 'InscController@edit');
Route::put('inscriptions/{id}', 'InscController@update');
Route::get('inscriptions/{id}', 'InscController@show');
Route::delete('inscriptions/{id}', 'InscController@destroy');*/

Route::resource('inscriptions','InscController');

Route::get('inscriptions/{id}/invoice', 'InscController@voice');

//Route::get('questionaire', 'QuController@test');

Route::post('questionaire', 'QuController@store');

Route::get('admin', function(){
	if (Gate::allows('admin_only',Auth::user())){
	$insc=User::all();
            return view('new.contact',['insc'=>$insc]);
}
});
Route::put('admin/{id}', 'QuController@update');

Route::get('reponse/{id}', 'QuController@show');

Route::get('admin/{id}/edit', 'QuController@make');

Route::get('admin/{id}/editer', 'QuController@enlever');

Route::put('enlever/{id}', 'QuController@lever');





Route::get('/getInscriptions','InscController@getInscriptions');




//Route::get('home', 'InscController@create');
//Route::post('home', 'InscController@store');

/*



//Route::resource('questions','InscController');*/


Auth::routes();

//Route::get('/home', 'InscController@index');