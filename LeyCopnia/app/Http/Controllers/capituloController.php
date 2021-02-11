<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capitulo;

class capituloController extends Controller
{
    public function getIndex() {
        $capitulo = Capitulo::all();
        return view('ley.ley',compact('capitulo'));
        //return view('capitulos.capIndex');
    }

    public function getCreate(){
        return view('ley.capitulos.capCreate');
    }

    public function getShow($id){
        return view();
    }
    
    public function getEdit($id_cap){
        return view('ley.capitulos.capEdit');
    }
    
    public function postCreate(Request $request){
        return view();
    }
    
    public function putEdit(Request $request, $id){
        return view();         
    }
}
