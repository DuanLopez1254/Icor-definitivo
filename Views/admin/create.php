<div class="container mt-5">
<form  action="?controller=publi&method=store" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" id="title" class="form-control" aria-describedby="emailHelp" placeholder="Mi perro" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" name="descripcion" id="descripcion" class="form-control"  placeholder="Lo mas genial de la vida" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Link Image</label>
    <input type="file" name="link" id="link" class="form-control" placeholder="https://dam.ngenespanol.com/wp-content/uploads/2019/03/luna-colores-nuevo.png" required="required">
  </div>
  <button type="submit" class="btn btn-primary btn-block mt-2 btn-lg">Publish</button>
</form>