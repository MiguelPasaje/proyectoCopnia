@extends('layouts.master')

@section('title','Listado Leyes')

@section('content')

<style>

.cont-about{

    background-color:rgb(211, 211, 211);
    margin-left: -5%;
    margin-right: -5%;
    margin-top:-1.2%;
    height: 400px;


}

p{
    text-align: justify;
}

.cont-about h1{

    padding-left:6%;
    padding-top:8% ;

}

.ir-arriba{
  display:none;
  background-repeat:no-repeat;
  font-size:20px;
  color:black;
  cursor:pointer;
  position:fixed;
  bottom:10px;
  right:10px;
  z-index:2;
}

</style>

<div class="cont-about">
    <h1>
        Quienes Somos.
        <hr>
    </h1>
</div>

<div class="shadow-lg p-3 mb-5 bg-body rounded" style="margin:5%;">
    <div class="row">
        <div class="col-sm-5 col-md-6">
            <h1 style="padding: 2%;">
                Nuestra Empresa.
            </h1>
    
            <p style="padding: 2%;">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, dolores temporibus possimus quaerat 
                reprehenderit doloremque modi, esse illo ipsam ea numquam sapiente! Consequatur maxime temporibus suscipit 
                expedita, architecto, laudantium aspernatur fugiat voluptates labore magni sapiente numquam animi corrupti 
                ex quibusdam. Temporibus quas quis, possimus quaerat repudiandae tempora sit ipsum id a cum dolores earum 
                unde, porro provident? Dolores praesentium sequi animi nulla explicabo ex nisi obcaecati in. Suscipit omnis 
                eius consectetur? Incidunt id asperiores, eveniet atque, aliquid cumque corporis at eum doloremque sint nesciunt 
                error maiores impedit deserunt ducimus ea aspernatur? Necessitatibus iusto in ipsum illo! Veniam provident modi.
            </p>
        </div>
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
            <img src="https://static01.nyt.com/images/2020/02/26/business/26virus-continuity-1-ES/26virus-continuity-1-articleLarge.jpg?quality=75&auto=webp&disable=upscale" alt="">       
                
        </div>
      </div>
</div>
  
<div class="shadow-lg p-3 mb-5 bg-body rounded " style="margin:5%;">

    <div class="row">
        <div class="col-sm-6 col-sm-5 col-lg-6 " style="padding: 2%;">
            <h1 >
                Misión
            </h1>
    
            <p style="padding: 2%;">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, dolores temporibus possimus quaerat 
                reprehenderit doloremque modi, esse illo ipsam ea numquam sapiente! Consequatur maxime temporibus suscipit 
                expedita, architecto, laudantium aspernatur fugiat voluptates labore magni sapiente numquam animi corrupti 
                
            </p>
        </div>
        <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0" style="padding: 2%;">
            <h1>
                Visión
            </h1>
    
            <p style="padding: 2%;">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, dolores temporibus possimus quaerat 
                reprehenderit doloremque modi, esse illo ipsam ea numquam sapiente! Consequatur maxime temporibus suscipit 
                expedita, architecto, laudantium aspernatur fugiat voluptates labore magni sapiente numquam animi corrupti 
                
            </p>
        </div>
      </div>

</div>

<div class="shadow-lg p-3 mb-5 bg-body rounded   " style="margin:5%;">

    
    <div class="row">
        <div class="col-sm-4 col-md-4 offset-md-4 col-lg-4 offset-lg-1 " style="padding: 2%;">
            <h1 >
                Felipe Hidalgo
            </h1>
    
            <img src="https://scontent.fclo1-1.fna.fbcdn.net/v/t1.0-9/73372278_3220312498041154_8392663247991341056_o.jpg?_nc_cat=107&ccb=3&_nc_sid=174925&_nc_ohc=fki2BejWvOEAX8IRZos&_nc_ht=scontent.fclo1-1.fna&oh=60e84ec243433235f8172b30b4487f1c&oe=604E913F" alt="">
        </div>
        <div class="col-sm-4 col-md-4 offset-md-4 col-lg-4 offset-lg-2" style="padding: 2%;">
            <h1>
                Miguel  Pasaje
            </h1>
    
            <img src="https://scontent.fclo1-1.fna.fbcdn.net/v/t31.0-8/29060224_1837700169625929_9116675300555721571_o.jpg?_nc_cat=103&ccb=3&_nc_sid=174925&_nc_ohc=GVzgadGZN7AAX_uE8m1&_nc_ht=scontent.fclo1-1.fna&oh=a5c3fc5997fd2e7fa527e56733a5a449&oe=604E2A52" alt="">
        </div>
        
      </div>

</div>
  
<a class="ir-arriba"  javascript:void(0) title="Volver arriba">
    <span class="fa-stack">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
    </span>
  </a>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){ //Hacia arriba
            irArriba();
        });

    function irArriba(){
        $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });
        $(window).scroll(function(){
            if($(this).scrollTop() > 0){ $('.ir-arriba').slideDown(600); }else{ $('.ir-arriba').slideUp(600); }
        });
        $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
        }
  </script>

@stop
