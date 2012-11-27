<div class="btn-toolbar">
    <a href="<?php echo base_url();?>registro/registrar_profesor" class="btn btn-primary">
        Registrar Docente
    </a>
</div>
<div class="well">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>nombres</th>
            <th>apellidos</th>
            <th>usuario</th>
            <th>resetear password</th>

        </tr>
        </thead>
        <tbody>

        <?php $i = 1; foreach($profesores as $profesor): ?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $profesor->doc_nombres?> </td>
            <td><?php echo $profesor->doc_apellidos?> </td>
            <td><?php echo $profesor->usu_usuario?> </td>
            <td>
                <?php echo $profesor->usu_password?> <a href="<?php echo base_url();?>registro/cambiar_password?user=<?php echo $profesor->idUsuarios?>&usuario=<?php echo $profesor->usu_usuario?>"><i class="icon-pencil"></i> </a>
            </td>
        </tr>
            <?php $i++; endforeach ?>
        </tbody>
    </table>
</div>