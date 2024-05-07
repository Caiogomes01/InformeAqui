<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Postagem;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categoria_count = Categoria::count();
        $postagem_count = Postagem::count();
        $categorias = Categoria::get();
        $postagem = Postagem::get();

        return view('home',['categoria_count' => $categoria_count,
                            'postagem_count'  => $postagem_count,
                            'categorias'      => $categorias,
                            'postagem'       => $postagem,

                            ] );
    }
}
