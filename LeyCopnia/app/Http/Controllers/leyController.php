<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ley;

class leyController extends Controller
{
    public function getCreate(Request $request ){
        //return $request->name;
        $ley = new Ley();

        $ley->ley = $request->name;
        $ley->imagen = $request->urlImagen;
        $ley->leyDes = $request->descrip;
        
        $ley->save();
        return view('ley.capitulos.CapCreate');

    }

    public function getConsultaName(){
        $leyes = Ley::all(); 
        //return $ley;           
        return view('ley.capitulos.CapCreate', compact('leyes'));

    }

}
