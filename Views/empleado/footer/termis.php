  <div class="form-group p-3 ">
    <label for="exampleInputPassword1">Observacion</label>
    <textarea type="text" name="observacion" id="observacion"   class="form-control"  ><?= $empleado->observacion ?></textarea>
  </div>
  <div class="form-group p-3">
    <label for="exampleInputPassword1">Fecha de Liquidación</label>
    <input type="date" name="fecha_li" id="fecha_li"   class="form-control">
  </div>
  <input type="hidden" name="id_esta" value="2"> 
   
      <div class="modal-footer">
      <a  class="btn btn-secondary col-md-6" href="?controller=empleado&method=vista">volver</a>
        <button type="submit" class="btn btn-danger col-md-6">Liquidar</button>


        </form>

    </div>
  </div>

<br><br><br><br><br><br>

