    <style>
       #logo{
           width: 1000px;
           height: 200px;
           background-image: url("<?php echo base_url()?>media/images/logo_uigv.jpg");
           background-repeat: no-repeat;
           border: solid 1px;
       }
       p{
           color:#2071b2;
           font-family: "times new roman;
       }
    </style>
    <img src="<?php echo base_url()?>media/images/logo_uigv.jpg">

        <div class="well">
            <p><?php echo strtoupper($notas[0]->cur_nombre) ?></p>
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
                    </tr>
                        <?php $i++; endforeach ?>
                    <?php endif ?>

                </tbody>
            </table>

        </div>

