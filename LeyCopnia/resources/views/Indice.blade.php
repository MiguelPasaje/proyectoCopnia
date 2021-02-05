@extends('layouts.master')

@section('title','Listado Leyes')


@section('content')

    <div class="row" >

        @foreach( $arrayLeyes as $key => $ley)
    
            <div class="col-sm-4">
                <div class="card my-2 border border-success" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-5 my-2">
                            <a href="{{url('/leyConsulta').$key}}">
                            <img src="{{$ley['imagen']}}" class="m-4 img-thumbnail border border-warning"  style="height:300px"  alt="libro">
                            </a>
                            
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">{{$ley['titulo']}}</h5>
                                <p class="card-text pb-2">{{$ley['desc']}}</p>
                                <a href="{{url('/leyConsulta').$key}}" class="btn btn-primary mx-3">Consultar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

@stop
