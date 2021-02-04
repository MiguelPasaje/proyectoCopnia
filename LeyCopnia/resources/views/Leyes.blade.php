@extends('layouts.master')

@section('title','Listado Leyes')

@include('partials.sideMenu')

@section('content')
    <div class="container ">
        <div class="row " >
            <div class="card mb-3 border border-success" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="imagenes/libro.png" class="mt-4 mx-2 img-thumbnail border border-warning" height="240px" width="480px" alt="libro">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Ley 842 de 2003</h5>
                            <p class="card-text pb-2">Por la cual se modifica la reglamentación del ejercicio de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, se adopta el Código de Ética Profesional y se dictan otras disposiciones</p>
                            <a href="{{url('/leyConsulta')}}" class="btn btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
