
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
                    <li><a href="<?php echo base_url()?>alumno/listar_alumno"><i class="icon-home icon-white"></i> Registrar Alumnos</a></li>
                </ul>
                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="#"><i class="icon-home icon-white"></i> Registrar Docentes</a></li>
                </ul>
                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="<?php echo base_url()?>cursos_abiertos/listar_cursos_abiertos"><i class="icon-home icon-white"></i> Registrar Cursos</a></li>
                </ul>
                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="#"><i class="icon-home icon-white"></i> Registrar Asignaturas</a></li>
                </ul>
                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="#"><i class="icon-home icon-white"></i> Registrar Asistencia</a></li>
                </ul>
                <div class="pull-right">
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, User <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/user/preferences"><i class="icon-cog"></i> Preferences</a></li>
                                <li><a href="/help/support"><i class="icon-envelope"></i> Contact Support</a></li>
                                <li class="divider"></li>
                                <li><a href="/auth/logout"><i class="icon-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="<?php echo base_url();?>admin/logout">logout</a>