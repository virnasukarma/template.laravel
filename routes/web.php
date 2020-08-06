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

Route::get('/', function(){
	return view('adminlte/items.index');
});


Route::get('/data-tables', function(){
	return view('/adminlte/items.script');
});

/*Route::get('/items', function(){
	return view('/adminlte/items.index');
}
);

Route::get('/create', function(){
	return view('/adminlte/items.create');

});
