<div class="well">
<form method="post" action="<?php echo base_url();?>registro/guardar_profesor" class="form-horizontal">
    <fieldset>
        <div id="legend" class="">
            <legend class="">Registro docente</legend>
        </div>
        <div class="control-group">

            <!-- Text input-->
            <label class="control-label" for="input01">Nombres</label>
            <div class="controls">
                <input type="text" style="height: 30px;" name="nombres" placeholder="nombres completos" class="input-xlarge" id="acpro_inp1">
                <p class="help-block">ejm: Pedro Armando</p>
            </div>
        </div>

        <div class="control-group">

            <!-- Text input-->
            <label class="control-label" for="input01">Apellidos</label>
            <div class="controls">
                <input type="text" style="height: 30px;" name="apellidos" placeholder="apellidos completos" class="input-xlarge" id="acpro_inp1">
                <p class="help-block">ejm: Benitas Contreras</p>
            </div>
        </div>



        <div class="control-group">

            <!-- Text input-->
            <label class="control-label" for="input01">usuario</label>
            <div class="controls">
                <input type="text"  style="height: 30px;" name="usuario" placeholder="correo institucional" class="input-xlarge" id="acpro_inp1">
                <p class="help-block">ejm : docente152@upc.edu.pe</p>
            </div>
        </div>





        <div class="control-group">
            <!-- Form Actions -->
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Registrar</button>

            </div>
        </div>

    </fieldset>
</form>
</div>