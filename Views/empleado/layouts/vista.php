<div class="mt-5 mb-4 ">
<div class="p-5 mt-5 mb-4 gh">
<a href="?controller=empleado&method=PDFS"  role="button"><button type="button" class="btn btn-primary btn-lg flex align-left"   data-target="#exampleModal">Descargar</button></a>
<div class=" text-center mt-5">
<div class="mt-5">

<br>
<br>

<p class="display-4 text-center gh" >Lista de empleados liquidados</p>
<br>
<table class="table text-center gh">
    <thead>
        <th>N. empleado</th>
        <th>Nombre</th>
        <th>Celular</th>
        <th>Cargo</th>
        <th>Documento</th>
        <th>Correo</th>
        <th>Fecha de ingreso<th>
        <th>Fecha de liquidaciòn</th>
        <th>Observacion</th>
        <th>Foto </th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::alls() as $empleado):  ?>
        <tr>
        <td><?= $empleado->id_regis ?></td>
            <td><?= $empleado->nombre ?>&nbsp;<?= $empleado->apellidos ?></td>
            <td><?= $empleado->celular?></td>
            <td><?= $empleado->Id_cargo?></td>
            <td>C.C &nbsp;<?= $empleado->documento ?></td>
            <td><?= $empleado->correo?></td>
            <td><?= $empleado->fecha_in?></td>
            <td></td>
            <td><?= $empleado->fecha_li?></td>
            <td><?= $empleado->observacion?></td>
            <td><img width="80" height="80" src="<?= $empleado->imagen ?>" alt=""></td>
            <td width="200" class="table__options">
                <a class="btn btn-success mr-1 ml-1 qwe" href="?controller=empleado&method=edi&id_regis=<?= $empleado->id_regis ?>"  role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Editar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
            <a class="btn btn-primary mr-1 ml-1 qwe" href="?controller=empleado&method=editd&id_regis=<?= $empleado->id_regis ?>"  role="button">No Liquidar</a><br>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
    </div>


<br><br><br><br><br><br>

