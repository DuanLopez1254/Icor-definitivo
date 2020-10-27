<input type="hidden" name="id_regis" value="<?= $proveedor->id_regis ?>">
<div class="form-group">
    <label for="exampleInputEmail1">Nombre del Proveedor</label>
    <input type="name" name="nombre" id="nombre"  class="form-control" aria-describedby="emailHelp"  value="<?= $proveedor->nombre ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Direccion	</label>
    <input type="text" name="direccion" id="direccion" required class="form-control" aria-describedby="emailHelp" value="<?= $proveedor->direccion ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Celular</label>
    <input type="text" name="celular" id="celular"   class="form-control"  value="<?= $proveedor->celular ?>">
  </div>
  <div class="form-group">
