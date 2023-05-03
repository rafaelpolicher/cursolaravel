<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Produto;
use SebastianBergmann\CodeCoverage\Driver\Selector;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    /*public function __construct(){
        $this->middleware('auth')->only('index');//except(['index', 'contato'])
    }middleware esta apenas na rota em web.php porem tambem é possivel fazer desta forma*/

    public function index(){
        $usuarios = User::all()->count();

        //query sql
        //grafico1 - usuarios
        //DB:: outro meio de criar queries
        $usersData = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total'),
        ])
        ->groupBy('ano')
        ->orderBy('ano', 'asc')
        ->get();

        //preparar array
        foreach($usersData as $user){
            $ano[] = $user->ano;
            $total[] = $user->total;
        };

        //formatar para chart.js
        $userLabel = "'Comparativo de cadastros de usuarios'";
        $userAno = implode(',' , $ano);
        $userTotal = implode("," , $total);


        //grafco 2 - categorias
        $catData = Categoria::all();
        //$catData = Categoria::with('produto')->get();com hasmany

        //preparar array
        foreach($catData as $cat){
            $catNome[] = "'" . $cat->nome . "'";
            $catTotal[] = Produto::where('id_categoria', $cat->id)->count();
            //$catTotal[] = $cat->produtos->count(); com hasmany
        }

        //formatar para chart.js
        $catLabel = implode(',' , $catNome);
        $catTotal = implode(',' , $catTotal);


        return view('/admin/dashboard', compact('usuarios', 'userLabel', 'userAno', 'userTotal', 'catLabel', 'catTotal'));
    }
}
