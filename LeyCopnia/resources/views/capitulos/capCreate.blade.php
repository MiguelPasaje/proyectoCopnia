@extends('layouts.master')

@section('title','capituloCREATE')

@include('partials.sideMenu')

@section('content')

    <style>
        #cont-cap-create{
            max-width:100%;
            margin-left:25px;
            
        }
        #title-Cap{
            text-align: center;
        }


    </style>

    <h1 class=" h1" id="title-Cap"> Crear Capítulo</h1>
<div class="content-cap">
    <div id="cont-cap-create" class="">
        <form action="" >
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label h3">Id Capítulo</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="ID">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label h3">Nombre del capítulo</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
                
            </div>
            <select class=" form-select " aria-label="Default select example">
                <option class="ada" selected>Seleccione el Título</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <div class=" d-flex align-items-start justify-content-around" style="height: 200px;">
                <button type="cancel" class="btn btn-warning btn-lg bt-5 mt-5">Cancelar</button>
                <button type="button" class="btn btn-primary btn-lg  mt-5">Guardar</button>
            </div>

            {{-- zzzzzzzzzz --}}

            

              


            
        </form>
    </div>
</div>



@stop
