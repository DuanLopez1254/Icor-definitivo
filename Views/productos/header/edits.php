<BR><BR><BR><div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <center><h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5><center>

      </div>
      <div class="modal-body">
      <form  action="?controller=productos&method=update" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="Id_prod" value="<?= $producto->Id_prod ?>">
  