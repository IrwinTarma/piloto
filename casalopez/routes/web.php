<?php
// Switch between the included languages
/*Route::get('lang/{lang}', 'LanguageController@swap');

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
	includeRouteFiles(__DIR__ . '/Frontend/');
});

Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
	
	includeRouteFiles(__DIR__ . '/Backend/');
});
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('provedor','ProvedorController');

Route::resource('cliente','ClienteController');