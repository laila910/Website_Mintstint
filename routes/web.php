<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/home',function(){
return view('home');
});
Route::get('/zoom',function(){
return view('zoom');
});
Route::get('/crm',function(){
return view('crm');
});
Route::get('/voiceover',function(){
return view('voiceover');
});
Route::get('/design',function(){
return view('design');
});
