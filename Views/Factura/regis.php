<div class="container mt-5 mb-5 pt-3">
<div class="mt-5 mb-4">
    <div class="modal-content gd">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Registro</h3>
      </div>
      <div class="modal-body">
      <form  action="?controller=index&method=stores1" method="POST" enctype="multipart/form-data">
  <div class="form-group">
  <h6 class="modal-title mb-2" id="exampleModalLabel">Nombres</h6>
    <input type="name" name="nombre" id="nombre" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su nombre completo " required="required">
  </div>
  <div class="form-group">   
  <h6 class="modal-title mb-2" id="exampleModalLabel">Apellidos</h6>
    <input type="name" name="apellidos" id="apellidos" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su Correo personal " required="required">
  </div>
  <div class="form-group">   
  <h6 class="modal-title mb-2" id="exampleModalLabel">Celular</h6>
    <input type="number" name="celular" id="celular" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su Correo personal " required="required">
  </div>
  <div class="dropdown">
  <label for="exampleInputEmail1" name="Id_doc" id="Id_doc"><h6 class="modal-title mb-2" id="exampleModalLabel">Tipo de Documento</h6>
</label><br>
    <select class="btn btn-secondary form-control " name="Id_doc" id="Id_doc">
    <option  name="Id_doc" required><p class="h3">Seleccionar</p></option>
      <option  value="1"><p class="h3">Cedula de ciudadania</p></option> 
      <option value="2"><p class="h3">Cedula de Extranjeria</p></option>
    </select>
</div> <br> 
  <div class="form-group">
  <h6 class="modal-title mb-2" id="exampleModalLabel">Documento</h6>
    <input type="number" name="documento" id="documento" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su numero de documento " required="required">
  </div>
  <div class="form-group">
  <h6 class="modal-title mb-2" id="exampleModalLabel">Correo</h6>
    <input type="email" name="correo" id="correo" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su celular" required="required">
  </div>
  <div class="form-group">
  <h6 class="modal-title mb-2" id="exampleModalLabel">Contraseña</h6>
    <input type="password" name="contrasena" id="contrasena" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su Contraseña" required="required">
  </div>
      </div>
      <div class="modal-footer text-center p-4">
      <a class="btn btn-warning  col-md-6 text-white text-center" href="?controller=vendedor"  role="button">Volver</a>
        <button type="submit" class=" btn btn-primary col-md-6 text-white text-center"><span class="text-center">Registrarme</span></button>
        </form>
      </div>
    </div>
    </div>
  </div>