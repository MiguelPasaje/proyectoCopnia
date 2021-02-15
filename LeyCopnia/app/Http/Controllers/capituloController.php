<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capitulo;

class capituloController extends Controller
{
    // public function getIndex() {
    //     $capitulo = Capitulo::all();
    //     return view('ley.ley',compact('capitulo'));
    //     //return view('capitulos.capIndex');
    // }

    // public function getCreate(){
    //     return view('ley.capitulos.capCreate');
    // }

    // public function getShow($id){
    //     return view();
    // }
    
    public function getEdit($id, $idl){
        $capitulo = Capitulo::findOrFail($id);
        return view ('ley.capitulos.capEdit',compact('capitulo'));
    }
    
    // public function postCreate(Request $request){
    //     return view();
    // }
    
    public function putEdit(Request $request, $id,$idl){
        $capitulo = Capitulo::findOrFail($id);
        $capitulo -> capitulo = $request-> capitulo;
        $capitulo -> capDes = $request -> des;
        $capitulo -> save();
        return redirect('/ley/titulos/'.$idl);         
    }
}
