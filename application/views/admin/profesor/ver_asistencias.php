<div class="well">

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>nombre del alumno</th>
            <?php $namep='';$name=''; foreach($asistencias as $asi1){ ?>
                <?php $name=$asi1->alu_nombres;  ?>
                <?php if($name==$namep||$namep==''){ ?>
                <th><?php echo $asi1->asi_fecha; ?></th>
                <?php }else{?>
                    <?php break;?>
                <?php }
                    $namep=$name;
                ?>

            <?php } ?>
        </tr>

        </thead>
        <tbody>
        <?php $i=1;$namep='';$name=''; foreach($asistencias as $asi1){ ?>
            <?php $name=$asi1->alu_nombres;  ?>
            <?php if($name!=$namep){ ?>
                <?php if($namep!=''){?>
                    </tr>
                <?php }?>
                <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $name; $i++;$namep='';?></td>

            <?php } ?>
            <?php if($name==$namep||$namep==''){ ?>
                <td><?php if($asi1->asi_asistio) echo "asistio"; else  echo "no asistio"; ?></td>
                <?php }
            ?>
            <?php $namep=$name;?>
        <?php } ?>
        <?php if(sizeof($asistencias)>0){?>
                    </tr>
         <?php }?>


        </tbody>
    </table>
</div>