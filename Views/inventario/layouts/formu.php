<input type="hidden" name="Id_inve" value="<?= $inventario->Id_inve ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del Producto</label>
    <input type="name" name="Nombre" id="Nombre"  class="form-control" aria-describedby="emailHelp"  value="<?= $inventario->Nombre ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cantidad</label>
    <input type="number" name="Cantidad" id="Cantidad" required class="form-control" aria-describedby="emailHelp" value="<?= $inventario->Cantidad ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Fecha de Registro</label>
    <input type="date" name="Fecha" id="Fecha" required class="form-control" aria-describedby="emailHelp" value="<?= $inventario->Fecha ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ubicación</label>
    <input type="text" name="Ubicacion" id="Ubicacion"   class="form-control"  value="<?= $inventario->Ubicacion ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Observacion</label>
    <textarea type="text" name="observacion" id="observacion"   class="form-control"  ><?= $inventario->observacion ?></textarea>
  </div>

      