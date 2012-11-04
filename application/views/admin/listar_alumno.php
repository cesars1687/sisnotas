<div class="btn-toolbar">
    <a href="registrar_alumno" class="btn btn-primary">
        New User
    </a>
    <button class="btn">Import</button>
    <button class="btn">Export</button>
</div>
<div class="well">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th style="width: 36px;"></th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($alumnos as $alumno):?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $alumno->alu_nombres ?></td>
            <td><?php echo $alumno->alu_apellidos?></td>
            <td>the_mark7</td>
            <td>
                <a href=><i class="icon-pencil"></i></a>
                <a href="<?php echo base_url() ?>alumno/eliminar_alumno?id=<?php echo $alumno->idAlumnos ?>" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
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