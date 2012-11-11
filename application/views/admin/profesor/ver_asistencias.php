<div class="well">

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>nombre del alumno</th>
            <?php $namep='';$name=''; foreach($asistencias as $asi1){ ?>
                <? $name=$asi1->alu_nombres;  ?>
                <? if($name==$namep||$namep==''){ ?>
                <th><? echo $asi1->asi_fecha; ?></th>
                <? }else{?>
                    <? break;?>
                <? }
                    $namep=$name;
                ?>

            <?php } ?>
        </tr>

        </thead>
        <tbody>
        <?php $i=1;$namep='';$name=''; foreach($asistencias as $asi1){ ?>
            <? $name=$asi1->alu_nombres;  ?>
            <? if($name!=$namep){ ?>
                <? if($namep!=''){?>
                    </tr>
                <?}?>
                <tr>
                <td><? echo $i;?></td>
                <td><? echo $name; $i++;$namep='';?></td>

            <? } ?>
            <? if($name==$namep||$namep==''){ ?>
                <td><? if($asi1->asi_asistio) echo "asistio"; else  echo "no asistio"; ?></td>
                <? }
            ?>
            <? $namep=$name;?>
        <?php } ?>
        <? if(sizeof($asistencias)>0){?>
                    </tr>
         <?}?>


        </tbody>
    </table>
</div>