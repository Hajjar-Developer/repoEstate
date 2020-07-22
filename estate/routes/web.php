<?php

/*
admin routes
|

*/


Route::middleware(['web','admin'])->group(function () {
    
	#datatables
 Route::get('/adminpannel/users/data',['as'=>'adminpannel.users.data','uses'=>'UsersController@anyData']);
  Route::get('/adminpannel/es/data',['as'=>'adminpannel.es.data','uses'=>'EsController@anyData']);

	#main admin
	Route::get('/adminpannel','AdminController@index')->name('adminpannel');

	#users
	Route::resource('/adminpannel/users','UsersController');
	Route::post('/adminpannel/users/changePassword','UsersController@UpdatePassword');
	Route::get('/adminpannel/users/{id}/edit','UsersController@edit');
    Route::get('/adminpannel/users/{id}/delete','UsersController@destroy');
    
    
    #sitesetting
    Route::get('/adminpannel/sitesitting','SiteSettingController@index');
    Route::post('/adminpannel/sitesitting','SiteSettingController@store');
    Route::get('/adminpannel/sitting','SittingController@index');

    #estates
    Route::get('/adminpannel/es/{id}/edit','EsController@edit');
    Route::resource('/adminpannel/es','EsController');
    Route::get('/adminpannel/es/{id}/delete','EsController@destroy');

    });



/*
users routes
|

*/

Auth::routes();

/*

Route::get('/', function () {
    return view('welcome');
});
*/




Route::get('ShowAllBuilding','EsController@showAllEnable');
Route::get('/forRent','EsController@forRent');
Route::get('/forBuy','EsController@forBuy');
Route::get('/forMortgage','EsController@forMortgage');
Route::get('/type/{type}','EsController@showByType');
Route::post('search','EsController@search');
Route::get('search','EsController@search');
Route::get('SingelBuilding/{id}','EsController@showSingle');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'UsersController@welcometoUser');

