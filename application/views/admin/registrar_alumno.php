<div id="betaModal" class="">
    <div class="modal-header">

        <h3>Registro de Alumnos</h3>
    </div>
    <div class="modal-body">
        <div class="row-fluid">
            <div class="span12">
                <div class="span2">
                    <div class="logowrapper">
                        <img id="img_prev" class="logoicon" src="" alt="App Logo"/>
                    </div>
                </div>
                <div class="span6">


                    <form class="form-horizontal" action="<?php echo base_url()?>alumno/form_registrar_alumno"
                          method="POST" enctype="multipart/form-data">

                        <div class="control-group">
                            <label class="control-label" for="">Nombres</label>

                            <div class="controls">
                                <input type="text" id="" name="nombres" placeholder="Nombres.." style="height: 30px">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="">Apellidos</label>

                            <div class="controls">
                                <input type="text" id="" name="apellidos" placeholder="Apellidos.."
                                       style="height: 30px">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="">Foto</label>

                            <div class="controls">
                                <!--<input type="file" name="userfile" size="30" >  -->
                                 <input type="file" id=""

                                        name="userfile"
                                        size="50"
                                        onchange="readURL(this);"/>

                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <input type="submit" value="upload" class="btn">
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <p><i>Lastest Update on October 2nd, 2012</i></p>
    </div>
</div>

