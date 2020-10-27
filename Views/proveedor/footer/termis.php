<label for="exampleInputPassword1">Fecha de liquidacion</label>
        <input type="date" name="fecha_li" id="fecha_li"   class="form-control"  value="<?= $proveedor->fecha_li ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Observacion</label>
        <textarea type="text" name="observacion" id="observacion"   class="form-control"><?= $proveedor->observacion ?></textarea>
      </div>
          </div>
    <input type="hidden" name="id_esta" value="1">
    <div class="modal-footer">
    <a href="?controller=proveedor&method=vista" class="btn btn-secondary mr-6 ml-6 qwe" role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;volver&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <button type="submit" class="btn btn-success col-md-6">Contratar</button>
            </form>
          </div>
        </div>
      </div>

    <br><br><br><br><br><br>