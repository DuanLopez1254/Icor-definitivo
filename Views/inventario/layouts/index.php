<div class="container mt-5 mb-4 gh">
<div class=" row text-center">
<div class="col-md-2 d-flex align-items-center mt-5">
<button type="button" class="btn btn-success btn-lg"  data-toggle="modal" data-target="#exampleModal">Crear</button>
</div>
<div class="col-md-10">
<br>

</div>
</div>
<p class="display-4 text-center gh" >Inventario</p>
<br>
<table class="table text-center gh">
    <thead>
        <th>Codigo </th>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Fecha de Registro</th>
        <th>Ubicación</th>
        <th>Observacion</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $inventario):  ?>
        <tr>
            <td><?= $inventario->Id_inve ?></td>
            <td><?= $inventario->Nombre ?></td>
            <td><?= $inventario->Cantidad?></td>
            <td><?= $inventario->Fecha?></td>
            <td><?= $inventario->Ubicacion?></td>
            <td><?= $inventario->observacion?></td>
            <td width="200" class="table__options">
                <a class="btn btn-success mr-1 ml-1 qwe" href="?controller=inventario&method=edit&Id_inve=<?= $inventario->Id_inve?>"  role="button">&nbsp;&nbsp;&nbsp;Editar&nbsp;&nbsp;&nbsp;</a><br><br>
            <a class="btn btn-danger mr-1 ml-1 qwe" href="?controller=inventario&method=edits&Id_inve=<?= $inventario->Id_inve?>"  role="button">No Existe</a><br>
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
        <h5 class="modal-title" id="exampleModalLabel">Añadir a el Inventario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?controller=inventario&method=store" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del producto</label>
    <input type="name" name="Nombre" id="Nombre" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba el nombre del producto aquí " required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cantidad</label>
    <input type="number" name="Cantidad" id="Cantidad" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba la cantidad de productos" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Fecha del Inventario</label>
    <input type="date" name="Fecha" id="Fecha" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba la ubicacion del producto" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ubicación</label>
    <input type="text" name="Ubicacion" id="Ubicacion" required  class="form-control"  placeholder="Escriba la ubcicacion del Producto" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Observacion</label>
    <textarea type="text" name="observacion" id="observacion"   class="form-control"></textarea>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger col-md-6"  data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success col-md-6">Crear</button>
        </form>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br>

