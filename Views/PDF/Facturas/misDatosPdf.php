<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
$total=0;
$conexion=mysqli_connect('localhost','root','','icor');
$sql1="SELECT * from cod_fac";
$result1=mysqli_query($conexion,$sql1);
$mostrar1=mysqli_fetch_array($result1);
$factura=$mostrar1['Cod'];
    $sql="SELECT * from factura where fac = '$factura'";
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result)){
?>
<div class="container mt-5 gh">
<span class=""><img src="../../../assets/images/icono.png" width="40px" class="rounded mr-2" alt="..."> Promotion Factory S.A</span>
<div class="mt-3"><br>
<p class="h3 mb-5 mt-3"><b>Factura:</b> <?php echo $mostrar['fac'] ?></p>
</div>
<p class="h4 text-muted">Cliente: <?php echo $mostrar['Nombre_cli'] ?> <?php echo $mostrar['Apellido_cli'] ?></p>
<p class="h4 text-muted mb-3">Documento: <?php echo $mostrar['Documento'] ?></p>
</div>
<br>
<div class="container text-center gh">
<div class="table-responsive">
<table class="table border gh">
<div class="text-left mb-4">
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
  $conexion=mysqli_connect('localhost','root','','icor');
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
    <?php $total=$total+$mostrar3['Precio_t'] ?>
    <?php }  ?>  
  </tbody>
</table>
</div>
<div class=" mt-5">
<div class="">
<p class="h4 mb-3">Total:</p>
<p class="h4">$<?php echo number_format($total, 0, '.', '.'); ?></p>
</div>
<div class="">
</div>
</div>
 <?php 
$total=0;
} ?>
<!-- modal -->
<br>
</div>



