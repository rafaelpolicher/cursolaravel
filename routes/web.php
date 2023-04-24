<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/empresa', function(){
//    return view('site/empresa');
//});
Route::view('/empresa', 'site/empresa');

Route::any('/any', function(){
    return "Permite todo tipo de acesso HTTP( put, get, delete, post)";
});

Route::match(['get', 'post'], '/match', function(){
    return "Permite apenas acessos definidos";
});

Route::get('/produto/{id}/{cat?}', function($id, $cat = ""){
    return "o id do produto é: " . $id . "<br>". "a categora é: " . $cat;
});

//Route::get('/sobre', function(){
//    return redirect('/empresa');
//});
Route::redirect('/sobre', 'empresa');

Route::get('/news', function(){
    return view('site/news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->route('noticias');
});
