<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
//use resources\views\site\news.blade.php;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return 'index';

        //mapeia automaticamente uma tabela do db para uma classe, nesse caso o model Produto representa a tabela produtos
        //return dd($produtos)

        $produtos = Produto::paginate(10);
        //$produtos = Produto::all();
        return view('admin.produtos', compact('produtos'));

        //return view('news', );

        //para passar variaveis para outras views {ver empresa.blade.php}
        //return view('site/home', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->route('admin.produtos');
    }
}
