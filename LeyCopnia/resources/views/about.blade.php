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
                title1
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

  

@stop
