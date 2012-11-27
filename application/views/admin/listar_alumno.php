<div class="btn-toolbar">
    <a href="registrar_alumno" class="btn btn-primary">
        Registrar Alumno
    </a>

</div>

    <?php $atributosF = array('class'=>'form-horizontal', 'method'=>'POST');
            $atributosL = array('class' => 'control-label');
            $atributosB = array('class' => 'btn btn-primary', 'value'=>'Cargar','name'=>'submit');
    ?>
    <?php echo form_open_multipart('alumno/cargar_alumnos',$atributosF);  ?>
    <div class="control-group">
        <?php echo form_label('Cargar Lista', 'userfile',$atributosL) ?>
        <div class="controls">
        <?php echo form_upload('userfile') ?>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
    <?php echo form_submit($atributosB) ?>
        </div>
    </div>
    <?php form_close() ?>

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
        <?php $i = 1; foreach ($alumnos as $alumno): ?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $alumno->alu_nombres ?></td>
            <td><?php echo $alumno->alu_apellidos?></td>
            <td><?php echo $alumno->alu_codigo?></td>
            <td>
                <a href="<?php echo base_url() ?>alumno/editar_alumno?id=<?php echo $alumno->idAlumnos ?>"><i
                        class="icon-pencil"></i></a>
                <a href="<?php echo base_url() ?>alumno/eliminar_alumno?id=<?php echo $alumno->idAlumnos ?>"
                   role="button" data-toggle="modal"><i class="icon-remove"></i></a>
            </td>
        </tr>
            <?php $i++; endforeach ?>

        </tbody>
    </table>
</div>
