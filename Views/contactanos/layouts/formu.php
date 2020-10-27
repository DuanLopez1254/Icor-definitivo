<input type="hidden" name="Id_sede" value="<?= $contactanos->Id_sede  ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de la sede</label>
    <input type="name" name="Nombre" id="Nombre"  class="form-control" aria-describedby="emailHelp"  value="<?= $contactanos->Nombre?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Direccion</label>
    <input type="name" name="Direccion" id="Direccion" required class="form-control" aria-describedby="emailHelp" value="<?= $contactanos->Direccion ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telefono</label>
    <input type="number" name="Telefono" id="Telefono" required class="form-control" aria-describedby="emailHelp" value="<?= $contactanos->Telefono ?>">
  </div> 
    <label for="exampleInputPassword1">Ciudad</label>
    <input type="name" name="Ciudad" id="Ciudad"   class="form-control" value="<?= $contactanos->Ciudad ?>">
  </div>
      