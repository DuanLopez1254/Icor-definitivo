<span class="ir-arriba icon-arrow-up2">Arriba</span>
<div class="lok pt-5 pb-5">
<div class="container text-center pt-5 pb-2">
<div class="fd">
<h2 class=" " style="font-family: 'Lexend Deca', sans-serif;">En Promotion Factory nos encargamos 
del diseño, desarrollo y producción de gran variedad de material publicitario y de promoción de Marca 
para puntos de venta, caracterizándonos por generar soluciones innovadoras, realizables y perdurables.</h2>
</div>
<style>
</style>
<h3 class=" mb-4 sm ">Contamos con<span class="hs"></span><span class="if">&#160;</span><h3>
<br>
</div>
</div>
</div>
<div class="container d-flex justify-content-center text-center pt-5" style="font-family: 'Lexend Deca', sans-serif;">
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
<div class="container mt-5 mb-4">
<div class=" row text-center">
<div class="col-md-10">
<p class="display-4" >Lista de de sedes</p>
</div>
</div>
<br>
<table class="table">
    <thead>
        <th>Nombre de la sede</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Ciudad</th>
        <th>Foto</th>
    </thead>
    <tbody>
    <?php foreach(parent::alls() as $contactanos):  ?>
        <tr>
            <td><?= $contactanos->Nombre ?></td>
            <td><?= $contactanos->Direccion?></td>
            <td><?= $contactanos->Telefono?></td>
            <td><?= $contactanos->Ciudad?></td>
            <td><img width="100" height="100" src="<?= $contactanos->imagen ?>" alt=""></td>
            <td></td> <td></td>
    <?php endforeach; ?>
    </tbody>
</table>
</div>