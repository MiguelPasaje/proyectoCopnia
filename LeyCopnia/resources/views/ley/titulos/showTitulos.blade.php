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

  .parrafo{
    color:rgb(0, 0, 0) !important;
    margin:30px;
    

  
  }

</style>



@section('content')
@include('partials.sideMenu')

  <div class="contenedor">
    
    
     
      <h1 class="titulo1">
        LEY {{--  --}}
      </h1>

      <hr>

    {{--  @foreach ($arrayTitulos as $key => $titulos ) --}}

      <h2 class="titulo2">
        Título
      </h2>

<div class="parrafo">
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nobis eius vero repudiandae ea corrupti aperiam porro aliquid inventore, rem temporibus itaque, sunt laudantium iste fugit blanditiis iure expedita laborum.</p>
</div>      
                        {{-- <h5 class="card-title">{{$titulos['titulo']}}</h5>
                        <p class="card-text pb-2">{{$ley['desc']}}</p>
                        <a href="{{url('/leyConsulta/'.$key)}}" class="btn btn-primary mx-3">Consultar</a> --}}
            

      <hr>
      {{--  @endforeach --}}

      
    </div>

@stop
