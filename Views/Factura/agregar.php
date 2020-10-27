
    <div aria-live="polite" aria-atomic="true" class="mt-5 mr-5 pt-5 " style="position: relative; min-height: 20px; margin-top: 30px;">
  <!-- Position it -->
  <br>
  <div style="position: absolute; top: 30%; right: 0;">

    <!-- Then put toasts within -->
    <div class="toast gh" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
      <div class="toast-header gh">
        <img src="assets/images/icono.png" width="25px" class="rounded mr-2" alt="...">
        <strong class="mr-auto">P.F</strong>
        <small class="text-muted">Ahora</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body gh">
 
Producto agregado correctamente.

      </div>
    </div>
  </div>
</div>


    <div class="container mt-5 gh">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content gd">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalScrollableTitle">Registro producto</h3>
      </div>
      <div class="modal-body gh">
      <form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1"><h6>Codigo producto</h6></label>
    <input type="text" name="Nombre" class="form-control input-lg" id="exampleInputEmail1" placeholder="11">
  </div>
       <button type="submit" name="datpro" class="btn btn-primary col-md-12 mb-5" style="font-family: 'Lexend Deca', sans-serif;" name="datpro">Buscar</button>
</form>

<?php if(isset($_POST['datpro']))
{    

  $id=$_POST['Nombre'];
  $conexion=mysqli_connect('localhost','root','','icor');
  $sql="SELECT * from producto where id_prod = '$id' AND id_esta = 1";
  $result3=mysqli_query($conexion,$sql);

  while($mostrar3=mysqli_fetch_array($result3)){ ?>
    <div class="col-md-12 d-flex justify-content-center gh" id="idpro">
    <center>
    <div class="card text-center mb-5 shadow p-3 mb-2  rounded jk gh" style="width: 18rem;">
    <img src="<?php echo $mostrar3['imagen'] ?>" class="card-img-top" alt="..." style="max-height: 100px; min-height:100px; overflow:hidden;">
    <div class="card-body">
    <h5 class="card-title mb-2"><?php echo $mostrar3['Nombre'] ?><br> $<?php echo number_format($mostrar3['precio'], 0, '.', '.')?> </h5>
    <?php $name=$mostrar3['Nombre']; ?>

    <div class="mt-4">
    <form method="post" action="">
    <div class="form-group">
    <label for="exampleInputEmail1"><h6>Cantidad</h6></label>
    <input type="number" name="cantidad" class="form-control input-lg" id="exampleInputEmail1" placeholder="10">
    <input type="hidden" name="Nombre" value="<?php echo"$name"; ?>">
  </div>
  <button type="submit" name="datpros" class="btn btn-primary col-md-12" style="font-family: 'Lexend Deca', sans-serif;" name="dat">Añadir</button>
    </form>
    </div>
    </div>
    </div>
    </center>
    </div>

  <?php }
  
}
?>
      </div>
      <div class="modal-footer" style="font-family: 'Lexend Deca', sans-serif;">
      <a class="btn btn-success ml-2 my-2 my-sm-0 mt-3 col-md-12" href="?controller=vendedor&method=fac">Volver</a>
      </div>
    </div>
  </div>
</div>
<style>
.lo{
  text-decoration: none;
}
</style>

<div class="container mb-5 mt-5 gh" style="font-family: 'Lexend Deca', sans-serif;">
<div class="text-center sticky-top gh" style="background-color:white;">
<p class="display-4 mb-5 lo text-decoration-none gh" id="pros">Productos</p>
</div>
<div class="row align-self-center">
<?php
$conexion=mysqli_connect('localhost','root','','icor');
    $sql="SELECT * FROM producto where id_esta = 1";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
     ?>

<div class="col-md-4 align-self-center gh" >
<center>
<div class="card text-center mb-5 shadow p-3 mb-5 gh rounded jk" style="width: 18rem;">
<img src="<?php echo $mostrar['imagen'] ?>" class="card-img-top" alt="..." style="max-height: 150px; min-height:150px; overflow:hidden;">
<div class="card-body">
<h5 class="card-title mb-4"><?php echo $mostrar['Nombre'] ?> </h5>
<h5 class="card-title"><b><?php echo $mostrar['Id_prod'] ?> </b></h5>
<div class="mt-4">
</div>
</div>
</div>
</center>
</div>


    <?php } ?>

    </div>
</div>


<?php
 if(isset($_POST['datpros']))
 {  
  $fac=$_SESSION['Codigo_fac'];
   
  
    $conexion=mysqli_connect('localhost','root','','icor');
    $sql="SELECT * from factura where fac = '$fac'";
    $result5=mysqli_query($conexion,$sql);

    $mostrar5=mysqli_fetch_array($result5);

    $doc=$mostrar5['Documento'];
    $cantidad=$_POST['cantidad'];

    $id=$_POST['Nombre'];
    $sql1="SELECT * from producto where Nombre = '$id'";
    $result3=mysqli_query($conexion,$sql1);
  
    $mostrar3=mysqli_fetch_array($result3);

    $nombre=$mostrar3['Nombre'];
    $precio=$mostrar3['precio'];
    $total=$precio*$cantidad;

    $resultado = mysqli_query($conexion,"insert into productos_fac VALUES (NULL, '$fac', '$doc', '$cantidad', '$nombre', '$precio', '$total')");

     
	if ($resultado) {

 

		echo" <script>
                            $(document).ready(function(){
                              $('.toast').toast('show');
                            });
                            </script>
                            "
                            ;
                           

	}
	else{
 
    
	}
}
?>


