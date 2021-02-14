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
        $items = DB::table('Items')->get();
        $paragrafos = DB::table('Paragrafos')->get();
        $notas = DB::table('Notas')->get();
        
        return view('ley.titulos.showTitulos',compact('ley','titulos','capitulos','articulos','items','paragrafos','notas'));

    }

    public function getArticulos($id){

    }

    public function getEdit($id) {

        //return view('ley/titulos/EditTitulos',array('id'=>$id));

    }

    



}
