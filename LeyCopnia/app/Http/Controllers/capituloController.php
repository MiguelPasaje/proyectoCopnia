<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class capituloController extends Controller
{
    public function getIndex() {

        return view('capitulos.capIndex');

    }
    public function getShow($id){

        return view();

    }
    public function getCreate(){

        return view();


    }

    public function getEdit($id){

        return view();


    }
    
    public function postCreate(Request $request){

        return view();

        
    }
    
    public function putEdit(Request $request, $id){

        return view();

                
    }
}
