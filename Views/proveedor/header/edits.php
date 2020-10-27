<BR><BR><BR><div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <center><h5 class="modal-title" id="exampleModalLabel">Liquidar Proveedor</h5><center>

      </div>
      <div class="modal-body">
      <form  action="?controller=proveedor&method=updates" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="Id_pro" value="<?= $proveedor->Id_pro ?>">
