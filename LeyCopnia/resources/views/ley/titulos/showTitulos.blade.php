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

  .desc{
    color:rgb(0, 0, 0) !important;
    margin:30px;
    

  
  }

</style>



@section('content')
@include('partials.sideMenu')

  <div class="contenedor">
    
    @foreach($ley as $l)
      <h1 class="titulo1">
        {{ $l->ley }}
      </h1> 
    @endforeach
    

    <hr>
    
      @foreach ($contenido as $campo)    


        {{-- titulos --}}
          <h2 class="titulo2">
            {{ $campo->titulo }}
          </h2>

          <h4>
            {{ $campo->titDes }}
          </h4>

          <div class="desc">    
            {{-- capitulos --}}
            <h5>{{ $campo->capitulo}}</h5>
            <h4>{{ $campo->capDes}}</h4>
          </div>        
                
          {{--  --}}
          <hr>
      @endforeach

      
    </div>

@stop
