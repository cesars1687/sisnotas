<div class="span6">

    <form class="form-horizontal" action="<?php  echo isset($curso) ? base_url().'cursos/form_editar_curso?id='.$curso[0]->idCursos:  base_url().'cursos/form_registrar_curso'   ?>"
          method="POST" enctype="multipart/form-data">

        <div class="control-group">
            <label class="control-label" for="">Nombre del Curso</label>

            <div class="controls">
                <input type="text" id="" name="curso" placeholder="Curso.." required style="height: 30px"
                       value = <?php echo isset($curso)? $curso[0]->cur_nombre : null ?> >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="">Creditos</label>

            <div class="controls">
                <input type="text" id="" name="creditos" required placeholder="Creditos.." style="height: 30px"
                       value = <?php echo isset($curso)? $curso[0]->cur_creditos : null ?> >
            </div>
        </div>



        <div class="control-group">
            <div class="controls">
                <input type="submit" value="<?php echo isset($curso)? 'Guardar' : 'Registrar' ?>" class="btn btn-primary">
            </div>
        </div>


    </form>

</div>