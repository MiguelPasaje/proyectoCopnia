@extends('layouts.master')

@section('title','TITULOS')

<style>

  .contenedor{
    background-color:rgb(255, 255, 255);
    margin-left:15%;
    margin-right:15%;

    border-right-style: hidden;
    border-width: 0.5px;
    border-color: rgb(0, 0, 0);
    border-top-style: hidden;
    border-bottom-style:hidden;
    
   
    border-left: 6px solid #8b939b;   

  }

  h1.titulo1{
    color:rgb(0, 0, 0) !important;    
    margin-left:50px;
    margin-top:50px;
  }

  h2.titulo2{
    margin-left:30px;
  }

  h3.titulo3{
    margin-left:30px;
  }

  h4.titulo4{
    margin-left:30px;
  }

  p.parrafo{
    margin-left:35px;
  }

  .desc{
    color:rgb(0, 0, 0) !important;
    margin:30px;
    

  
  }

</style>



@section('content')
{{-- @include('partials.sideMenu') --}}

    <div class="row justify-content-md-center">
        
        {{-- Titulos & Capitulos --}}
        <div class="col-4">
            {{-- TITULO DE LA LEY --}}
            <div class="row m-3">
                <h1 class="shadow-lg p-3 mb-5 bg-body rounded ">
                    {{ $ley->ley }}

                    <!-- edit Title -->
                    @if (Auth::user()->rol === 'Editor')
                        <p class="text-warning">
                            <a  class="text-danger" id="titulo" name="titulo" href="{{url('/leyEdit'.$ley->idLey)}}">
                                Editar Ley
                            </a>  
                        </p>
                    @endif
                    
                </h1>
                <hr>
            </div>
        
            {{-- Titulos & Capitulos --}}
            <div class="row m-3">
                @foreach ($titulos as $titulo)    
                {{-- titulos --}}
                        <a data-bs-toggle="collapse" href="{{url('#collapseCapitulos'. $titulo->idTitulo)}}" role="button" aria-expanded="false" aria-controls="collapseCapitulos">
                            <h3 class="ps-md-3 p  x-auto" >
                                {{ $titulo->titulo }}
                            </h3>
                        </a>
                        {{-- editar  Titulo--}}
                        @if (Auth::user()->rol === 'Editor')
                            <a class="text-danger" href="{{url('tituloEdit/'.$titulo->idTitulo.'/'.$ley->idLey)}}">Editar Titulo</a>
                        @endif
                    
                    <h6 class="ps-md-3">
                        {{ $titulo->titDes }}
                    </h6>
                    
                    {{-- capitulos --}}
                    <div class="collapse" id={{'collapseCapitulos'.$titulo->idTitulo}}>
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item  active link-danger" id="capitulo0" data-bs-toggle="list" href="#list-articulos" role="tab" aria-controls="articulos">Limpiar Seccion Articulos</a>
                            @foreach($capitulos as  $cap)
                                @if($cap->idTitulo === $titulo->idTitulo)
                                    <a class="list-group-item " id={{"capitulos".$cap->idCapitulo}} href="{{url('#Articulos'.$cap->idCapitulo)}}" data-bs-toggle="list" role="tab" aria-controls="articulos">
                                        <h6 class="ps-md-4">{{ $cap->capitulo}}</h6>
                                        <h6 class="ps-md-4">{{ $cap->capDes}}</h6>
                                    </a>
                                    {{-- editar capitulo --}}
                                    @if (Auth::user()->rol === 'Editor')
                                        <a class="text-danger"  href="{{url('capituloEdit/'.$cap->idCapitulo.'/'.$ley->idLey)}}">EDITAR</a>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>                    
                
                    <hr>{{--  --}}
                @endforeach
            </div>
        </div>

        {{-- Articulos --}}
        <div class="col-4">
            <div class="row m-3">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-articulos" role="tabpanel" aria-labelledby="capitulo0">
                        <div class="badge bg-warning text-dark position-relative" >
                            <h2>Seleccione un capitulo porfavor</h2>
                        </div>
                    </div>
                    @foreach ($capitulos as $cap)
                    <div class="tab-pane fade" id={{'Articulos'.$cap->idCapitulo}} role="tabpanel" aria-labelledby={{'capitulos'.$cap->idCapitulo}}>         
                        @foreach ($articulos as $art)

                                @if ($art->idCapitulo === $cap->idCapitulo)

                                    <p>
                                        {{-- PROBANDO EL MODAL --}}                                        
                                            <button type="button" class="btn btn-success col col-9 col-md-12" data-bs-toggle="modal" data-bs-target="{{url('#exampleModal'.$art->idArticulo)}}">
                                                {{$art->articulo}}
                                            </button>

                                            {{-- editar articulo --}}
                                            @if (Auth::user()->rol === 'Editor')
                                                <a class="text-danger"  href="{{url('articuloEdit/'.$art->idArticulo.'/'.$ley->idLey)}}">Editar Articulo</a>
                                            @endif



                                        <!-- Modal -->
                                        <div class="modal fade" id="{{'exampleModal'.$art->idArticulo}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{$art->articulo}}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        {{$art->artDes}}
                                                        <hr>
                                                        {{-- CONTENIDO DEL ARTICULO --}}
                                                        @foreach ($items as $item)
                                                            @if ($item->idArticulo === $art->idArticulo)
                                                                <p> 
                                                                    {{$item->iteDes}}       
                                                                    @foreach ($notas as $nota)
                                                                        @if ($nota->idItem === $item->idItem)
                                                                            <p class="text-danger">
                                                                                {{$nota->nota}}
                                                                            </p>
                                                                        @endif
                                                                    @endforeach
                                                                </p>                                            
                                                            @endif
                                                        @endforeach
                                                        <hr>
                                                        @foreach ($paragrafos as $par)
                                                            @if ($par->idArticulo === $art->idArticulo)
                                                                <p>
                                                                    {{$par->parDes}}
                                                                </p>
                                                            @endif
                                                        @endforeach

                                                        
                                                        @foreach ($notas as $nota)
                                                            @if ($nota->idArticulo === $art->idArticulo)
                                                                <p class="text-danger">
                                                                    {{$nota->nota}}
                                                                </p>    
                                                            @endif
                                                        @endforeach
                                                        

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- AQUI TERMINA EL MODAL --}}
                                        
                                    </p>
                                @endif
                            
                        @endforeach
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>

        {{-- pdf para descargar --}}

        {{-- <div class="col-4">
            <a href="{{url('/ley/download')}}">Descargar</a>
        </div> --}}
    </div>

    @section('scripts')
    @endsection
  

    @stop
