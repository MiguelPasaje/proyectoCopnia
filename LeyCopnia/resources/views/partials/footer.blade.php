<style>
    .ir-arriba{
        display:none;
        background-repeat:no-repeat;
        font-size:20px;
        color:black !important;
        cursor:pointer !important;
        position:fixed;
        bottom:10px;
        right:10px;
        z-index:2;
    }
    .ico-arrib{
        color:black !important;
        cursor: pointer;
    }

    .ir-arriba:hover{
        background-color:rgba(63, 63, 97, 0.473) !important;
        cursor:pointer !important;
    }


</style>

<footer>
    <a class="ir-arriba"  javascript:void(0) title="Volver arriba">
        <span class="fa-stack">
          <i class="ico-circ fa fa-circle fa-stack-2x"></i>
          <i class="ico-arrib fa fa-arrow-up fa-stack-1x fa-inverse"></i>
        </span>
      </a>
    
    <div class="container-footer">
        <div class="container-ini">
            <div class="colum1">
                <h1>
                    Información.
                </h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae eveniet molestias officia tenetur ipsam
                    incidunt est blanditiis? Consequatur nihil doloremque saepe totam. Cumque placeat dolorum, quidem alias
                    deserunt voluptatibus consequatur.
                </p>
            </div>
            <div class="colum2">
                <h1>
                    Redes Sociales
                </h1>

                <div class="titleSiguenos"><label for="">
                    Siguenos en nuestras redes sociales.
                </label></div>
    
                <div class="row">
                    <div class="redesSociales" style="text-align: center;">
                        
                        <div class="contenedor-icono">
                          <a href="" target="_blank" class="twiter">
                            <i class="fab fa-twitter-square"></i>                            
                          </a>
                          
                        </div>
                        <div class="contenedor-icono">
                          <a href="" target="_blank" class="facebook">
                            <i class="fab fa-facebook-square"></i>                           
                          </a>
                        </div>
                        <div class="contenedor-icono">
                          <a href="" target="_blank" class="instagram">
                            <i class="fab fa-instagram"></i>                            
                          </a>
                        </div>
                      </div>
                </div>
    
    
    
    
            </div>
            <div class="colum3">
                <h1>
                    Información de Contacto.
                </h1>
                <div class="row2">
                    <i class="far fa-building"></i>
                    <label for="">
                        San Juan de Pasto - Nariño, Colombia. <br>
                        Universidad de Nariño - Torobajo.
                    </label>                
                </div>
                <div class="row2">
                    <i class="fas fa-mobile-alt"></i>
                    <label for="">
                        +57 - 3155551231
                    </label>                
                </div>
                <div class="row2">
                    <i class="far fa-envelope"></i>
                    <label for="" class="mail">
                        <a href="mailto:miguelandrespasaje@udenar.edu.co">E-mail</a>
                    </label>                
                </div>
            </div>
        </div>
        
    </div>
    
</footer>
<a name="ancla-footer" id="ancla-footer"></a>
<div class="container-end">
    
        <div class="copyright">
            <p>&copy; 2021 Todos los derechos reservados | <a href="#">MigFel.org</a>  </p>         
         </div>
         <div class="terminos">
             <a href="">
                 Información Compañia |
             </a>
             <a href="">
                 Privación y Politica |
             </a>
             <a href="">
                 Términos y condiciones
             </a>
         </div>
    
</div>



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