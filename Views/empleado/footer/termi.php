<div class="form-group p-3 ">
    <label for="exampleInputPassword1">observacion</label>
    <textarea type="text" name="observacion" id="observacion"   class="form-control"  ><?= $empleado->observacion ?></textarea>
  </div>

  <div class="form-group p-3 ">
    <label for="exampleInputPassword1">Fecha de ingreso</label>
    <input type="date" name="fecha_in" id="fecha_in"   class="form-control"  value="<?= $empleado->fecha_in ?>">
  </div>

  <div class="form-group p-3 ">
    <label for="exampleInputPassword1">Fecha de liquidacion</label>
    <input type="date" name="fecha_li" id="fecha_li"   class="form-control"  value="<?= $empleado->fecha_li ?>">
  </div>


<div class="modal-footer">
<a  class="btn btn-secondary col-md-6" href="?controller=empleado">volver</a>
        <button type="submit" class="btn btn-primary col-md-6">Modificar</button>
        </form>
      </div>
    </div>
  </div>

<br><br><br><br><br><br>