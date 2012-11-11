<div class="btn-toolbar">
    <a href="registrar_alumno" class="btn btn-primary">
        Nuevo Usuario
    </a>

</div>
<div class="well">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>

            <th style="width: 36px;"></th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($alumnos as $alumno):?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $alumno->alu_nombres ?></td>
            <td><?php echo $alumno->alu_apellidos?></td>
            <td>
                <a href=><i class="icon-pencil"></i></a>
                <a href="<?php echo base_url() ?>alumno/eliminar_alumno?id=<?php echo $alumno->idAlumnos ?>" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
            </td>
        </tr>
        <?php $i++; endforeach ?>

        </tbody>
    </table>
</div>
