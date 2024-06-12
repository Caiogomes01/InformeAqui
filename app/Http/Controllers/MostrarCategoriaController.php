<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MostrarCategoriaController extends Controller
{
    public function index()
    {

        return view('MostrarCategoria');
    }

}
