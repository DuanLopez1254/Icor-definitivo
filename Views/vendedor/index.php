<?php if($_SESSION['login']->Id_cargo == 2){ ?>
<span class="ir-arriba icon-arrow-up2">Arriba</span>
<div class="lok pt-5 pb-5">
<div class="container text-center pt-5 pb-2">
<div class="fd">
<p  class="display-4 mt-5 mb-5" style="font-family: 'Lexend Deca', sans-serif;"><?= $_SESSION['login']->nombre?> <?= $_SESSION['login']->apellidos?>
<p>
<?php
$cargo=$_SESSION['login']->Id_cargo;
if($cargo==1){
  echo'ADMINISTRADOR';
} else if($cargo==2){
  echo'VENDEDOR';
}else if($cargo==4){
  echo'CLIENTE';
}
?>
</p>
</p>
</div>
<style>
</style>
</div>
</div>
</div>
<div class="container gh d-flex justify-content-center text-center pt-5" style="font-family: 'Lexend Deca', sans-serif;">
<div class="row">
<div class="col-md-4  d-flex justify-content-center mb-5">
  <div class="card  align-self-left hgf animation-target1" style="width: 20rem;">
  <div class="card-body">
  <div class="uf mb-3"> 
  <img src="assets/images/2.jpg" class="card-img-top um" alt="...">
  </div>
  <div class="pl-3 pt-1 pr-3">
    <h5 class="card-title mb-3"><b>Experiencia</b></h5>
    <p class="card-text ">Más de 15 años en el mercado de proyectos
     p.o.p.<p>
</div>
</div>
</div>
</div>
<div class="col-md-4  d-flex justify-content-center mb-5">
<div class="card  align-self-center hgf animation-target1" id="card" style="width: 20rem;">
  <div class="card-body">
  <div class="uf mb-3"> 
  <img src="assets/images/3.jpg" class="card-img-top um" alt="...">
  </div>
  <div class="pl-3 pt-1 pr-3">
    <h5 class="card-title mb-3"><b>Compromiso</b></h5>
    <p class="card-text ">Nuestros proyectos se caracterizan 
    por el cumplimiento, eficacia, eficiencia y calidad<p>
</div>
</div>
</div>
</div>
<div class="col-md-4  d-flex justify-content-center mb-5">
<div class="card  align-self-center hgf  animation-target1" style="width: 20rem;">
  <div class="card-body">
  <div class="uf mb-3"> 
  <img src="assets/images/4.jpg" class="card-img-top um" alt="...">
  </div>
  <div class="pl-3 pt-1 pr-3">
    <h5 class="card-title mb-3"><b>Certificado</b></h5>
    <p class="card-text ">Contamos con el sello de calidad coface.<p>
</div>
</div>
</div>
</div>
</div>
</div>
<?php } ?>