<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\titulo;

use App\Models\Capitulo;

class tituloController extends Controller
{
    public function getLey($id) {

        //return view('ley/titulos/showTitulos',array('id'=>$id));
        $titulo = titulo::all();
        $capitulo = Capitulo::all();
        return view('ley.titulos.showTitulos',compact('titulo','capitulo'));

    }

    public function getEdit($id) {

        //return view('ley/titulos/EditTitulos',array('id'=>$id));

    }
}
