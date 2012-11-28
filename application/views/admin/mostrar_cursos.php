<div class="btn-toolbar">
    <a href="registrar_curso" class="btn btn-primary">
        Nuevo Curso
    </a>
    <button class="btn">Import</button>
    <button class="btn">Export</button>
</div>
<div>
    <label>Cursos:</label>
    <form method="get" action="<?php echo base_url() ?>cursos_abiertos/listar_cursos_alumnos">

        <select id = 'myselect' name='curso'>
            <?php foreach($cursos as $curso):?>
            <option value="<?php echo $curso->idCursos ?>"><?php echo $curso->cur_nombre?></option>

            <?php endforeach ?>
        </select>
        <label>Asignatura:</label>
        <select name='asig'>
            <?php foreach($asignaturas as $asignatura):?>
            <option value="<?php echo $asignatura->idAsignatura ?>"><?php echo $asignatura->asi_nombre?></option>

            <?php endforeach ?>
        </select>
        <input type="submit" value="Go">
    </form>



</div>
<div>


</div>
<div class="well">

</div>

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