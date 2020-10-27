<BR><BR><BR><div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <center><h5 class="modal-title" id="exampleModalLabel">Responder</h5><center>

      </div>
      <div class="modal-body">
      <form  action="?controller=comen&method=update" method="POST" >
      <input type="hidden" name="id_co" value="<?= $comen->id_co ?>">
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Comentario:</h5>
    <label for="exampleInputEmail1" name="comentario"><?= $comen->comentario ?></label>
  </div>
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Usuario:</h5>
    <label for="exampleInputEmail1" name="nombre_usu"><?= $comen->nombre_usu ?></label>
  </div>
  <div class="form-group">
  <h5 class="modal-title" id="exampleModalLabel">Respuesta:</h5>
 <textarea name="respuesta" id="respuesta"  class="form-control" aria-describedby="emailHelp"><?= $comen->respuesta ?></textarea>
  </div>
      </div>
      <div class="modal-footer">
        <a href="?controller=admin" class="btn btn-secondary col-md-6" >volver</a>
        <button type="submit" class="btn btn-primary col-md-6">Enviar</button>
        </form>
      </div>
    </div>
  </div>

<br><br><br><br><br><br>