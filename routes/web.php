<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;


Route::get('/',function(){
   return 'International Shopp';
});
Route::get('/main','MainController@index')->name('main.index');
Route::get('contact','ContactController@index')->name('contact.index');
Route::get('about','AboutController@index')->name('about.index');


Route::get('/clients','ClientsController@index')->name('clients.index');
Route::get('clients/create','ClientsController@create')->name('clients.create');
Route::post('/clients','ClientsController@store')->name('clients.store');
Route::get('/clients/{clients}','ClientsController@show')->name('clients.show');
Route::get('/clients/{clients}/edit','ClientsController@edit')->name('clients.edit');
Route::patch('/clients/{clients}','ClientsController@update')->name('clients.update');
Route::delete('/clients/{clients}','ClientsController@destroy')->name('clients.delete');










