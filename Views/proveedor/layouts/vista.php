<div class="container mt-5 mb-4 gh">
<div class=" row text-center mt-5">
<div class="col-md-10 mt-5">
<br>
</div>
</div>
<p class="display-4 text-center gh" >Lista de proveedores liquidados</p>
<br>
<table class="table text-center gh">
    <thead>
        <th>Codigo del proveedor</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Celular</th>
        <th>Fecha de ingreso</th>
        <th>Fecha de liquidación</th>
        <th>Imagen</th>
        <th>Observacion</th>
<th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::alls() as $proveedor):  ?>
        <tr>
        <td><?= $proveedor->id_regis ?></td>
            <td><?= $proveedor->nombre ?></td>
            <td><?= $proveedor->direccion?></td>
            <td><?= $proveedor->celular	?></td>
            <td><?= $proveedor->fecha_in  ?></td>
            <td><?= $proveedor->fecha_li  ?></td>
            <td><img width="100" height="100" src="<?= $proveedor->imagen ?>" alt=""></td>
            <td><?= $proveedor->observacion ?></td>
                <td width="200" class="table__options">
                <a class="btn btn-primary mr-1 ml-1 qwe" href="?controller=proveedor&method=edi&id_regis=<?= $proveedor->id_regis ?>"  role="button">&nbsp;&nbsp;&nbsp;Editar&nbsp;&nbsp;&nbsp;</a><br><br>
                <a class="btn btn-success mr-1 ml-1 qwe" href="?controller=proveedor&method=editd&id_regis=<?= $proveedor->id_regis ?>"  role="button">Contratar</a><br><br>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>