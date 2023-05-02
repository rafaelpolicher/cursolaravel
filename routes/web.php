<?php

//use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\LoginController;

Route::resource('produtos', ProdutoController::class);
Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');
Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');
Route::post('/carrinho', [CarrinhoController::class, 'adicionaCarrinho'])->name('site.addcarrinho');
Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
/*
Route::get('/', function () {
    return redirect()->route('admin.clientes');
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


////////////////////////////////////////////////////////
Route::group([
    'prefix'=> 'admin',
    'as' => 'admin.'
], function(){
    
    Route::get('dashboard', function(){
        return "dashboard";
    })->name('dashboard');

    Route::get('users', function(){
        return "users";
    })->name('users');

    Route::get('clientes', function(){
        return "clientes";
    })->name('clientes');
});
*/
/////////////////////////////////////////////////////////////////////////////////////


/*
use App\Http\Controllers\ProdutoController;

Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');

Route::get('/produto{id?}', [ProdutoController::class, 'show'])->name('produto.show');
*/

//////////////////////////////////////////////////////////////////////////////////////////////