<div class="well">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Codigo</th>

            <th style="width: 36px;"></th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($alumnos as $alumno):?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $alumno->alu_nombres ?></td>
            <td><?php echo $alumno->alu_apellidos?></td>
            <td><?php echo $alumno->alu_codigo?></td>
            <td>
                <a href="<?php echo base_url() ?>alumno/registrar_alumno_asig?id=<?php echo $alumno->idAlumnos ?>&&id_asig=<?php echo $id_asig?>"><i class="icon-pencil"></i></a>

            </td>
        </tr>
            <?php $i++; endforeach ?>

        </tbody>
    </table>
</div>
