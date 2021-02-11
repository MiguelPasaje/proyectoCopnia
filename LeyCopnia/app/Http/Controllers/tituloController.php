<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Titulo;
use App\Models\Capitulo;
use App\Models\Ley;
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
        $capitulos = DB::table('Titulos')
            ->rightJoin('Capitulos','Titulos.idTitulo','=','Capitulos.idTitulo')
            ->where('idLey',$id)
            ->distinct()
            ->get();
        
        //return view('ley.titulos.showTitulos',compact('titulos','capitulos'));
        return view('ley.titulos.showTitulos',compact('ley','titulos','capitulos'));

    }

    public function getEdit($id) {

        //return view('ley/titulos/EditTitulos',array('id'=>$id));

    }
}
