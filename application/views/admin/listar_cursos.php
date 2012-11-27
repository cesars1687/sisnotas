<div class="btn-toolbar">
    <a href="<?php echo base_url()?>cursos/registrar_curso" class="btn btn-primary">
        Nuevo Curso
    </a>
</div>
<div>


    <div class="well">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Curso</th>
                <th>Creditos</th>


                <th style="width: 36px;"></th>
            </tr>
            </thead>
            <tbody>


            <?php if (isset($cursos)): ?>
                <?php $i=1; foreach ($cursos as $curso): ?>
                <tr>

                    <td><?php echo $i?></td>
                    <td><?php echo $curso->cur_nombre?> </td>
                    <td><?php echo $curso->cur_creditos?></td>

                    <td>

                        <a href="<?php echo base_url()?>cursos/editar_curso?id=<?php echo $curso->idCursos?>" id='boton' class="reg_alu" ><i class="icon-pencil"></i></a>
                        <a href="<?php echo base_url()?>cursos/eliminar_curso?id=<?php echo $curso->idCursos?>" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                    </td>

                </tr>
                    <?php $i++; endforeach ?>
                <?php endif?>


            </tbody>
        </table>
    </div>


</div>
<div>


</div>

<!-- Button to trigger modal
<a href="#" role="button" class="btn" id='boton'  >Launch demo modal</a> -->
