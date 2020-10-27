<div class="container mt-5 mb-4 gh">
<div class=" row text-center mt-5">
<div class="col-md-2 d-flex align-items-center mt-5">
<button type="button" class="btn btn-success btn-lg"  data-toggle="modal" data-target="#exampleModal">Crear</button>
</div>
<div class="col-md-10">
<br>

</div>
</div>
<p class="display-4 text-center gh" >Lista de proveedores</p>
<br>
<br>
<table class="table text-center gh">
    <thead>
        <th>Codigo del proveedor</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Celular</th>
        <th>fecha de ingreso</th>
        <th>Imagen</th>
        <th>Observacion</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $proveedor):  ?>
        <tr>
            <td><?= $proveedor->id_regis ?></td>
            <td><?= $proveedor->nombre ?></td>
            <td><?= $proveedor->direccion?></td>
            <td><?= $proveedor->celular	?></td>
            <td><?= $proveedor->fecha_in  ?></td>
            <td><img width="100" height="100" src="<?= $proveedor->imagen ?>" alt=""></td>
            <td><?= $proveedor->observacion ?></td>
            <td width="200" class="table__options">
                <a class="btn btn-success mr-1 ml-1 qwe" href="?controller=proveedor&method=edit&id_regis=<?= $proveedor->id_regis ?>"  role="button">&nbsp;&nbsp;&nbsp;&nbsp;Editar&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
            <a class="btn btn-danger mr-1 ml-1 qwe" href="?controller=proveedor&method=edits&id_regis=<?= $proveedor->id_regis ?>"  role="button">&nbsp;&nbsp;Liquidar&nbsp;&nbsp;</a><br>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?controller=proveedor&method=store" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del Proveedor</label>
    <input type="name" name="nombre" id="nombre" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba el nombre del proveedor aquí " required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Direccion</label>
    <input type="text" name="direccion" id="direccion" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba la direccion del proveedor  aquí" required="required">
  </div>
  <input type="hidden" name="Id_cargo" value="5">
  <div class="form-group">
    <label for="exampleInputEmail1">Celular</label>
    <input type="number" name="celular" id="celular" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba el celular del proveedor aquí" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Fecha de ingreso</label>
    <input type="date" name="fecha_in" id="fecha_in" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba el celular del proveedor aquí" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Foto del proveedor </label>
    <input type="file" name="file" id="file" required  class="form-control"  placeholder="Carlos@algo.com" required="required">
  </div>
  <input type="hidden" name="contrasena" value="promotionfactory">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger col-md-6"  data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary col-md-6">Crear</button>
        </form>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br>

