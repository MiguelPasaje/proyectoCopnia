<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    private $arrayLeyes=array(
        array(
            'titulo' => '842 de 2003',
            'imagen' => 'imagenes/842_2003.png',
			'desc' => 'Por la cual se modifica la reglamentación del ejercicio de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, se adopta el Código de Ética Profesional y se dictan otras disposiciones.'
		),
		array(
            'titulo' => '843 de 2003',
            'imagen' => 'https://dialogocim.files.wordpress.com/2015/06/ley.jpg?w=584',
			'desc' => 'Por la cual se modifica la reglamentación del ejercicio de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, se adopta el Código de Ética Profesional y se dictan otras disposiciones.'
		),
		array(
            'titulo' => '844 de 2003',
            'imagen' => 'https://dialogocim.files.wordpress.com/2015/06/ley.jpg?w=584',
			'desc' => 'Por la cual se modifica la reglamentación del ejercicio de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, se adopta el Código de Ética Profesional y se dictan otras disposiciones.'
		),
		array(
            'titulo' => '845 de 2003',
            'imagen' => 'https://dialogocim.files.wordpress.com/2015/06/ley.jpg?w=584',
			'desc' => 'Por la cual se modifica la reglamentación del ejercicio de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, se adopta el Código de Ética Profesional y se dictan otras disposiciones.'
		)
    );

    public function __invoke(){

        return view('Indice',['arrayLeyes'=>$this->arrayLeyes]);
    }
}
