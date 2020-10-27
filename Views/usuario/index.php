<br><br><div class="container mt-5 mb-4 gh">
<div class=" row text-center">
<div class="col-md-2 d-flex align-items-center">
<button type="button" class="btn btn-success btn-lg"  data-toggle="modal" data-target="#exampleModal">Crear</button>
</div>
<div class="col-md-10">
<br>
<br>
</div>
</div>
<p class="display-4 text-center" >Lista de usuarios Activos</p>
<br>
<table class="table text-center gh">
    <thead>
        <th>Codigo del usuario</th>
        <th>Nombre</th>
        <th>Celular</th>
        <th>Documento</th>
        <th>Correo</th>
        <th>Observacion</th>
        <th>Imagen</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $usuario):  ?>
        <tr>
            <td><?= $usuario->id_regis ?></td>
            <td><?= $usuario->nombre?>&nbsp;<?= $usuario->apellidos?></td>
            <td><?= $usuario->celular?></td>
            <td>C.C&nbsp;<?= $usuario->documento?></td>
            <td><?= $usuario->correo?></td>
            <td><?= $usuario->observacion?></td>
            <td><img width="100" height="100" src="<?= $usuario->imagen	?>" alt=""></td>
<td width="200" class="table__options">
            <form  action="?controller=usuario&method=updated" method="POST" >
            <input type="hidden" name="id_regis" value="<?= $usuario->id_regis ?>">
            <input type="hidden" name="id_esta" value="2">
            <button type="submit" class="btn btn-danger col-md-6">&nbsp;&nbsp;Inactivo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                    </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content gh">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?controller=usuario&method=store" method="POST" enctype="multipart/form-data">
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Nombre</h5>
    <input type="name" name="nombre" id="nombre" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su nombre completo " required="required">
  </div>
    <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Apellidos</h5>
    <input type="name" name="apellidos" id="apellidos" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su nombre completo " required="required">
  </div>
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Celular</h5>
    <input type="number" name="celular" id="celular" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su celular" required="required">
  </div>
  <div class="dropdown">
  <label for="exampleInputEmail1" name="Id_doc" id="Id_doc"><h5 class="modal-title" id="exampleModalLabel">Tipo de Documento</h5>
</label><br>
    <select class="btn btn-secondary form-control" name="Id_doc" id="Id_doc">
    <option name="Id_doc" required>Seleccionar</option>
      <option  value="1">Cedula de ciudadania</option> 
      <option  value="2">Cedula de Extranjeria</option>

    </select>
</div> <br> 
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Documento</h5>
    <input type="number" name="documento" id="documento" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su numero de documento " required="required">
  </div>
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Correo</h5>
    <input type="name" name="correo" id="correo" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su Correo personal " required="required">
  </div>
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Contraseña</h5>
    <input type="password" name="contrasena" id="contrasena" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su Contraseña" required="required">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger col-md-6"  data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary col-md-6">Registrarme</button>
        </form>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br>

