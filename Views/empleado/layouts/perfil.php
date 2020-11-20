<?php if($_SESSION['login']->Id_cargo == 3){ ?>
<div class="lok pt-5 pb-5">
<div class="container text-center pt-5 pb-4">
<div class="fd">
<p  class="display-4 mt-5 mb-5" style="font-family: 'Lexend Deca', sans-serif;"><?= $_SESSION['login']->nombre?> <?= $_SESSION['login']->apellidos?>
<p>
<?php
$cargo=$_SESSION['login']->Id_cargo;
if($cargo==1){
  echo'ADMINISTRADOR';
} else if($cargo==2){
  echo'VENDEDOR';
}else if($cargo==3){
  echo'Empleado';
}elseif($cargo==4){
    echo'CLIENTE'; 
}
?>
</p>
</p>
</div>
</div>
<style>
</style>
</div>
</div>
</div><br><br><br>
<div class="container text-center gh">
<div class="row gh">
<div class="col-md-4">
    <div class="card-body">
            <div class="card-img">
                <img src="assets\images\01.png"  class="card-img-top" alt="...">
            </div>
                <div class="card-box"><br>
                    <h4 class="card-title pb-3 mbr-fonts-style display-7">Promocionales</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Productos y proyectos dirigidos a posicionar y evidenciar marcas, productos, eventos y campañas en diferentes espacios de distribución y comercialización.
                        Productos: Flangers, Tacker, Porta Precios, buzones, cajas de luz, Reglas, Llaveros en Zamac, MDF y PCV , Tatuajes temporales, portavasos en diversos materiales, Toma unos, Relojes, Porta fiches, inflables, habladores en acrílico, rompe tráficos y muchos más.
                    <br>
                </div> 
    </div>
</div>
<div class="col-md-4 gh">
<div class="card-body">
        <div class="card-img">
            <img src="assets\images\02.png"  class="card-img-top" alt="...">
        </div>
            <div class="card-box"><br>
                <h4 class="card-title pb-3 mbr-fonts-style display-7">empaques</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Desarrollo y proyectos dirigidos a proteger y contener diversas tipologías de productos.
                    Productos: Empaques Blister, Burbujas termoformadas, Cajas plásticas (PET Y PVC), funda electro-selladas, Blister con display impreso, empaques por temporada, nidos internos, bolsas en Clear, y muchos más.
                    <br>
            </div> 
    </div>
</div>
<div class="col-md-4 gh">
<div class="card-body">
        <div class="card-img">
            <img src="assets\images\03.png"  class="card-img-top" alt="...">
        </div>
            <div class="card-box"><br>
                <h4 class="card-title pb-3 mbr-fonts-style display-7">exhibicion</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Productos y proyectos dirigidos exhibir y posicionar directa productos físicamente dentro de los diferentes canales de distribución y comercialización. Productos: Ristras, Balcones, Bandejas de Exposición, Bandejas de promoción, Counters, dispensadores, Glorificadores entre otros.
                    <br>
            </div> 
       </div>
</div>
</div>
</div>
<div class="container text-center gh">
<div class="row gh">
<div class="col-md-4">
<div class="card-body">
        <div class="card-img">
            <img src="assets\images\04.png"  class="card-img-top" alt="...">
        </div>
                    <div class="card-box"><br>
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">decoracion </h4>
                        <p class="mbr-text mbr-fonts-style display-7">Productos especiales y prácticos para la decoración tanto de ambientes en el hogar y como de la oficina.
                        Productos: Sticker mágicos, relojes adhesivos, tableros didácticos adhesivos, mariposas adhesivas, PATMAUSES, portavasos alegóricos, lámparas acrílicas de luz LED y muchos más.
                            <br>
                    </div> 
    </div>
    </div>
<div class="col-md-4">
<div class="card-body">
        <div class="card-img">
            <img src="assets\images\05.png"  class="card-img-top" alt="...">
        </div>
                    <div class="card-box"><br>
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">belleza y frio </h4>
                        <p class="mbr-text mbr-fonts-style display-7">Estos productos son destacados por su uso en aspectos estéticos, terapéuticas y de salud. Están desarrollados con Gel criogénico, gracias a su acción refrigerante, es una alternativa eﬁcáz para eliminar la celulitis y otros problemas de la piel, también se utiliza para toniﬁcár algunas partes del cuerpo y rehabilitar dolencias o lesiones en el cuerpo.
                    </div> 

    </div>
   </div>
<div class="col-md-4">
<div class="card-body">
        <div class="card-img">
            <img src="assets\images\06.png"  class="card-img-top" alt="...">
        </div>
                    <div class="card-box"><br>
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">institucionales </h4>
                        <p class="mbr-text mbr-fonts-style display-7">Productos especiales para el fortalecimiento de la imagen corporativa dentro y fuera de la misma organización.
                        Productos: Carpetas plásticas, PATMAUSES, fundas porta documentos, billeteras, cartucheras señalización interna, estuches en crear y muchos más.
                            <br>
                    </div> 
    </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<?php } ?>
<br><br>