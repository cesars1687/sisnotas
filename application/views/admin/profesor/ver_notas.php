<div class="well">
    <form method="post" action="<?php echo base_url(); ?>profesor/registrar_notas">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>nombre del alumno</th>
                <th>nota de asignatura</th>

            </tr>
            </thead>
            <tbody>

            <?php $i = 1; foreach($alumnos as $alumno): ?>

            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $alumno->alu_nombres?> </td>
                <td><input type="text" style="height: 30px;" value="<?php echo $alumno->alu_asi_nota?>" name="id<?php echo $alumno->idAlumnos?>"/></td>

            </tr>
                <?php $i++; endforeach ?>


            </tbody>
            <input type="hidden" value="<?php echo $asignatura?>" name="asignatura"/>
        </table>
        <input type="submit" value="cambiar notas"/>
    </form>
</div>