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
//    return view('welcome');
    return redirect ('dogs');
});

Route::get('cats/{id}', function($id){
    return sprintf ( 'Cat #%s', $id);
})-> where('id', '[0-9]+');

Route::get('dogs', function (){
    return view ('about')->with ('number_of_cats', 90000);
});