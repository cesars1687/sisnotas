<div class="well">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>nombre de la asignatura</th>
            <th>tomar asistencia</th>
            <th>ver asistencias</th>
            <th>registrar notas</th>
            <th>descargar lista de alumnos</th>
        </tr>
        </thead>
        <tbody>

        <?php $i = 1; foreach($asignaturas as $asignatura): ?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $asignatura->asi_nombre?> </td>
            <td><a href="<?php echo base_url(); ?>profesor/alumnos_asistencia?asignatura=<?php echo $asignatura->idAsignatura?>"><i class="icon-pencil"></i></a></td>
            <td><a href="<?php echo base_url();?>profesor/ver_asistencias?asignatura=<?php echo $asignatura->idAsignatura?>"><i class="icon-pencil"></i></a></td>
            <td><a href="<?php echo base_url();?>profesor/ver_notas?asignatura=<?php echo $asignatura->idAsignatura?>"><i class="icon-pencil"></i></a></td>
            <td>
                <a href="<?php echo base_url();?>profesor/generar_excel?asignatura=<?php echo $asignatura->idAsignatura?>&asignatura_nombre=<?php echo $asignatura->asi_nombre?>"><i class="icon-pencil"></i></a>
            </td>
        </tr>
            <?php $i++; endforeach ?>


        </tbody>
    </table>
</div>