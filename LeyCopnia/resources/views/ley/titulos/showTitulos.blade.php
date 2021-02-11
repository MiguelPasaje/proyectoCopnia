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

    <h1 class="titulo1">
      ley {{-- {{ $titulo['idley'] }} --}}
    </h1> 

    <hr>

    {{-- @foreach ($capitulo as $capitulo) 
      <h1>{{ $capitulo['capitulo']}}</h1>
    @endforeach  --}}
    
    
    @foreach ($titulo as $titulo)    


    {{-- titulos --}}
      <h2 class="titulo2">
        {{ $titulo['titulo'] }}
      </h2>

      <div class="desc">
        <h4>
          {{ $titulo['descripcion'] }}          
        </h4>
      </div>
      
      {{-- capitulos --}}

      @foreach ($capitulo as $cap) 
      <h1>{{ $cap['capitulo']}}</h1>
      @endforeach  
          
            
      {{--  --}}
      <hr>
    @endforeach

      
    </div>

@stop
