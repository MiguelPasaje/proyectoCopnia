<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;

class CatalogController extends Controller
{
    public function getIndex(){
        $leyes = DB::table('leyes')->get();
        return view('Indice',['arrayLeyes'=>$leyes]);
    }
}
