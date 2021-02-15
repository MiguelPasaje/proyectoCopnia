@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar Capitulo
                </div>
                <div class="card-body" style="padding:30px">

                    {{-- TODO: Abrir el formulario e indicar el método POST --}}
                    <form method="POST">
                    {{method_field('PUT')}}
                    
                    {{-- TODO: Protección contra CSRF --}}
                    {{ csrf_field() }}
                    
                    {{-- @foreach( $ley as $le ) --}}
                    <div class="form-group">
                    <label for="title">capitulo</label>
                    <input type="text" name="capitulo" id="capitulo" class="form-control" value="{{$capitulo->capitulo}}">
                    </div>

                    <div class="form-group">
                    <label for="title">Descripcion</label>
                    <textarea name="des" id="des" class="form-control" rows="3">{{$capitulo->capDes}}</textarea>
                    
                    </div>
                    {{-- @endforeach --}}
                    <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Modificar Capitulo
                    </button>
                    </div>

                    {{-- TODO: Cerrar formulario --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
