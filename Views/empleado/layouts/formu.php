<input type="hidden" name="id_regis" value="<?= $empleado->id_regis ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombres</label>
    <input type="name" name="nombre" id="nombre"  class="form-control" aria-describedby="emailHelp"  value="<?= $empleado->nombre ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos</label>
    <input type="name" name="apellidos" id="apellidos" required class="form-control" aria-describedby="emailHelp" value="<?= $empleado->apellidos ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Celular</label>
    <input type="number" name="celular" id="celular" required class="form-control" aria-describedby="emailHelp" value="<?= $empleado->celular ?>">
  </div>
  <div class="dropdown">
  <label for="exampleInputEmail1" name="Id_cargo" id="Id_cargo">Cargo</label><br>
    <select class="btn btn-secondary " name="Id_cargo" id="Id_cargo">
    <option  name="Id_cargo" value="<?= $empleado->Id_cargo ?>">Seleccionar</option>
      <option  value="1">Administrador</option> 
      <option  value="2">Vendedor</option>
      <option  value="3">Empleado</option>
      <option  value="4">Usuario</option>
    </select>
</div> <br> 
<div class="form-group">
    <input type="hidden" name="Id_doc" id="Id_doc"   class="form-control" value="<?= $empleado->Id_doc ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Documento</label>
    <input type="number" name="documento" id="documento"   class="form-control" value="<?= $empleado->documento ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Correo</label>
    <input type="email" name="correo" id="correo"   class="form-control"  value="<?= $empleado->correo ?>">
  </div>
      </div>