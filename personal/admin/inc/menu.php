<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand"><img src="images/logo.png" alt="IMCYC" title="IMCYC" width="170" /></a>-->
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
             
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION["login_user"]; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!--<li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>-->
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                
                <ul class="nav navbar-nav side-nav">
                    <a class="navbar-brand" style="margin-bottom:10px; margin-top:10px;"><img src="images/logo.png" alt="IMCYC" title="IMCYC" width="170" /></a>
                    <li style="border-top:1px solid #333333;border-bottom:1px solid #555;">
                        <a href="administrator.php"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-dashboard fa-stack-1x fa-inverse"></i></span> Alumnos Certificados</a>
                    </li>
                    <li style="border-bottom:1px solid #555;">
                        <a href="crear_alumno.php"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pencil fa-stack-1x fa-inverse"></i></span> Agregar Alumno</a>
                    </li>
                    <li style="border-bottom:1px solid #555;">
                        <a href="foros_admin_alumno.php"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i></span> Foros de discusión</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>