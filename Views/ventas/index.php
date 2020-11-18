<div class="container mt-5 gh">
<div class="mt-3"><br>
<p class="display-4 mb-5 mt-3"><b>Facturas</b></p>
</div>
<?php
$conexion=mysqli_connect('localhost','root','','icor');
    $sql="SELECT * from factura";
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result)){
     ?>
</div>
<br>
<div class="container text-center shadow p-3 mb-5 gh rounded">
<div class="table-responsive">
<table class="table border gh">
<div class="text-left mb-4">
<form method="post" action="?controller=vendedor&method=PDF">
<div class="form-group" style="display:none;"><br>
    <input type="hidden" name="fac" value="<?php echo $mostrar['fac'] ?>">
  </div><br>
  <button type="submit"  name="datfac" class="btn btn-primary mb-4">Descargar en PDF</button>
</form>
<p class="h3">Codigo: <?php echo $mostrar['fac'] ?></p><br>
<p class="h3 text-muted">Nombre: <?php echo $mostrar['Nombre_cli'] ?> <?php echo $mostrar['Apellido_cli'] ?></p>
<p class="h3 text-muted ">Documento: C.C.<?php echo $mostrar['Documento'] ?></p>
</div>
<?php $doc=$mostrar['Documento']; $fac=$mostrar['fac'];?>
  <thead class="thead-dark">
    <tr>
    <th scope="col">Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio unitario</th>
      <th scope="col">Precio total</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $sql="SELECT * from productos_fac where fac = '$fac'";
    $result3=mysqli_query($conexion,$sql);

    while($mostrar3=mysqli_fetch_array($result3)){
     ?>
    <tr>
      <td><?php echo $mostrar3['Nombre'] ?></td>
      <th scope="row"><?php echo $mostrar3['Cantidad'] ?></th>
      <td>$<?php echo number_format($mostrar3['Precio_u'], 0, '.', '.');?></td>
      <td>$<?php echo number_format($mostrar3['Precio_t'], 0, '.', '.'); ?></td>
    </tr>
    <?php
    $total=0;
    $total=$total+$mostrar3['Precio_t'] ?>
    <?php }  ?>  
  </tbody>
</table>
</div>
<div class="row mt-5">
<div class="col-md-6 text-center">
<p class="h3">Total:</p>
</div>
<div class="col-md-6 text-center">
<p class="h3">$<?php echo number_format($total, 0, '.', '.'); ?></p>
</div>
</div>
 <?php 
$total=0;
} ?>
<!-- modal -->
<br>
</div>

<?php

?>

