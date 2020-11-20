<div class="container mt-5 gh"><br>
<div class="text-center mt-4">
<p class="display-4 mb-3" id="cabecera">Factura</p>
<form method="post" acion="" class="mb-3">
<div class="form-group"><br>
    <input type="number" name="cli"  class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Aqui ingrese el numero de documento del cliente">
  </div><br>
  <button type="submit" id="link" name="datfac" class="btn btn-primary btn-lg">Enviar</button>
</form>
</div>
</div>
<?php
if(isset($_POST['datfac']))
{  
    $conexion=mysqli_connect('localhost','root','','icor');
    $cli=$_POST['cli'];;
   $resultado = mysqli_query($conexion,"Select * from registro where documento = '$cli' and id_cargo = '4'");
   if($resultado) {  
      $result2=mysqli_fetch_array($resultado);
     if($result2['documento'] == $cli){
      $sql="SELECT * from registro where documento = '$cli'";
      $result1=mysqli_query($conexion,$sql);
      $mostrar=mysqli_fetch_array($result1);
      $facd=$mostrar['documento'];
      $num1=date("Ymd");
      $num=mt_rand(0,100000);
      $fac=$num.$facd;
      $Nombre=$mostrar['nombre'];
      $Apellido=$mostrar['apellidos'];
      $Documento=$mostrar['documento'];
      $total="0";
      if(!isset($nombre)){
      $result = mysqli_query($conexion,"insert into factura VALUES (NULL, $fac, '$Nombre', '$Apellido', '$Documento', '$total')");
      }
     if($result){
     $_SESSION['Codigo_fac'] = $fac;
     header('location:?controller=vendedor&method=fac');
     }else{
     echo"pemdejo";
    }
}else{
  header('Location: ?controller=vendedor&method=regis');
}
   }
}
?>
<br><br><br><br><br><br><br><br><br><br>