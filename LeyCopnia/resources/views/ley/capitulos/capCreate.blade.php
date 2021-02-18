
@if (Auth::user()->rol === 'Editor')

    @extends('layouts.master')

    @section('title','capituloCREATE')

    {{-- @include('partials.sideMenu') --}}

    @section('content')

        <style>
            #cont-cap-create{
                max-width:100%;
                margin-left:25px;
                
            }
            #title-Cap{
                text-align: center;
            }

            .container{
                min-height: 60%;
                width:80%;
            }

            canvas{
                width:300px;
                height:300px

            }

        </style>




    <div class="container">

        {{-- agregar --}}

        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card-header" style="cursor:default">
                <i class="fas fa-plus-square" style="color:black"></i>
            Agregar
            </div>
            <div class="card-body">

            <!-- button crear ley -->

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-plus-square" style="color:rgb(255, 255, 255)"></i>

                Crear Ley
            </button>
            
                <!-- Modal ley-->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Crear Ley</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
            
                            {{-- body ley--}}    
                            <div class="content-cap">
                                <div id="cont-cap-create" class="">
                                    <form action="{{route('leyCreate.getCreate')}}" method="POST" enctype="multipart/form-data">

                                        {{-- token --}}

                                        @csrf

                                        {{--  --}}

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label h3">Nombre Ley</label>
                                            <input type="Text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Nombre Ley">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label h3">Url o Link de Imagen:</label>
                                            <input type="text" name="urlImagen" class="form-control" id="exampleFormControlInput1" placeholder="URL : http">                                    
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label h3">Descripción:</label>
                                            <textarea type="text-area" name="descrip" class="form-control" id="exampleFormControlInput1" placeholder="">
                                            </textarea>                                  
                                        </div>
                                        
                                        <div class=" d-flex align-items-start justify-content-around" style="height: 200px;">
                                            <button type="cancel" class="btn btn-warning btn-lg bt-5 mt-5" data-dismiss="modal">Cancelar</button>

                                            <button type="submit" class="btn btn-primary btn-lg  mt-5">Guardar</button>
                                        </div>
                        
                                    </form>
                                </div>
                            </div>
                            {{-- fin body ley--}}
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- fin crear ley-->
            {{--  --}}
            <!-- button crear title -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crear-ley">
                <i class="fas fa-plus-square" style="color:rgb(255, 255, 255)"></i>

                Crear Título
            </button>
    
            <!-- Modal title-->
            <div class="modal fade" id="crear-ley" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Crear Título</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            {{-- body title--}}    
                            <div class="content-cap">
                                <div id="cont-cap-create" class="">
                                    <form action=" {{route('titleCreate.tituloCreate') }}" method="POST">

                                        @csrf
                                
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label h3" >Nombre del Título:</label>
                                            <input type="text" name="titulo" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" >                            
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label h3" >Descripción:</label>
                                            <textarea type="text-area" name="titDes" class="form-control" id="exampleFormControlInput1" placeholder="">
                                            </textarea>                                  
                                        </div>


                                        <select class=" form-select " aria-label="Default select example" name="idLey">
                                            <option class="ada"   selected>Seleccione ley a la que pertenece:</option>
                                            @foreach ( $leyes as $ley )

                                                <option  value=" {{$ley->idLey}} "> {{ $ley->ley}}  </option>
                                                                                        
                                            @endforeach
                                            
                                        </select>


                                        <div class=" d-flex align-items-start justify-content-around" style="height: 200px;">
                                            <button type="cancel" class="btn btn-warning btn-lg bt-5 mt-5" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary btn-lg  mt-5">Guardar</button>
                                        </div>
                    
                                    </form>
                                </div>
                            </div>
                            {{--end body title  --}}
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- fin crear title-->

            <!-- button crear capitulo -->

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalcap">
                <i class="fas fa-plus-square" style="color:rgb(255, 255, 255)"></i>

                    Crear Capítulo
            </button>
            
                <!-- Modal capitulo-->

            <div class="modal fade" id="exampleModalcap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Crear Capítulo</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
            
                            {{-- body --}}    
                            <div class="content-cap">
                                <div id="cont-cap-create" class="">
                                    <form action="{{route('capituloCreate.capiCreate') }}" method="POST">

                                            @csrf

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label h3">Nombre Capítulo</label>
                                            <input type="Text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre Capitulo" name="name">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label h3">Descripción:</label>
                                            <textarea type="text-area" class="form-control" id="exampleFormControlInput1" placeholder="" name="descrip">
                                            </textarea>                                  
                                        </div>

                                        <select class=" form-select " aria-label="Default select example" name="idTitulo">
                                            <option class="ada" selected>Seleccione titulo al que pertenece:</option>

                                            @foreach ( $titles as $titulo )

                                                <option  value=" {{$titulo->idTitulo}} "> {{ $titulo->titulo}}  </option>
                                                                                        
                                            @endforeach                                    

                                        </select>

                                        
                                        <div class=" d-flex align-items-start justify-content-around" style="height: 200px;">
                                            <button type="cancel" class="btn btn-warning btn-lg bt-5 mt-5" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary btn-lg  mt-5">Guardar</button>
                                        </div>
                            
                                    </form>
                                </div>
                            </div>
                        {{-- fin body  --}}
                        </div>
                    
                    </div>
                </div>
            </div>
            <!-- fin crear cap-->

                {{--  --}}
            <!-- button crear Articulo-->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crear-art">
                <i class="fas fa-plus-square" style="color:rgb(255, 255, 255)"></i>

                Crear Artículo
            </button>
    
            <!-- Modal Articulo-->
            <div class="modal fade" id="crear-art" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Crear Artículo</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            <div class="modal-body">

                                {{-- body Artículo--}}    
                                <div class="content-cap">
                                    <div id="cont-cap-create" class="">
                                        <form action="{{route('articuloCreate.artiCreate') }} " method="POST" >

                                            @csrf
                            
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label h3">Nombre del Artículo:</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" name="name">                            
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label h3">Descripción:</label>
                                                <textarea type="text-area" class="form-control" id="exampleFormControlInput1" placeholder="" name="descrip">
                                                </textarea>                                  
                                            </div>


                                            <select class=" form-select " aria-label="Default select example" name="idCapitulo">
                                                <option class="ada" selected>Seleccione Capítulo al que pertenece:</option>
                                                @foreach ( $capitulos as $capitulo )

                                                    <option  value=" {{$capitulo->idCapitulo}} "> {{ $capitulo->capitulo}}  </option>
                                                                                    
                                            @endforeach
                                            </select>


                                            <div class=" d-flex align-items-start justify-content-around" style="height: 200px;">
                                                <button type="cancel" class="btn btn-warning btn-lg bt-5 mt-5" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary btn-lg  mt-5">Guardar</button>
                                            </div>
                
                                        </form>
                                    </div>
                                </div>
                                {{--end body Articulo  --}}
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- fin crear Articulo-->

                <!-- button crear Articulo-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crear-parag">
                <i class="fas fa-plus-square" style="color:rgb(255, 255, 255)"></i>

                    Crear Parágrafo
                </button>

            <!-- Modal Parágrafo-->
            <div class="modal fade" id="crear-parag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Crear Parágrafo</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            <div class="modal-body">

                                {{-- body Parágrafo--}}    
                                <div class="content-cap">
                                    <div id="cont-cap-create" class="">
                                        <form action="{{route('paragrafoCreate.paragCreate') }}" method="POST" >
                            
                                            @csrf

                                        

                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label h3">Descripción:</label>
                                                <textarea type="text-area" class="form-control" id="exampleFormControlInput1" placeholder="" name="parDes">
                                                </textarea>                                  
                                            </div>


                                            <select class=" form-select " aria-label="Default select example" name="idArticulo">
                                                <option class="ada" selected>Seleccione Artículo al que pertenece:</option>
                                                
                                                @foreach ( $articulos as $articulos )

                                                    <option  value=" {{$articulos->idArticulo}} "> {{ $articulos->articulo}}  </option>
                                                                                    
                                                @endforeach

                                            </select>


                                            <div class=" d-flex align-items-start justify-content-around" style="height: 200px;">
                                                <button type="cancel" class="btn btn-warning btn-lg bt-5 mt-5" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary btn-lg  mt-5">Guardar</button>
                                            </div>
                
                                        </form>
                                    </div>
                                </div>
                                {{--end body Parágrafo  --}}
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- fin crear Parágrafo-->











            </div>
        </div>


        {{-- pruebaas --}}

        {{--  --}}

        {{-- reportes --}}

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <hr>
            <br><h1>REPORTES DE VISITAS ANUALES A LA PÁGINA</h1><br>
            

            <canvas id="myChart" >

            </canvas><br>

        </div>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September','October','November','December'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: '#3B5998',
                    borderColor: '#3B5998',
                    data: [0, 10, 5, 2, 20, 30, 45,10,10,1,0,2]
                }]
            },

                // Configuration options go here
                options: {
                
                }
            });
        </script> 


    
        
        {{--  --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    </div>

        @if(session('save')=='ok')

        <script>

        Swal.fire(
            'Bien echo!',
            'Guardado con exito!',
            'success'
        )
        </script>

        @endif

    @stop
    
@endif
