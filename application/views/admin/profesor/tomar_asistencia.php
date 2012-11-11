<div class="well">
    <form method="post" action="<?php echo base_url(); ?>profesor/tomar_asistencia">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>nombre del alumno</th>
            <th>asistio</th>

        </tr>
        </thead>
        <tbody>

        <?php $i = 1; foreach($alumnos as $alumno): ?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $alumno->alu_nombres?> </td>
            <td><input type="checkbox" name="id<? echo $alumno->idAlumnos?>"/></td>

        </tr>
            <?php $i++; endforeach ?>


        </tbody>
        <input type="hidden" value="<? echo $asignatura?>" name="asignatura"/>
    </table>
     <input type="submit" value="tomar asistencia"/>
    </form>
</div>