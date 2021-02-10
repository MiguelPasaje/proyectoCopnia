<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\titulo;

class tituloController extends Controller
{
    public function getLey($id) {

        //return view('ley/titulos/showTitulos',array('id'=>$id));
        $titulo = titulo::all();
        return view('ley.titulos.showTitulos',compact('titulo'));

    }

    public function getEdit($id) {

        //return view('ley/titulos/EditTitulos',array('id'=>$id));

    }
}
