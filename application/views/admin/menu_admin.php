
<div class="navbar navbar-inverse nav">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/">Sistema Notas</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="<?php echo base_url()?>alumno/listar_alumno"><i class="icon-home icon-white"></i> Ver Alumnos</a></li>
                </ul>
                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="<?php echo base_url()?>registro/ver_docentes"><i class="icon-home icon-white"></i> Ver Docentes</a></li>
                </ul>
                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="<?php echo base_url()?>cursos_abiertos/listar_cursos_alumnos"><i class="icon-home icon-white"></i> Reportes</a></li>
                </ul>
                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="<?php echo base_url()?>notas/listar_cursos_aod"><i class="icon-home icon-white"></i> Ver aprobados y Desaprobados</a></li>
                </ul>
                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="<?php echo base_url()?>notas"><i class="icon-home icon-white"></i> Filtrar notas</a></li>
                </ul>
                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="<?php echo base_url()?>cursos/listar_cursos"><i class="icon-home icon-white"></i>Mostrar Cursos</a></li>
                </ul>
                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="<?php echo base_url()?>cursos_abiertos/listar_cursos_abiertos"><i class="icon-home icon-white"></i>Mostrar Cursos Abiertos</a></li>
                </ul>

                <div class="pull-right">
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="<?php echo base_url();?>admin/logout">logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
