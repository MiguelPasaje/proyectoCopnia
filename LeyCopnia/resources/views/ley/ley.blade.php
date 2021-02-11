@extends('layouts.master')

@section('title','Listado Leyes')

@include('partials.sideMenu')

@section('content')
<div class="container">
    @foreach ($capitulo as $capitulo) 
      <h1>{{ $capitulo['capitulo']}}</h1>
      @endforeach

</div>

@stop