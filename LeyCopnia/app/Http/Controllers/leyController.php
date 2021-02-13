<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ley;
use App\Models\Titulo;
use App\Models\Capitulo;
use App\Models\Articulo;



class leyController extends Controller
{
    public function getCreate(Request $request ){
        //return $request->name;
        $ley = new Ley();

        $ley->ley = $request->name;
        $ley->imagen = $request->urlImagen;
        $ley->leyDes = $request->descrip;
        
        $ley->save();
       // return view('indice');

    }

    public function getConsultaName(){
        $leyes = Ley::all(); 
        //return $ley;           
        $titles = Titulo::all(); 
        
        $capitulos = Capitulo::all();

        $articulos = Articulo::all();

        //return $articulos;   
        
        return view('ley.capitulos.CapCreate', compact('leyes','titles', 'capitulos','articulos'));

    }

    
    public function tituloCreate(Request $request){
        $titulos = new Titulo();

        //return $request->all();
        
        $titulos->titulo = $request->titulo;
        $titulos->titDes = $request->titDes;
        $titulos->idLey = $request->idLey;

        $titulos->save();        
        
        //return view('indice'); 


    }
    

}
