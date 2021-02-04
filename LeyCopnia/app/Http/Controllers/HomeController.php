<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return view('welcome');
    }

    public function getLeyes() {

        return view('Leyes ');

    }
    
    public function getLey() {

        return view('ley.ley');

    }
    
}
