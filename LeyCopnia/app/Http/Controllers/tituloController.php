<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tituloController extends Controller
{
    public function getLey($id) {

        return view('ley/titulos/showTitulos',array('id'=>$id));

    }

    public function getEdit($id) {

        return view('ley/titulos/EditTitulos',array('id'=>$id));

    }
}
