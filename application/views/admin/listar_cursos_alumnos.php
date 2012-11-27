
<div>
    <label>Cursos</label>

    <form method="get" action="<?php echo base_url() ?>cursos_abiertos/listar_cursos_alumnos">

        <select id='miselect' name='curso'>

            <?php foreach ($cursos as $curso): ?>
            <?php if ($_GET['curso'] == $curso->idCursos): ?>

                <option value="<?php echo $curso->idCursos ?>"
                        selected="selected"><?php echo $curso->cur_nombre?></option>
                <?php else: ?>
                <option value="<?php echo $curso->idCursos ?>"><?php echo $curso->cur_nombre?></option>
                <?php endif ?>

            <?php endforeach ?>
        </select>
        <label>Asignatura</label>
        <select name='asig'>

            <?php foreach ($asignaturas as $asignatura): ?>

            <?php if ($_GET['asig'] == $asignatura->idAsignatura): ?>
                <option value="<?php echo $asignatura->idAsignatura?>" selected="selected"><?php echo $asignatura->asi_nombre?></option>
                <?php else: ?>
                <option value="<?php echo $asignatura->idAsignatura?>"><?php echo $asignatura->asi_nombre?></option>
                <?php endif ?>
            <?php endforeach ?>
        </select>
        <div class="control-group">
            <div class="btn-toolbar">
                <button type="submit" class="btn btn-primary">Buscar</button>

            </div>

        </div>


    </form>

</div>
<div>


</div>
<div class="well">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>semestre</th>
            <th>promedio</th>

            <th style="width: 36px;"></th>
        </tr>
        </thead>
        <tbody>

        <?php $i = 1; foreach ($alumnos as $alumno): ?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $alumno->alu_nombres?> </td>
            <td>0</td>
            <td>0</td>

            <td>
                <a href=><i class="icon-pencil"></i></a>
                <a href="" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
            </td>
        </tr>
            <?php $i++; endforeach ?>


        </tbody>
    </table>
</div>
<!--<div class="pagination" style="margin-left: 600px">
    <ul>
        <li><a href="#">Prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Next</a></li>
    </ul>
</div> -->
<script>

    x = $(document)
    x.ready(function () {
        y = $("#miselect")

        //var mitexto = $('y option:selected').text();
        y.change(function () {

            $(location).attr('href', '<?php echo base_url()?>cursos_abiertos/listar_cursos_alumnos?curso=' + y.val());

        });

    })

</script>