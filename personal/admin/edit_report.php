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
<html lang="es">
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
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
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
                                <h3 class="panel-title"><i class="fa fa-dashboard"></i> Editar certificados | <span style="color: #333333;"><?php echo $_SESSION["login_user"]; ?></h3>
                            </div>
                            <div class="panel-body">
                               <h3 style="font-size:30px;"><i class="icon-chevron-right"></i> Editar certificado</h3>
                                    <?php
                                
                                    $ida = mysql_real_escape_string(htmlspecialchars($_POST['id']));
                                        $foto = mysql_real_escape_string(htmlspecialchars($_POST['foto']));
                                        $nombre = mysql_real_escape_string(htmlspecialchars($_POST['nombre']));
                                        $apellidos = mysql_real_escape_string(htmlspecialchars($_POST['apellidos']));
                                        $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
                                        $telefono = mysql_real_escape_string(htmlspecialchars($_POST['telefono']));
                                        $status = mysql_real_escape_string(htmlspecialchars($_POST['status']));
                                        $id_alumno = mysql_real_escape_string(htmlspecialchars($_POST['id_alumno']));
                                        $fecha_certificada = mysql_real_escape_string(htmlspecialchars($_POST['fecha_certificada']));
                                        $certificacion = mysql_real_escape_string(htmlspecialchars($_POST['certificacion']));
                                        $edito = mysql_real_escape_string(htmlspecialchars($_POST['edito']));
                                    
                                    if(isset($_POST['delete']))
                                    {
                                        $ida = mysql_real_escape_string(htmlspecialchars($_POST['id']));
                                        $result = mysql_query("DELETE FROM alumnos_certificados WHERE id='$ida'") 
                                        or die(mysql_error());
                                        if (!mysql_query($result))
                                            {
                                                echo "<h2><span class='fa-stack fa-lg'><i class='fa fa-circle fa-stack-2x' style='color:ff0000;'></i><i class='fa fa-check fa-stack-1x fa-inverse'></i></span> El certificado ha sido eliminado correctamente!</h2>";
                                            } else {
                                                die('Error: ' . mysql_error());
                                            }
                                    }
                                    elseif(isset($_POST['update_lugar']))
                                    {
                                        $ida = mysql_real_escape_string(htmlspecialchars($_POST['id']));
                                        $foto = mysql_real_escape_string(htmlspecialchars($_POST['foto']));
                                        $nombre = mysql_real_escape_string(htmlspecialchars($_POST['nombre']));
                                        $apellidos = mysql_real_escape_string(htmlspecialchars($_POST['apellidos']));
                                        $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
                                        $telefono = mysql_real_escape_string(htmlspecialchars($_POST['telefono']));
                                        $status = mysql_real_escape_string(htmlspecialchars($_POST['status']));
                                        $id_alumno = mysql_real_escape_string(htmlspecialchars($_POST['id_alumno']));
                                        $fecha_certificada = mysql_real_escape_string(htmlspecialchars($_POST['fecha_certificada']));
                                        $certificacion = mysql_real_escape_string(htmlspecialchars($_POST['certificacion']));
                                        $edito = mysql_real_escape_string(htmlspecialchars($_POST['edito']));
     
                                        $result = mysql_query("UPDATE alumnos_certificados SET foto='$foto', nombre='$nombre', apellidos='$apellidos', email='$email', telefono='$telefono', status='$status', id_alumno='$id_alumno', fecha_certificada='$fecha_certificada', certificacion='$certificacion', usuario='$edito' WHERE id='$ida'") 
                                        or die(mysql_error());

                                        if (!mysql_query($result))
                                            {
                                                echo "<h2><span class='fa-stack fa-lg'><i class='fa fa-circle fa-stack-2x'></i><i class='fa fa-check fa-stack-1x fa-inverse'></i></span> El certificado ha sido actualizado con &eacute;xito!</h2>";

                                            } else {
                                                die('Error: ' . mysql_error());
                                            }
                                    }
                                    else
                                    {
                                    ?>
                                
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group">
                                          <input type="hidden" name="id" class="form-control" value="<?php echo $ida; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Foto:</label>
                                          <input type="text" name="foto" class="form-control" value="<?php echo $foto; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Nombre:</label>
                                          <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Apellidos:</label>
                                          <input type="text" name="apellidos" class="form-control" value="<?php echo $apellidos; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Email:</label>
                                          <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Tel&eacute;fono:</label>
                                          <input type="text" name="telefono" class="form-control" value="<?php echo $telefono; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Satus:</label>
                                          <input type="text" name="status" class="form-control" value="<?php echo $status; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>ID Alumno:</label>
                                          <input type="text" name="id_alumno" class="form-control" value="<?php echo $id_alumno; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Fecha de validez:</label>
                                          <input type="text" name="fecha_certificada" class="form-control" value="<?php echo $fecha_certificada; ?>" placeholder="Fecha del curso" id="datetimepicker"/>
                                        </div>
                                        <div class="form-group">
                                          <label>Certificaci&oacute;n:</label>
                                          <input type="text" name="certificacion" class="form-control" value="<?php echo $certificacion; ?>" placeholder="Nombbbbb" id="datetimepicker"/>
                                          <input type="hidden" name="edito" class="form-control" value="<?php echo $_SESSION["login_user"]; ?>">
                                        </div>
                                        <input type="submit" name="update_lugar" class="btn btn-success" value="ACTUALIZAR INFORMACION">
                                    </form>

                                    <?php
                                    }
                                    ?>
                                    <h2 style="position:relative;float:left; margin-right:20px;"><a class="btn btn-success" href = "administrator.php">Administrador</a></h2>
                                    <h2 style="position:relative;float:left;"><a class="btn btn-danger" href = "logout.php">Salir</a></h2>
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
    <script src="js/jquery.datetimepicker.full.min.js"></script>
    <script>/*
        window.onerror = function(errorMsg) {
            $('#console').html($('#console').html()+'<br>'+errorMsg)
        }*/
        $.datetimepicker.setLocale('es');
        $('#datetimepicker_format').datetimepicker({value:'2015/04/15 05:03', format: $("#datetimepicker_format_value").val()});
        console.log($('#datetimepicker_format').datetimepicker('getValue'));
        $("#datetimepicker_format_change").on("click", function(e){
            $("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({format: $("#datetimepicker_format_value").val()});
        });
        $("#datetimepicker_format_locale").on("change", function(e){
            $.datetimepicker.setLocale($(e.currentTarget).val());
        });
        $('#datetimepicker').datetimepicker({
        dayOfWeekStart : 1,
        lang:'es',
        disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
        startDate:	'2016/01/01'
        });
        $('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});
    </script>
</body>
</html>
