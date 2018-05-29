<?php
session_start();
if(!isset($_SESSION["login_user"]))
{
    header("Location: index.php");
}
$user = $_SESSION["login_user"];

include "admin/dbconfig.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administraci&oacute;n ENSE&Ntilde;ANZA IMCYC</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="css/mio.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include "inc/menu.php" ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-dashboard"></i> Bienvenido <span style="color: #333333;"><?php echo $_SESSION["login_user"]; ?></h3>
                                <h3 style="font-size:30px;padding-bottom:20px;"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-cogs fa-stack-1x fa-inverse"></i></span> Administraci&oacute;n certificaciones IMCYC</h3>
                            </div>
                            <div class="panel-body">
                                <?php
                                    $result = mysql_query("SELECT * FROM alumnos_certificados ORDER BY apellidos ASC") 
                                    or die(mysql_error());  

                                    echo "<table class='table table-striped'>";
                                    echo "<thead><tr><th>ID</th><th>NOMBRE</th><th>APELLIDOS</th><th>CERTIFICACI&Oacute;N</th><th>STATUS</th><th>FECHA</th><th></th><th></th></tr></thead>";
                                    while($row = mysql_fetch_array( $result )) {
                                    ?>

                                    <tbody>
                                    <form action="edit_report.php" method="POST">
                                        <tr>
                                            <td>
                                                <input type="hidden" name="id" style="width: 20px; border: none; background: none;" value="<?php echo $row['id']; ?>" />
                                                <p><?php echo $row['id_alumno']; ?></p>
                                                <input type="hidden" name="id_alumno" value="<?php echo $row['id_alumno']; ?>" />
                                            </td>
                                            
                                            <td>
                                                <p><?php echo $row['nombre']; ?></p>
                                                <input type="hidden" name="nombre" value="<?php echo $row['nombre']; ?>" />
                                            </td>
                                            <td>
                                                <p><?php echo $row['apellidos']; ?></p>
                                                <input type="hidden" name="apellidos" value="<?php echo $row['apellidos']; ?>" />
                                            </td>
                                            <td>
                                                <p><?php echo $row['certificacion']; ?></p>
                                                <input type="hidden" name="certificacion" value="<?php echo $row['certificacion']; ?>" />
                                            </td>
                                            <td>
                                                <p><?php echo $row['status']; ?></p>
                                                <input type="hidden" name="status" value="<?php echo $row['status']; ?>" />
                                            </td>
                                            <td>
                                                <p>
                                                <?php 
                                                    $fecha = $row["fecha_certificada"];
                                                    $time = strtotime($fecha);
                                                    $myFormatForView = date("d.m.y", $time);
                                                    echo $myFormatForView 
                                                ?>
                                                </p>
                                                <input type="hidden" name="fecha_certificada" value="<?php echo $row['fecha_certificada']; ?>" />
                                            </td>
                                            <td>
                                                <div align="center">
                                                    <input type="submit" name="update" class="btn-warning" value="EDITAR ALUMNO" />
                                                </div>
                                            </td>
                                            <td>
                                                <div align="center">
                                                    <input type="submit" name="delete" class="btn-danger" value="ELIMINAR ALUMNO" />
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                    </tbody>
                                    <?php
                                    } 
                                    echo "</table>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
