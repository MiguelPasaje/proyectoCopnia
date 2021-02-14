<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ley;
use App\Models\Titulo;
use App\Models\Capitulo;
use App\Models\Articulo;
use App\Models\Paragrafo;
use DB;



class tituloController extends Controller
{
    public function getLey($id) {
        $ley = Ley::findOrFail($id);
        $titulos = DB::table('Titulos')->where('idLey',$id)->get();
        $capitulos = DB::table('Capitulos')->get();
        $articulos = DB::table('Articulos')->get();
        $items = DB::table('Items')->get();
        $paragrafos = DB::table('Paragrafos')->get();
        $notas = DB::table('Notas')->get();
        
        return view('ley.titulos.showTitulos',compact('ley','titulos','capitulos','articulos','items','paragrafos','notas'));

    }

    protected function downloadFile($src){
        if (is_file($src)){
            $info = finfo_open(FILEINFO_MIME_TYPE);
            $content_type = finfo_file($info,$src);
            finfo_close($info);
            $file_name=basename($src).PHP_EOL;
            $size = filesize($src);
            header("Content-type: $content_type");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Transfer-Encoding: binary");
            header("Content-Length:$size");
            readfile($src);
            return true;
        }else{
            return false;
        }
    }

    public function download(){
        if(!$this->downloadFile(asset('files/Ley_842_03.pdf'))){
            return redirect()->back();
        }
    }

    public function getEdit($id) {
        $res = DB::table('Leyes')->where('idLey',$id)->get();
       return response(json_encode($res),200)->header('Content-type','text/plain');

    }

    



}
