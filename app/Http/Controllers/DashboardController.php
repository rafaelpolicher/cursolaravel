<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /*public function __construct(){
        $this->middleware('auth')->only('index');//except(['index', 'contato'])
    }middleware esta apenas na rota em web.php porem tambem é possivel fazer desta forma*/

    public function index(){
        return view('/admin/dashboard');
    }
}
