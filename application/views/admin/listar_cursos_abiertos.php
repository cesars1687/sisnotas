<div class="btn-toolbar">
    <a href="<?php echo base_url()?>cursos/registrar_curso" class="btn btn-primary">
        Nuevo Curso
    </a>
</div>
<div>
    <label>Cursos:</label>

    <form method="post" action="<?php echo base_url() ?>cursos_abiertos/listar_cursos">

        <select id='myselect' name='curso'>
            <?php foreach ($cursos as $curso): ?>
            <option value="<?php echo $curso->idCursos ?>"><?php echo $curso->cur_nombre?></option>

            <?php endforeach ?>
        </select>

        <div class="btn-toolbar">
            <input type="submit" value="Buscar" class="btn btn-primary">
        </div>

    </form>

    <div class="well">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Asignatura</th>
                <th>Agregar</th>


                <th style="width: 36px;"></th>
            </tr>
            </thead>
            <tbody>


            <?php if (isset($asignaturas)): ?>
                <?php foreach ($asignaturas as $asignatura): ?>
                <tr>

                    <td>0</td>
                    <td><?php echo $asignatura->asi_nombre?> </td>
                    <td><a href="<?php echo base_url()?>alumno/alumnos_no_asig?id=<?php echo $asignatura->idAsignatura?>">agregar alumno</a></td>

                    <td>

                        <a href="#" id='boton' class="reg_alu" ><i class="icon-pencil"></i></a>
                        <a href="" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                    </td>

                </tr>
                    <?php endforeach ?>
                <?php endif?>


            </tbody>
        </table>
    </div>


</div>
<div>


</div>
<div class="well">

</div>
<!-- Button to trigger modal
<a href="#" role="button" class="btn" id='boton'  >Launch demo modal</a> -->

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
        <div class="modal-body">
            <div class="row-fluid">
                <div class="span12">
                    <div class="span2">
                        <div class="logowrapper">
                            <img id="img_prev" style="height:200px; max-width: 200px" class="logoicon" src="<?php echo base_url()?>media/images/silueta.jpg" alt="App Logo"/>
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
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.reg_alu').click(function(){
            $('#myModal').modal('show');
        });

    })

</script>
