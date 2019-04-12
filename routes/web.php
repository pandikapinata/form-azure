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


Route::get('suppliers', 'SupplierController@index')->name('supplier.index');
Route::get('supplier/create', 'SupplierController@create')->name('supplier.create');
Route::post('supplier/store', 'SupplierController@store')->name('supplier.store');
Route::get('supplier/edit/{id}', 'SupplierController@edit')->name('supplier.edit');
Route::post('supplier/update/{id}', 'SupplierController@update')->name('supplier.update');
Route::post('supplier/delete/{id}', 'SupplierController@destroy')->name('supplier.delete');