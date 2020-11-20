<div class="container text-center mt-5 mb-4 gh">
<div class=" row text-center mt-5">
<div class="gh mt-5 text-center">
<br>
</div>
</div>
<p class="display-4 text-center mt-5 " >Lista de sedes inavilitadas</p>
<br>
<br>
<table class="table gh text-center">
    <thead>
       <th>Codigo de la sede</th>
        <th>Nombre de la sede</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Ciudad</th>
        <th>Foto</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::alls() as $contactanos):  ?>
        <tr>
        <td><?= $contactanos->Id_sede  ?></td>
            <td><?= $contactanos->Nombre ?></td>
            <td><?= $contactanos->Direccion?></td>
            <td><?= $contactanos->Telefono?></td>
            <td><?= $contactanos->Ciudad?></td>
            <td><img width="100" height="100" src="<?= $contactanos->imagen ?>" alt=""></td>
            <td width="200" class="table__options">
            <a class="btn btn-success mr-1 ml-1 qwe" href="?controller=contactanos&method=edit&Id_sede=<?= $contactanos->Id_sede ?>"  role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Editar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
            <a class="btn btn-primary mr-1 ml-1 qwe" href="?controller=contactanos&method=editd&Id_sede=<?= $contactanos->Id_sede ?>"  role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Habilitar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
<br><br><br><br><br><br>