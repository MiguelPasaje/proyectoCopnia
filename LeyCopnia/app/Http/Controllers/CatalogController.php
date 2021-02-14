<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;

class CatalogController extends Controller
{
    public function getIndex(){
        $leyes = DB::table('Leyes')->get();
        return view('Indice',['arrayLeyes'=>$leyes]);
    }
}
