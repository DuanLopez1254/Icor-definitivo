
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del Producto</label>
    <input type="name" name="Nombre" id="Nombre"  class="form-control" aria-describedby="emailHelp"  value="<?= $producto->Nombre ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cantidad</label>
    <input type="number" name="Cantidad" id="Cantidad" required class="form-control" aria-describedby="emailHelp" value="<?= $producto->Cantidad ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">ubicación</label>
    <input type="text" name="Ubicacion" id="Ubicacion" required class="form-control" aria-describedby="emailHelp" value="<?= $producto->Ubicacion ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Proveerdor</label>
    <input type="text" name="Id_pro" id="Id_pro"   class="form-control"  value="<?= $producto->Id_pro ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Observacion</label>
    <textarea type="text" name="observacion" id="observacion"   class="form-control"  ><?= $producto->observacion ?></textarea>
  </div>
      </div>