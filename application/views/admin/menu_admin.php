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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i>Ver
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>alumno/listar_alumno">Alumnos</a></li>
                            <li><a href="<?php echo base_url()?>registro/ver_docentes">Docentes</a></li>
                            <li><a href="<?php echo base_url()?>notas/listar_cursos_aod">
                                Aprobados y Desaprobados</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="<?php echo base_url()?>cursos_abiertos/listar_cursos_alumnos"><i
                            class="icon-file icon-white"></i> Reportes</a></li>
                </ul>

                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="<?php echo base_url()?>notas"><i class="icon-book icon-white"></i> Filtrar notas</a>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-home icon-white"></i>Cursos
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()?>cursos/listar_cursos">Mostrar Cursos</a></li>
                            <li><a href="<?php echo base_url()?>cursos_abiertos/listar_cursos_abiertos">Cursos
                                Abiertos</a></li>
                        </ul>
                    </li>

                </ul>


                <div class="pull-right">
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="<?php echo base_url();?>admin/logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
