<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<div class="container mt-5 gh">
<span class=""><img src="../../../../assets/images/icono.png" width="40px" class="rounded mr-2" alt="..."> Promotion Factory S.A</span>
</div>
<div class="mt-3"><br>
<center><h1 class="h3 mb-5 mt-3"><b>Lista de Empleados Activos</b></h1></Center>
</div>
<div class="container text-center gh">
<table class="table border gh">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Numero de empleado</th>
      <th scope="col">Nombre de empleado</th>
      <th scope="col">Documento</th>
      <th scope="col">Celular</th>
      <th scope="col">Direccion</th>
      <th scope="col">Correo</th>
      <th scope="col">Fecha de ingreso</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $conexion=mysqli_connect('localhost','root','','icor');
    $sql="SELECT * FROM registro where id_esta = 1 and Id_cargo = 3 OR Id_cargo = 2";
    $result3=mysqli_query($conexion,$sql);
    while($mostrar3=mysqli_fetch_array($result3)){
     ?>
    <tr>
     <td><?php echo $mostrar3['id_regis'] ?></td>
      <th scope="row"><?php echo $mostrar3['nombre'] ?>&nbsp;<?php echo $mostrar3['apellidos']?>&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <td>&nbsp;&nbsp;<?php echo $mostrar3['documento'] ?></td>
      <td><?php echo $mostrar3['celular'] ?></td>
      <td><?php echo $mostrar3['direccion'] ?></td>
      <td><?php echo $mostrar3['correo'] ?></td>
      <td><?php echo $mostrar3['fecha_in'] ?></td>
    
    </tr>
    <?php }  ?>  
  </tbody>
</table>
</div>
</div>
<?php
//<td><img width="80" height="80" src="../../../../<?php echo $mostrar3['imagen']?>"></td>?>