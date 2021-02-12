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

    <div class="row">
        
        <div class="col-4">
            {{-- TITULO DE LA LEY --}}
            <div class="row m-3">
                <h1 class="shadow-lg p-3 mb-5 bg-body rounded ">
                    {{ $ley->ley }}
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
                                @endif
                            @endforeach
                        </div>
                    </div>                    
                
                    <hr>{{--  --}}
                @endforeach
            </div>
        </div>

        {{-- Articulos --}}
        <div class="col-5">
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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="{{url('#exampleModal'.$art->idArticulo)}}">
                                        {{$art->articulo}}
                                    </button>
                                      
                                    <!-- Modal -->
                                    <div class="modal fade" id="{{'exampleModal'.$art->idArticulo}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">El Titulo</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    {{$art->articulo}}
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
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

    </div>

  

@stop
