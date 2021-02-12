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

  h3.titulo3{
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
{{-- @include('partials.sideMenu') --}}

  <div class="row">
    
    <div class="col-4">
      {{-- row en la que se muestra el titulo de la ley --}}
      <div class="row m-3">
        <h1 class="shadow-lg p-3 mb-5 bg-body rounded ">
          {{ $ley->ley }}
        </h1> 
        <hr><hr>
      </div>
      
      {{-- row para mostrar los titulos y capitulos --}}
      <div class="row m-3">
        @foreach ($titulos as $titulo)    
          {{-- titulos --}}
          <p>
            <a data-bs-toggle="collapse" href="{{url('#collapseCapitulos'. $titulo->idTitulo)}}" role="button" aria-expanded="false" aria-controls="collapseCapitulos">
              <h3 class="ps-md-3 p  x-auto" >
                {{ $titulo->titulo }}
              </h3>
            </a>
            
            <h6 class="ps-md-3">
              {{ $titulo->titDes }}
            </h6>
          </p>
            
          {{-- capitulos --}}
          <div class="collapse" id={{'collapseCapitulos'.$titulo->idTitulo}}>    
            @foreach($consucap as  $con)
              @if($con->idTitulo === $titulo->idTitulo)

                <a data-bs-toggle="collapse" href="{{url('#collapseArticulos'.$con->idCapitulo)}}" role="button" aria-expanded="false" aria-controls="collapseArticulos">
                  <h6 class="ps-md-4">{{ $con->capitulo}}</h6>
                </a>
                <h6 class="ps-md-4">{{ $con->capDes}}</h6>
                <hr>
              @endif
            @endforeach
          </div>        
                    
          {{--  --}}
          <hr>
        @endforeach

      </div>
  
    </div>

    {{-- articulos --}}
    <div class="col-5">
      <div class="row m-3">
        
        @foreach ($articulos as $articulo)
        <div class="collapse" id={{'collapseArticulos'.$articulo->idCapitulo}}>
          @foreach ($consuart as $con)
            @if ($con->idArticulo === $articulo->idArticulo)
              <p>{{$articulo->articulo}}</p>
              <hr>
            @endif
          @endforeach    
        </div>
      @endforeach



      </div>
    </div>

  </div>

  

@stop
