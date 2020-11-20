<div class="modal fade" id="exampleModal" style="font-family: 'Lexend Deca', sans-serif;" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal modal-dialog  modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content gd">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comentario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?Controller=comen&method=store" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="name" name="nombre_usu" id="nombre_usu" required class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su nombre " required="required">
  </div>
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Respuesta:</h5>
 <textarea name="comentario" id="comentario"  class="form-control" aria-describedby="emailHelp" placeholder="Escriba aquí su Comentario" required="required"></textarea>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger col-md-6"  data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary col-md-6">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="Registro" tabindex="-1" role="dialog" style="font-family: 'Lexend Deca', sans-serif;" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal modal-dialog  modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content gd">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Registro</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="?controller=index&method=stores" method="POST" enctype="multipart/form-data">
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
        <button type="button" class="btn btn-danger col-md-6"  data-dismiss="modal">Cerrar</button>
        <button type="submit" class=" btn btn-primary col-md-6 text-white text-center"><span class="text-center">Registrarme</span></button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalCenter" style="font-family: 'Lexend Deca', sans-serif;" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content gd">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle">Iniciar sesion</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="?controller=security&method=login" method="POST">
  <div class="form-group">
    <label for="exampleInputcorreo1"><h6>Correo</h6></label>
    <input type="email" name="correo" id="correo" required class="form-control input-lg" placeholder="******@gmail.com">
  </div>
  <div class="form-group">
    <label for="exampleInputcontrasena1"><h6>Contraseña</h6></label>
    <input type="password" name="contrasena" id="contrasena" required class="form-control"  placeholder="Contraseña">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger col-md-6" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary col-md-6" name="dat">Iniciar sesion</button>
        </Form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalInfo" style="font-family: 'Lexend Deca', sans-serif; backdrop-filter: blur(10px);" tabindex="-1" role="dialog"  aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content gh">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalScrollableTitle">Nosotros</h3>
        <button type="button" style="color:#ff0606; border-color: #ff0606;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Contacto</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Mision</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Vision</a>
  </div>
</nav>
<div class="tab-content pt-3 nosotros" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <div class="container">
    <div class="row mt-4 mb-4 "  style="overflow: hidden;">
      <div class="col-md-5 mb-2 clientes wow animated fadeInUp">
      <p class="h5">Numero<br>
      <span CLASS="text-muted">3018765902</span></p><br>
      <p class=" h5 mt-3 blond">Correo<br>
      <span CLASS="text-muted">Info@promotionfactory.com</span></p><br>
      <p class="h5 mt-3 blond">Direccion<br>
      <span CLASS="text-muted">Calle 5a #63-14</span></p><br><br>
      </div>
      <div class="col-md-5 mb-2 text-center clientes-caro wow animated fadeInUp">
      <p class="h5">Numero<br>
      <span CLASS="text-muted">3018765902</span></p><br>
      <p class=" h5 mt-3 blond">Correo<br>
      <span CLASS="text-muted">Info@promotionfactory.com</span></p><br>
      <p class="h5 mt-3 blond">Direccion<br>
      <span CLASS="text-muted">Calle 5a #63-14</span></p><br><br>
      </div>
      <div class="col-md-7 wow animated fadeInUp">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.81847807127!2d-74.1208444857369!3d4.626452443586296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9955dda14b0f%3A0x470d002113a9f277!2sCl.%205a%20%2363-14%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1602708240185!5m2!1ses!2sco" width="100%" height="250px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><br>
      </div>
    </div> 
  </div>  
</div>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <div class="container">
   <div class="row mt-4 mb-4s"  style="overflow: hidden;">
   <div class="col-md-5 mb-2 clientes wow animated fadeInUp">
   <p class="h4">Nuestra mision es brindar los mejores servicios a nivel de publicidad, con la mejor calidad y sobre todo
   con lo ultimo en diseño, para aseguarar lo mejor para su compañia.</p>
   </div>
   <div class="col-md-5 mb-2 text-center clientes-caro wow animated fadeInUp">
   <p class="h4">Nuestra mision es brindar los mejores servicios a nivel de publicidad, con la mejor calidad y sobre todo
   con lo ultimo en diseño, para aseguarar lo mejor para su compañia.</p><br>
   </div>
   <div class="col-md-7 wow animated fadeInUp">
   <div class="d-flex justify-content-center pl-2 ml-2 mb-4">
   <center>
   <img  src="assets/images/Mision.jpg" loading="lazy" width="90%" height="250px" class="img-fluid" alt="Mison_Ecercor"><br>
   </center>
   </div>
   </div>
   </div>
  </div>
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
  <div class="container">
   <div class="row mt-4 mb-4s" style="overflow: hidden;">
   <div class="col-md-5 mb-2 clientes pt-3 wow animated fadeInUp">
   <p class="h4">Nuestra vision es lograr ser una empresa reconocida a nivel nacional e internacioanl en el
     campo de la publicidad, por la calidad de nuestros productos.</p>
   </div> 
   <div class="col-md-5 mb-2 text-center clientes-caro wow animated fadeInUp">
   <p class="h4">Nuestra vision es lograr ser una empresa reconocida a nivel nacional e internacioanl en el
     campo de la publicidad, por la calidad de nuestros productos.
   </p><br>
   </div>
   <div class="col-md-7 wow animated fadeInUp">
   <div class="d-flex justify-content-center pl-2 ml-2 mb-4">
   <center>
   <img  src="assets/images/vision.jpg" loading="lazy" width="90%" height="250px" class="img-fluid" alt="Mison_Ecercor"><br>
   </center>
   </div>
   </div>
   </div>
  </div>
  </div>
</div>
      <div class="modal-footer mt-2 pb-1" style="font-family: 'Lexend Deca', sans-serif;">
        <button type="button"  class="btn btn-danger col-md-12" style="font-family: 'Lexend Deca', sans-serif;" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="error" aria-hidden="true" style="font-family: 'Lexend Deca', sans-serif;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content gh">
      <div class="modal-header" style="border: 0px;">
      <button type="button" style="color:#ff0606; border-color: #ff0606;" class="close" data-dismiss="modal" aria-label="Close">
          <span class="" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center mb-5">
      <div class="d-flex justify-content-center">
      <img src="assets/images/warning.png" class="mb-4" width="20%">
      </div>
        <p class="h5 font-weight-bold mb-2"><?php print $_SESSION['error']; ?></p>
      </div>
    </div>
  </div>
</div>