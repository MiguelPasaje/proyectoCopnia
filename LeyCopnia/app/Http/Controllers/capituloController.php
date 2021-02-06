<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class capituloController extends Controller
{
    public function getIndex() {
        return view('capitulos.capIndex');
    }

    public function getCreate(){
        return view('capitulos.capCreate');
    }

    public function getShow($id){
        return view();
    }
    
    public function getEdit($id_cap){
        return view('capitulos.capEdit');
    }
    
    public function postCreate(Request $request){
        return view();
    }
    
    public function putEdit(Request $request, $id){
        return view();         
    }
}
