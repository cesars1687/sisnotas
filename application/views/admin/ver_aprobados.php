<div class="well">
    <form action="" >
        <div class="control-group">
            <label class="control-label" for="curso">Cursos</label>
            <div class="controls">
                <select name="curso" id="curso">
                    <?php foreach($cursos as $curso): ?>
                    <option value="<?php echo $curso->idCurso_abierto;?>"><?php echo $curso->cur_nombre;?></option>
                    <?php  endforeach ?>
                </select>
            </div>
        </div>
        <div class="control-group">
            <!-- Form Actions -->
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Consultar</button>

            </div>
        </div>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>nombres</th>
            <th>apellidos</th>
            <th>nota final</th>
            <th>estado</th>

        </tr>
        </thead>
        <tbody>

        <?php $i = 1;$nota=0;$band=0;$nom='';$nom_past='';
        foreach($alumnos as $alumno): ?>

        <?php  $nom=$alumno->alu_nombres;
            if($nom_past==''||$nom!=$nom_past){?>
            <?php if($nom_past!=''){?>
                <td><?php if($band!=0){ echo $notaf=$nota/$band;}?> </td>
                <td>
                    <?php if($notaf>10.5){ echo "aprobado"; }else{ echo "desaprobad"; }
                    $nota=0;$band=0;
                    ?>
                </td>
                </tr>

            <?php } ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $alumno->alu_nombres?> </td>
            <td><?php echo $alumno->alu_apellidos; $i++;?>  </td>
        <?php }  ?>
            <?php $nota+= $alumno->alu_asi_nota;$band++;
            $nom_past=$nom;
        endforeach ?>
        <?php if(sizeof($alumnos)>0){?>
            <td><?php echo $notaf=$nota/$band?> </td>
            <td>
                <?php if($notaf>10.5){ echo "aprobado"; }else{ echo "desaprobado , debe llevarse en otro curso"; }
                $nota=0;$band=0;
                ?>
            </td>
                </tr>

            <?php }?>
        </tbody>
    </table>
</div>