<label for="exampleInputPassword1">Fecha de ingreso</label>
        <input type="date" name="fecha_in" id="fecha_in"   class="form-control"  value="<?= $proveedor->fecha_in ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Observacion</label>
        <textarea type="text" name="observacion" id="observacion"   class="form-control"><?= $proveedor->observacion ?></textarea>
      </div>
<div class="modal-footer">
<a href="?controller=proveedor" class="btn btn-secondary mr-6 ml-6 qwe" role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;volver&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <button type="submit" class="btn btn-primary col-md-6">Modificar</button>
        </form>
      </div>
    </div>
  </div>

<br><br><br><br><br><br>