<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{

    public function __invoke(){
        $leyes = DB::table('leyes')->get();
        return view('Indice',['arrayLeyes'=>$leyes]);
    }
}
