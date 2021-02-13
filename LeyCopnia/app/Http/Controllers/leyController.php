<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ley;
use App\Models\Titulo;
use App\Models\Capitulo;
use App\Models\Articulo;
use App\Models\Paragrafo;




class leyController extends Controller
{
    public function getCreate(Request $request ){
        //return $request->name;
        $ley = new Ley();

        $ley->ley = $request->name;
        $ley->imagen = $request->urlImagen;
        $ley->leyDes = $request->descrip;
        
        $ley->save();
       
        return back()->withInput()->with('save','ok');

    }

    public function capiCreate(Request $request ){
        //return $request->name;
        $capitulos = new Capitulo();

        $capitulos->capitulo = $request->name;
        $capitulos->capDes = $request->descrip;
        $capitulos->idTitulo = $request->idTitulo;
        
        $capitulos->save();
       
        return back()->withInput()->with('save','ok');

    }

    public function artiCreate(Request $request ){
        //return $request->name;

        //return $request->all();
        $articulos = new Articulo();

        $articulos->articulo = $request->name;
        $articulos->artDes = $request->descrip;
        $articulos->idCapitulo  = $request->idCapitulo;
        
        $articulos->save();
       
        return back()->withInput()->with('save','ok');

    }

    public function paragCreate(Request $request ){
        //return $request->name;

        //return $request->all();
        $paragrafos = new Paragrafo();

        //$paragrafos->articulo = $request->name;
        $paragrafos->parDes = $request->parDes;
        $paragrafos->idArticulo = $request->idArticulo ;
        
        $paragrafos->save();
       
        return back()->withInput()->with('save','ok');

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
        
        return back()->withInput()->with('save','ok');


    }
    

}
