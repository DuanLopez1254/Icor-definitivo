<div class="container mt-5 mb-4 gh">
<div class=" row text-center mt-5">
<div class="col-md-10">
<br>
</div>
</div>
<p class="display-4 text-center gh mt-5">Lista de productos agotados</p>
<br>
<table class="table text-center gh">
    <thead>
        <th>Codigo del producto</th>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Ubicacion</th>
        <th>Proveedor</th>
        <th>Imagen</th>
        <th>Observaciones</th>
        <th></th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::alls() as $producto):  ?>
        <tr>
            <td><?= $producto->Id_prod ?></td>
            <td><?= $producto->Nombre ?></td>
            <td><?= $producto->Cantidad?></td>
            <td><?= $producto->Ubicacion?></td>
            <td><?= $producto->Id_pro?></td>
            <td><?= $producto->imagen?></td>
            <td><?= $producto->observacion?></td>
            <td><img width="100" height="100" src="<?= $producto->imagen ?>" alt=""></td>
            <td width="200" class="table__options">
            <a class="btn btn-success mr-1 ml-1 qwe" href="?controller=productos&method=edit&Id_prod=<?= $producto->Id_prod ?>"  role="button">&nbsp;&nbsp;&nbsp;&nbsp;Abastecer&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
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
        <h5 class="modal-title" id="exampleModalLabel">Crear Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?controller=productos&method=store" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del producto</label>
    <input type="name" name="Nombre" id="Nombre" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba el nombre del producto aquí " required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cantidad</label>
    <input type="number" name="Cantidad" id="Cantidad" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba la cantidad de productos" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ubicacion</label>
    <input type="text" name="Ubicacion" id="Ubicacion" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba la ubicacion del producto" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">codigo del proveedor</label>
    <input type="number" name="Id_pro" id="Id_pro" required  class="form-control"  placeholder="Escriba el codigo del proveedor" required="required">
  </div>
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