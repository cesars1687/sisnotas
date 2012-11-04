<div class="btn-toolbar">
    <a href="registrar_curso" class="btn btn-primary">
        New Curso
    </a>
    <button class="btn">Import</button>
    <button class="btn">Export</button>
</div>
<div class="well">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>curso</th>
            <th>año</th>
            <th>semestre</th>
            <th>promedio</th>

            <th style="width: 36px;"></th>
        </tr>
        </thead>
        <tbody>

        <?php $i=1; foreach($cursos_abiertos as $curso1):?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php
                $dato = $this->db->get_where('cursos',array('idCursos' => $curso1->cursos_idCursos))->result();
                echo $dato[0]->cur_nombre

                ?></td>
            <td><?php echo $curso1->cur_abi_año?></td>
            <td><?php echo $curso1->cur_abi_semestre?></td>
            <td><?php echo $curso1->cur_abi_promedio?></td>

            <td>
                <a href=><i class="icon-pencil"></i></a>
                <a href="" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
            </td>
        </tr>
            <?php $i++; endforeach ?>


        </tbody>
    </table>
</div>
<div class="pagination">
    <ul>
        <li><a href="#">Prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Next</a></li>
    </ul>
</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>