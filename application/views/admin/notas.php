<div id="optionsRadios">
    <label class="radio">

        <input type="radio" name="optionsRadios" id="optionsRadiosAlumno" value="alumnos" <?php if (isset($notas)) {
            echo 'checked';
        } ?>>
        alumnos
    </label>
    <label class="radio">
        <input type="radio" name="optionsRadios" id="optionsRadiosCurso" value="cursos"<?php if (isset($curso_alus)) {
            echo 'checked';
        } ?> >
        cursos
    </label>
</div>


<div id='alumnos' style="display: <?php if (!isset($notas)) {
    echo 'none';
} ?>" >
    <form class="form-horizontal" method="GET" action="<?php echo base_url()?>notas/listar_alumno_notas">
        <div class="control-group">
            <label class="control-label" for="inputEmail">Nombre</label>

            <div class="controls">
                <input type="text" name='nombre' id="inputEmail" placeholder="Nombre o Apellido.." style="height: 30px">
            </div>
        </div>

        <div class="control-group">
            <div class="controls">

                <button type="submit" class="btn">Buscar</button>
            </div>
        </div>
    </form>
    <h3><?php echo strtoupper($notas[0]->cur_nombre) ?></h3>

    <div class="well">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Asignatura</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Nota</th>

                <th style="width: 36px;"></th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($notas)): ?>
                <?php $i = 1;
                foreach ($notas as $nota): ?>

                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $nota->asi_nombre?> </td>
                    <td><?php echo $nota->alu_nombres?> </td>
                    <td><?php echo $nota->alu_apellidos?> </td>
                    <td><?php echo $nota->alu_asi_nota?> </td>
                    <td>
                        <a href=><i class="icon-pencil"></i></a>
                        <a href="" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                    </td>
                </tr>
                    <?php $i++; endforeach ?>
                <?php endif ?>

            </tbody>
        </table>
    </div>
</div>

<div id='cursos' style="display: <?php if (!isset($curso_alus)) {
    echo 'none';
} ?>">
    <form class="form-horizontal" method="get" action="<?php echo base_url()?>notas/listar_cursos_notas">
        <div class="control-group">
            <label class="control-label" for="inputEmail">Cursos</label>

            <div class="controls">
                <select name='curso'>
                    <?php foreach ($cursos as $curso): ?>
                    <option value="<?php echo $curso->idCursos?>"><?php echo $curso->cur_nombre?></option>
                    <?php endforeach?>
                </select>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">

                <button type="submit" class="btn">Buscar</button>
            </div>
        </div>
    </form>
    <div class="well">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Asignaturas</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Nota</th>

                <th style="width: 36px;"></th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($curso_alus)): ?>
                <?php $i = 1;
                foreach ($curso_alus as $curso_alu): ?>

                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $curso_alu->asi_nombre?> </td>
                    <td><?php echo $curso_alu->alu_nombres?> </td>
                    <td><?php echo $curso_alu->alu_apellidos?> </td>
                    <td><?php echo $curso_alu->alu_asi_nota?> </td>
                    <td>
                        <a href=><i class="icon-pencil"></i></a>
                        <a href="" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                    </td>
                </tr>

                    <?php $i++; endforeach ?>
                <?php endif ?>

            </tbody>


        </table>


    </div>


</div>





<script>


    $(document).ready(function () {
        var boton = $("#optionsRadios");

        $(boton).change(function () {
            if ($('#optionsRadiosAlumno').is(':checked')) {

                $("#alumnos").show();
                $("#cursos").hide();
            } else {

                $("#alumnos").hide();
                $("#cursos").show();
            }
        });

    });


</script>