@extends('layouts.master')

@section('title','TITULOS')

<style>

  .contenedor{
    background-color:rgb(255, 255, 255);
    margin-left:15%;
    margin-right:15%;

  }

</style>



@section('content')
@include('partials.sideMenu')

  <div class="contenedor">
    Donde se muestra los titulos


  </div>

@stop
