<div class="span12">
    <div class="span2">
        <div class="logowrapper" style="width: 200px">
            <img id="img_prev" style="height:200px; max-width: 200px" class="logoicon"
                 src="<?php if (!isset($alumno)) {
                     echo base_url() . 'media/images/silueta.jpg';
                 } else {
                     echo $alumno[0]->alu_foto;
                 }

                 ?>"  alt=" App Logo"/>
        </div>
    </div>
    <div class="span6">


        <!--<form class="form-horizontal"
              action="<?php  //echo isset($alumno) ? base_url() . 'alumno/form_editar_alumno?id=' . $alumno[0]->idAlumnos : base_url() . 'alumno/form_registrar_alumno'   ?>"
              method="POST" enctype="multipart/form-data">   -->
        <?php
        $atributosF = array('class' => 'form-horizontal');

        ?>

        <?php if (isset($alumno)) {
        echo form_open_multipart(base_url() . 'alumno/form_editar_alumno?id=' . $alumno[0]->idAlumnos, $atributosF);
    } else {
        echo form_open_multipart(base_url() . 'alumno/form_registrar_alumno', $atributosF);
    }?>



        <div class="control-group">
            <label class="control-label" for="">Nombres</label>

            <div class="controls">
                <input type="text" id="" name="nombres" placeholder="Nombres.." style="height: 30px"
                       value= <?php echo isset($alumno) ? $alumno[0]->alu_nombres : null ?>>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="">Apellidos</label>

            <div class="controls">
                <input type="text" id="" name="apellidos" placeholder="Apellidos.."
                       style="height: 30px" required=""
                       value="<?php echo isset($alumno) ? $alumno[0]->alu_apellidos : null ?>">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="">Codigo</label>

            <div class="controls">
                <input type="text" id="" name="codigo" placeholder="Codigo.."
                       style="height: 30px" required=""
                       value="<?php echo isset($alumno) ? $alumno[0]->alu_codigo : null ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="">Foto</label>

            <div class="controls">
                <!--<input type="file" name="userfile" size="30" >  -->
                <?php //echo form_upload('userfile') ?>
                <input type="file" id=""

                       name="userfile"
                       size="50"
                       onchange="readURL(this);"/>

            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <input type="submit" value="<?php echo isset($alumno) ? 'Guardar' : 'Registrar' ?>" class="btn">
            </div>
        </div>


        </form>

    </div>
</div>
</div>