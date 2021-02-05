<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:rgb(255, 238, 0)">
            <img src="imagenes/libro.png"  width="50" height="50" alt="libro"> 
                INICIO 
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( /* Auth::check() */ true || Auth::check()  )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''}}">
                        <a class="navhov nav-link" href="{{url('/catalog')}}">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="navhov nav-link" href="{{url('/catalog/create')}}">
                            <i class="fas fa-envelope"></i> Contacto
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="navhov nav-link" href="{{url('/catalog/create')}}">
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
                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            {{-- <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button> --}}

                            <div class="container">
                                                              
                
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <!-- Left Side Of Navbar -->
                                    <ul class="navbar-nav mr-auto">
                
                                    </ul>
                
                                    <!-- Right Side Of Navbar -->
                                    <ul class="navbar-nav ml-auto">
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
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>
                
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                                        Cerrar sesión
                                                    </button>
                
                                                   
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                            
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
