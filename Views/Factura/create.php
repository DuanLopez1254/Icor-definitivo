<?php
$conexion=mysqli_connect('localhost','root','','icor');
?>
<div class="container mt-5 gh">
<div class="mt-3"><br>
<p class="display-4 mb-5 mt-3"><b>Factura</b></p>
</div>
<?php
    $Codigos=$_SESSION['Codigo_fac'];
    $total=0;
    $sql="SELECT * from factura where fac = '$Codigos'";
    $result=mysqli_query($conexion,$sql);
    while( $mostrar=mysqli_fetch_array($result)){
?>
<div class= "text-left">
<p>Codigo: <?= $Codigos ?></p>
<p class="h3 text-muted">
Nombre: <?php echo $mostrar['Nombre_cli'] ?> 
<?php echo $mostrar['Apellido_cli'] ?></p>
<p class="h3 text-muted">Documento: <?php echo $mostrar['Documento'] ?></p>
<?php $doc=$mostrar['Documento']; ?>
</div>
</div>
<br>
<div class="container text-center">
<div class="table-responsive">
<table class="table gh">
  <thead class="thead-dark gh">
    <tr>
      <th scope="col">Cantidad</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio unitario</th>
      <th scope="col">Precio total</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $conexion=mysqli_connect('localhost','root','','icor');
    $sql="SELECT * from productos_fac where fac = '$Codigos' and Documento_cli = '$doc'";
    $result3=mysqli_query($conexion,$sql);
$algo=0;
    while($mostrar3=mysqli_fetch_array($result3)){
     ?>
    <tr>
      <th scope="row"><?php echo $mostrar3['Cantidad'] ?></th>
      <td><?php echo $mostrar3['Nombre'] ?></td>
      <td>$<?php  echo number_format($mostrar3['Precio_u'], 0, '.', '.'); ?></td>
      <td>$<?php echo number_format($mostrar3['Precio_t'], 0, '.', '.');?></td>
      <td>
      <?php $total=$total+$mostrar3['Precio_t'] ?>
      <form method="post" action="?controller=vendedor&method=eliminar">
      <input type="hidden" name="eli" value="<?php echo $mostrar3['id_pfac'] ?>">
      <button type="submit" class="btn btn-danger" name="elimi">X</button>
      </form>
      </td>
    </tr>
    <?php $algo=$algo+1;
  } ?>  
  </tbody>
</table><br>
</div>
<div class="row gh">
<div class="col-md-6 text-center">
<p class="h3">Total:</p>
</div>
<div class="col-md-6 text-center">
<p class="h3">$<?php echo number_format($total, 0, '.', '.'); ?></p>
</div>
</div>
<br>
<form method="post" action="?controller=vendedor&method=Agre">
  <div class="form-group">
    <input type="hidden" name="fac" class="form-control input-lg" value="<?php echo"$Codigos"; ?>">
    <input type="hidden" name="doc" class="form-control input-lg" value="<?php echo"$doc"; ?>">
  </div>
  <?php   if($algo>0){ ?>
    <a class="btn btn-primary col-md-12 mb-3" href="?controller=vendedor&method=Agre" style="font-family: 'Lexend Deca', sans-serif;">Agregar producto</a>
  <?php }else{ ?>
       <button type="submit"  name="datfac" class="btn btn-primary col-md-12 mb-3" style="font-family: 'Lexend Deca', sans-serif;" name="datpro">Agregar productos</button>
  <?php } ?>
  <?php 
  if($algo>0){ ?>
       <a class="btn btn-success col-md-12" href="?controller=vendedor&method=finalizar" style="font-family: 'Lexend Deca', sans-serif;">Terminar factura</a>
  <?php }else{ ?>
    <a class="btn btn-danger col-md-12" href="?controller=vendedor&method=nada" style="font-family: 'Lexend Deca', sans-serif;">Terminar factura</a>
  <?php } ?>
</form>
</div>
    <?php  } ?>
<br><br><br><br>