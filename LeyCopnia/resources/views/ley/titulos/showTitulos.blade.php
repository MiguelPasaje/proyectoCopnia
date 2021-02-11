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
@include('partials.sideMenu')

  <div class="contenedor">

    <h1 class="titulo1">
      {{ $ley->ley }}
    </h1> 
    

    <hr>
    
      @foreach ($titulos as $titulo)    


        {{---------titulos desplegadores-------------}}
            <p>
              <!-- <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> -->
              <a data-bs-toggle="collapse" href="{{url('#collapseCapitulos'. $titulo->idTitulo)}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                <h2 class="titulo2">
                  {{ $titulo->titulo }}
                </h2>
              </a>
              <h4 class="titulo4">
                {{ $titulo->titDes }}
              </h4>
            </p>
          
        {{---------capitulos desplegables------------}}
          <div class="collapse desc" id={{'collapseCapitulos'.$titulo->idTitulo}}>    
            @foreach($capitulos as $cap)
              @if($cap->idTitulo === $titulo->idTitulo)
                <h4 class="titulo4">{{ $cap->capitulo}}</h4>
                <p class="parrafo">{{ $cap->capDes}}</p>
              @endif
            @endforeach

          </div>        
                
          {{--  --}}
          <hr>
      @endforeach

      
    </div>

@stop
