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
            {{-- TITULO DE LA LEY --}}
            <div class="row m-3">
                <h1 class="shadow-lg p-3 mb-5 bg-body rounded ">
                    {{ $ley->ley }}
                </h1> 
                <hr>
            </div>
        
            {{-- Titulos & Capitulos --}}
            <div class="row m-3">
                @foreach ($titulos as $titulo)    
                {{-- titulos --}}
                        <a data-bs-toggle="collapse" href="{{url('#collapseCapitulos'. $titulo->idTitulo)}}" role="button" aria-expanded="false" aria-controls="collapseCapitulos">
                            <h3 class="ps-md-3 p  x-auto" >
                                {{ $titulo->titulo }}
                            </h3>
                        </a>
                    
                    <h6 class="ps-md-3">
                        {{ $titulo->titDes }}
                    </h6>
                    
                    {{-- capitulos --}}
                    <div class="collapse" id={{'collapseCapitulos'.$titulo->idTitulo}}>
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item  active link-danger" id="capitulo0" data-bs-toggle="list" href="#list-articulos" role="tab" aria-controls="articulos">Limpiar Seccion Articulos</a>
                            @foreach($capitulos as  $cap)
                                @if($cap->idTitulo === $titulo->idTitulo)
                                    <a class="list-group-item " id={{"capitulos".$cap->idCapitulo}} href="{{url('#Articulos'.$cap->idCapitulo)}}" data-bs-toggle="list" role="tab" aria-controls="articulos">
                                        <h6 class="ps-md-4">{{ $cap->capitulo}}</h6>
                                        <h6 class="ps-md-4">{{ $cap->capDes}}</h6>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>                    
                
                    <hr>{{--  --}}
                @endforeach
            </div>
        </div>

        {{-- Articulos --}}
        <div class="col-5">
            <div class="row m-3">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-articulos" role="tabpanel" aria-labelledby="capitulo0">
                        <div class="badge bg-warning text-dark position-relative" >
                            <h2>Seleccione un capitulo porfavor</h2>
                        </div>
                    </div>
                    @foreach ($capitulos as $cap)
                    <div class="tab-pane fade" id={{'Articulos'.$cap->idCapitulo}} role="tabpanel" aria-labelledby={{'capitulos'.$cap->idCapitulo}}>         
                        @foreach ($articulos as $art)

                                @if ($art->idCapitulo === $cap->idCapitulo)

                                    <p>
                                        {{-- PROBANDO EL MODAL --}}                                        
                                            <button type="button" class="btn btn-success col col-9 col-md-12" data-bs-toggle="modal" data-bs-target="{{url('#exampleModal'.$art->idArticulo)}}">
                                                {{$art->articulo}}
                                            </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="{{'exampleModal'.$art->idArticulo}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{$art->articulo}}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        {{$art->artDes}}
                                                        <a href="/">
                                                            <p>What follows is just some placeholder text for this modal dialog. You just gotta ignite the light and let it shine! Come just as you are to me. Just own the night like the 4th of July. Infect me with your love and fill me with your poison. Come just as you are to me. End of the rainbow looking treasure.

I can't sleep let's run away and don't ever look back, don't ever look back. I can't sleep let's run away and don't ever look back, don't ever look back. Yes, we make angels cry, raining down on earth from up above. I'm walking on air (tonight). Let you put your hands on me in my skin-tight jeans. Stinging like a bee I earned my stripes. I went from zero, to my own hero. Even brighter than the moon, moon, moon. Make 'em go, 'Aah, aah, aah' as you shoot across the sky-y-y! Why don't you let me stop by?

Boom, boom, boom. Never made me blink one time. Yeah, you're lucky if you're on her plane. Talk about our future like we had a clue. Oh my God no exaggeration. You're original, cannot be replaced. The girl's a freak, she drive a jeep in Laguna Beach. It's no big deal, it's no big deal, it's no big deal. In another life I would make you stay. I'm ma get your heart racing in my skin-tight jeans. I wanna walk on your wave length and be there when you vibrate Never made me blink one time.

We'd keep all our promises be us against the world. In another life I would be your girl. We can dance, until we die, you and I, will be young forever. And on my 18th Birthday we got matching tattoos. So open up your heart and just let it begin. 'Cause she's the muse and the artist. She eats your heart out. Like Jeffrey Dahmer (woo). Pop your confetti. (This is how we do) I know one spark will shock the world, yeah yeah. If you only knew what the future holds.

Sipping on Rosé, Silver Lake sun, coming up all lazy. It’s in the palm of your hand now baby. So we hit the boulevard. So make a wish, I'll make it like your birthday everyday. Do you ever feel already buried deep six feet under? It's time to bring out the big balloons. You could've been the greatest. Passport stamps, she's cosmopolitan. Your kiss is cosmic, every move is magic.

We're living the life. We're doing it right. Open up your heart. I was tryna hit it and quit it. Her love is like a drug. Always leaves a trail of stardust. The girl's a freak, she drive a jeep in Laguna Beach. Fine, fresh, fierce, we got it on lock. All my girls vintage Chanel baby.

Before you met me I was alright but things were kinda heavy. Peach-pink lips, yeah, everybody stares. This is no big deal. Calling out my name. I could have rewrite your addiction. She's got that, je ne sais quoi, you know it. Heavy is the head that wears the crown. 'Cause, baby, you're a firework. Like thunder gonna shake the ground.

Just own the night like the 4th of July! I’m gon’ put her in a coma. What you're waiting for, it's time for you to show it off. Can't replace you with a million rings. You open my eyes and I'm ready to go, lead me into the light. And here you are. I’m gon’ put her in a coma. Come on, let your colours burst. So cover your eyes, I have a surprise. As I march alone to a different beat. Glitter all over the room pink flamingos in the pool.
                                                            </p>
                                                        </a>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- AQUI TERMINA EL MODAL --}}
                                        
                                    </p>
                                @endif
                            
                        @endforeach
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>

    </div>

  

@stop
