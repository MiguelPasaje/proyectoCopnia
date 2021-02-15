<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class articuloController extends Controller
{
    public function getEdit($id, $idl){
        $articulo = Articulo::findOrFail($id);
        return view ('ley.articulos.artEdit',compact('articulo'));
    }
    
    
    public function putEdit(Request $request, $id,$idl){
        $articulo = Articulo::findOrFail($id);
        $articulo -> articulo = $request-> articulo;
        $articulo -> artDes = $request -> des;
        $articulo -> save();
        return redirect('/ley/titulos/'.$idl);         
    }
}
