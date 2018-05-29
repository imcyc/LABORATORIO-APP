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
    <title>Crear Curso - ENSE&Ntilde;ANZA IMCYC</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
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
        
        <?php include "inc/menu.php" ?>
        
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-dashboard"></i> Editar cursos | <span style="color: #333333;"><?php echo $_SESSION["login_user"]; ?></h3>
                            </div>
                            <div class="panel-body">
                               <h3 style="font-size:30px;"><i class="icon-chevron-right"></i> Editar curso</h3>
                                    <?php
                                    $id = mysql_real_escape_string(htmlspecialchars($_POST['id']));
                                    $nombre = mysql_real_escape_string(htmlspecialchars($_POST['nombre']));
                                    $fecha = mysql_real_escape_string(htmlspecialchars($_POST['fecha']));
                                    $mes = mysql_real_escape_string(htmlspecialchars($_POST['mes']));
                                    $horas = mysql_real_escape_string(htmlspecialchars($_POST['horas']));
                                    $objetivo = mysql_real_escape_string(htmlspecialchars($_POST['objetivo']));
                                    $temario = mysql_real_escape_string(htmlspecialchars($_POST['temario']));
                                    $sede = mysql_real_escape_string(htmlspecialchars($_POST['sede']));
                                    $horario = mysql_real_escape_string(htmlspecialchars($_POST['horario']));
                                    $incluye = mysql_real_escape_string(htmlspecialchars($_POST['incluye']));
                                    $info = mysql_real_escape_string(htmlspecialchars($_POST['info']));
                                    $certificacion = mysql_real_escape_string(htmlspecialchars($_POST['certificacion']));
                                    $precio = mysql_real_escape_string(htmlspecialchars($_POST['precio']));
                                    if(isset($_POST['delete']))
                                    {
                                        $ida = mysql_real_escape_string(htmlspecialchars($_POST['id']));
                                        $result = mysql_query("DELETE FROM ensenanza WHERE id='$ida'") 
                                        or die(mysql_error());
                                        if (!mysql_query($result))
                                            {
                                                echo "El curso ha sido eliminado correctamente!";
                                            } else {
                                                die('Error: ' . mysql_error());
                                            }
                                    }
                                    elseif(isset($_POST['update_lugar']))
                                    {
                                        $ida = mysql_real_escape_string(htmlspecialchars($_POST['id']));
                                        $nombre = mysql_real_escape_string(htmlspecialchars($_POST['nombre']));
                                        $fecha = mysql_real_escape_string(htmlspecialchars($_POST['fecha']));
                                        $mes = mysql_real_escape_string(htmlspecialchars($_POST['mes']));
                                        $horas = mysql_real_escape_string(htmlspecialchars($_POST['horas']));
                                        $objetivo = mysql_real_escape_string(htmlspecialchars($_POST['objetivo']));
                                        $temario = mysql_real_escape_string(htmlspecialchars($_POST['temario']));
                                        $sede = mysql_real_escape_string(htmlspecialchars($_POST['sede']));
                                        $horario = mysql_real_escape_string(htmlspecialchars($_POST['horario']));
                                        $incluye = mysql_real_escape_string(htmlspecialchars($_POST['incluye']));
                                        $info = mysql_real_escape_string(htmlspecialchars($_POST['info']));
                                        $certificacion = mysql_real_escape_string(htmlspecialchars($_POST['certificacion']));
                                        $precio = mysql_real_escape_string(htmlspecialchars($_POST['precio']));
                                        
                                        $result = mysql_query("UPDATE ensenanza SET nombre='$nombre', fecha='$fecha', mes='$mes', precio='$precio' WHERE id='$ida'") 
                                        or die(mysql_error());

                                        if (!mysql_query($result))
                                            {
                                                echo "El curso ha sido actualizado con exito!";

                                            } else {
                                                die('Error: ' . mysql_error());
                                            }
                                    }
                                    else
                                    {
                                    ?>


                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group">
                                          <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Nombre:</label>
                                          <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Día(s):</label>
                                          <input type="text" name="fecha" class="form-control" value="<?php echo $fecha; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Mes:</label>
                                          <input type="text" name="mes" class="form-control" value="<?php echo $mes; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Precio:</label>
                                          <input type="text" name="precio" class="form-control" value="<?php echo $precio ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Horas:</label>
                                          <input type="text" name="horas" class="form-control" value="<?php echo $horas; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Objetivo:</label>
                                          <input type="text" name="objetivo" class="form-control" value="<?php echo $objetivo; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Temario:</label>
                                          <input type="text" name="temario" class="form-control" value="<?php echo $temario; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Sede:</label>
                                          <input type="text" name="sede" class="form-control" value="<?php echo $sede; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Horario:</label>
                                          <input type="text" name="horario" class="form-control" value="<?php echo $horario; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Incluye:</label>
                                          <input type="text" name="incluye" class="form-control" value="<?php echo $incluye; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Info:</label>
                                          <input type="text" name="info" class="form-control" value="<?php echo $info; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Certificaci&oacute;n:</label>
                                          <input type="text" name="horario" class="form-control" value="<?php echo $certificacion; ?>">
                                        </div>
                                        <input type="submit" name="update_lugar" class="btn btn-success" value="ACTUALIZAR INFORMACION">
                                    </form>

                                    <?php
                                    }
                                    ?>
                                    <h2><a class="btn btn-success" href = "administrator.php">Administrador</a></h2>
                                    <h2><a class="btn btn-danger" href = "logout.php">Sign Out</a></h2>
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

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox').fancybox();
        });
    </script>
   
</body>
</html>
