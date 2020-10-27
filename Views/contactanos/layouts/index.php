<div class="container mt-5 mb-4 gh">
<div class=" row text-center mt-5 ghr">
<div class="col-md-2 pt-5 d-flex align-items-center">
<button type="button" class="btn btn-success btn-block col-md-12"  data-toggle="modal" data-target="#exampleModal">Crear</button>
</div>
<div class="col-md-10">
<br>
<br>
<br> 
</div>
</div>
<p class="display-4 text-center mt-5" >Lista de de sedes</p>
<br>
<table class="table text-center gh">
    <thead>
        <th>Codigo de la sede</th>
        <th>Nombre de la sede</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Ciudad</th>
        <th>Foto</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $contactanos):  ?>
        <tr>
            <td><?= $contactanos->Id_sede  ?></td>
            <td><?= $contactanos->Nombre ?></td>
            <td><?= $contactanos->Direccion?></td>
            <td><?= $contactanos->Telefono?></td>
            <td><?= $contactanos->Ciudad?></td>
            <td><img width="100" height="100" src="<?= $contactanos->imagen ?>" alt=""></td>
            <td width="200" class="table__options">
                <a class="btn btn-success mr-1 ml-1 qwe" href="?controller=contactanos&method=edit&Id_sede=<?= $contactanos->Id_sede ?>"  role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Editar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
            <a class="btn btn-danger mr-1 ml-1 qwe" href="?controller=contactanos&method=edits&Id_sede=<?= $contactanos->Id_sede ?>"  role="button">&nbsp;&nbsp;Deshabilitada&nbsp;&nbsp;</a><br>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content gh">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Sede</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?controller=contactanos&method=store" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de la Sede</label>
    <input type="name" name="Nombre" id="Nombre" required class="form-control" aria-describedby="emailHelp" placeholder="Ingrese el nombre de la sede" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Direccion</label>
    <input type="name" name="Direccion" id="Direccion" required class="form-control" aria-describedby="emailHelp" placeholder="Ingrese la dirrecion de la sede" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telefono</label>
    <input type="number" name="Telefono" id="Telefono" required class="form-control" aria-describedby="emailHelp" placeholder="Ingrese el telefono de la sede" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ciudad</label>
    <input type="name" name="Ciudad" id="Ciudad" required class="form-control" aria-describedby="emailHelp" placeholder="Ingrese la ciudad de la sede" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Foto de la sede </label>
    <input type="file" name="file" id="file" required  class="form-control"  placeholder="Carlos@algo.com" required="required">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary col-md-6"  data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary col-md-6">Crear</button>
        </form>
      </div>
    </div>
  </div>
</div>

<br><br><br>


