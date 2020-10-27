<?php if($_SESSION['login']->Id_cargo == 4){ ?>

<div class="container mt-5 mb-4">
<div class=" row text-center mt-5"><br><br>



<div class="row gh text-center container  mb-4 d-flex justify-content-center mt-5">

<?php
$conexion=mysqli_connect('localhost','root','','icor');
 $sql="SELECT * from producto";
    $result1=mysqli_query($conexion,$sql);

    while( $mostrar1=mysqli_fetch_array($result1)){
?>

  <div class="col-md-4  d-flex justify-content-center mb-5 mt-5">
  <center>
  <div class="card">
<div class="" style="max-height:200px; min-height:200px; min-width:300px; max-width:300px; overflow:hidden;">
    <img  src="<?php echo $mostrar1['imagen'] ?>"  class="img-fluid " alt="..." style="background-atachement: fixed;" style="width:100%;">
</div>

            <div class="card-body">
                <div class="card-text">
                    <h4 class="card-title pb-3 mbr-fonts-style display-7"><?php echo $mostrar1['Nombre'] ?></h4>
                </div> 
    </div>
    </center>
</div>


<?php } ?>

</div><br>

</div>
</div>
</div>

</div>
</div>
</div>


<?php } ?>
<br>