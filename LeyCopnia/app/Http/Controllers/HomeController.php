<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return view('welcome1');
    }

    public function getLey() {

        return view('welcome');

    } 
}
