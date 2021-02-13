<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ley;
use App\Models\Titulo;
use App\Models\Capitulo;
use App\Models\Articulo;
use App\Models\Paragrafo;
use DB;



class tituloController extends Controller
{
    public function getLey($id) {

        //return view('ley/titulos/showTitulos',array('id'=>$id));
        //$titulo = Titulo::all();
        //$capitulos = Capitulo::all();
        //$titulos = DB::table('Titulos')->where('idLey','100')->get();

        $ley = Ley::findOrFail($id);
        $titulos = DB::table('Titulos')->where('idLey',$id)->get();
        $capitulos = DB::table('Capitulos')->get();
        $articulos = DB::table('Articulos')->get();
        
        $consucap = DB::table('Titulos')
             ->rightJoin('Capitulos','Titulos.idTitulo','=','Capitulos.idTitulo')
            //  ->rightJoin('Articulos','Capitulos.idCapitulo','=','Articulos.idCapitulo')
             ->where('idLey',$id)
             ->distinct()
             ->get();

        $consuart = DB::table('Titulos')
            ->rightJoin('Capitulos','Titulos.idTitulo','=','Capitulos.idTitulo')
            ->rightJoin('Articulos','Capitulos.idCapitulo','=','Articulos.idCapitulo')
            ->where('idLey',$id)
            ->distinct()
            ->get();
        
        return view('ley.titulos.showTitulos',compact('consucap','consuart','ley','titulos','capitulos','articulos'));

    }

    public function getArticulos($id){

    }

    public function getEdit($id) {

        //return view('ley/titulos/EditTitulos',array('id'=>$id));

    }

    



}
