<BR><BR><BR><div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <center><h5 class="modal-title" id="exampleModalLabel">Editar Factura</h5><center>

      </div>
      <div class="modal-body">
      <form  action="?controller=ventas&method=update" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="Id_factura" value="<?= $factura->Id_factura ?>">
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Nombre del Producto</label>
    <input type="text" name="Nombre_producto" id="Nombre_producto" required class="form-control" aria-describedby="emailHelp"  value="<?= $factura->Nombre_producto ?>">
  </div>
  <div class="form-group col-md-2">
    <label for="exampleInputEmail1">C/U</label>
    <input type="number" name="cantidad_producto" id="cantidad_producto" required class="form-control" aria-describedby="emailHelp" value="<?= $factura->cantidad_producto ?>">
  </div>
  <div class="form-group col-md-4">
    <label for="exampleInputEmail1">Precio</label>
    <input type="number" name="Precio_producto" id="Precio_producto" required class="form-control" aria-describedby="emailHelp" value="<?= $factura->Precio_producto ?>">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1"># Referencia</label>
    <input type="number" name="Id_producto" id="Id_producto" required class="form-control"  value="<?= $factura->Id_producto ?>">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Fecha</label>
    <input type="date" name="Fecha" id="Fecha" required class="form-control" aria-describedby="emailHelp" value="<?= $factura->Fecha ?>">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Sub Total</label>
    <input type="number" name="Sub_total" id="Sub_total" required class="form-control" aria-describedby="emailHelp" value="<?= $factura->Sub_total ?>">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Total</label>
    <input type="number" name="Total" id="Total" required class="form-control" aria-describedby="emailHelp" value="<?= $factura->Total ?>">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Vendedor</label>
    <input type="text" name="Id_empleado" id="Id_empleado" required class="form-control" aria-describedby="emailHelp" value="<?= $factura->id_regis ?>">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Cliente</label>
    <input type="text" name="nombre" id="nombre" required class="form-control" aria-describedby="emailHelp" value="<?= $factura->nombre ?>">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Numero Documento Cliente</label>
    <input type="number" name="documento" id="documento" required class="form-control" aria-describedby="emailHelp" value="<?= $factura->documento ?>">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary col-md-6" href="?controller=empleado">volver</button>
        <button type="submit" class="btn btn-primary col-md-6">Modificar</button>
        </form>
      </div>
    </div>
  </div>  
</div>


<br><br><br><br><br><br>