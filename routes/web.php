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
    return view('uploadpage');
});

Route::post('/', function(){
    return Plupload::receive('file', function($file){
        $file->move(public_path().'/upload/', $file->getClientOriginalName());
        return 'ready';
    });
});