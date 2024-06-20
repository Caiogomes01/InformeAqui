<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curtida;

class CurtidaController extends Controller
{
    public function curtida($id){

        $curtida_exist = Curtida::where('postagem_id',$id)->where('user_id', auth()->user()->id)->exists();

        if(!$curtida_exist){
            $curtida = new Curtida;
            $curtida->postagem_id = $id;
            $curtida->user_id = auth()->user()->id;
            $curtida->save();   
        }     

        return back()->withInput();

    }
    
}
