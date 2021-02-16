<style>
    .btn-user:hover{
        background-color: #343A40;
        
    }
</style>


<nav class="navbar navbar-expand-lg navbar-dark  bg-dark" style="padding:31px; font-size:18px">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:rgb(255, 255, 255); margin-left:60px;">
            <img src="{{asset('imagenes/libro.png')}} "  width="50" height="50" alt="libro" style="position: absolute; margin-left:-60px; margin-top:-5px;">           
            MigFel.org
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="font-size:18px ;">
            <span class="navbar-toggler-icon" style="font-size:22px ;"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               

                <ul class="navbar-nav ml-auto" >
                <li  class="nav-item{{--  {{ Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''}} --}}">
                        <a class="navhov nav-link"  href="{{url('/')}}">
                            <i class="fas fa-home"  ></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item {{-- {{  Request::is('/catalog') ? 'active' : ''}} --}}">
                        <a class="navhov nav-link" {{-- href="{{url('/contacto')}}" --}} name="ancla-footer" href="#ancla-footer" >
                            <i class="fas fa-envelope"></i> Contacto
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="navhov nav-link" href="{{url('/about')}}">
                            <i class="exclamation exclamation fas fa-exclamation"></i> About                            
                        </a>
                    </li>

                    {{-- search navbar --}}
                    <form action="" class="form-inline position-relative my-2 my-lg-0 ">                                          
                        <input type="search" id="search" class="form-control mr-sm-2" placeholder="Buscar">                        
                        <span class="  ico-search ">
                            <i class="fas fa-search mr-2"></i>
                        </span>                        
                    </form>

                    {{-- mostrar user y logout --}}

                           <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav mr-auto" >
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
                                    
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown" >
                                        <a  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} 
                                        </a>
        
                    
                                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color:#26262B">                                  
                    
                                            <ul class="navbar-nav navbar-right ">
                                                <li class="nav-item" >
                                                    <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                                                        {{ csrf_field() }}    
                                                        <button type="submit" class="btn-user btn btn-link " style="display:inline;cursor:pointer; text-decoration:none;color:white; ">
                                                            <i class="fas fa-sign-out-alt"></i>
                                                            Cerrar sesión
                                                        </button>

                                                    </form>
                                                    
                                                    {{-- FORMA 1 --}}

                                                    @if (Auth::user()->rol === 'Editor')

                                                    <a  type="button" href="/leyCapCreate" class="btn-user btn btn-link " style="display:inline;cursor:pointer; text-decoration:none;color:white;">
                                                        <i class="lateral fas fa-cog"></i>
                                                        Configuración
                                                    </a>
                                                    @endif                                                
                                                </li>
                                                
                                            </ul>
                                        
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        
                    










                </ul>

               
            </div>




            {{--  --}}

                  












        @endif
    </div>
</nav>