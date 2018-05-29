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
                                <h3 class="panel-title"><i class="fa fa-dashboard"></i> Crear curso | <span style="color: #333333;"><?php echo $_SESSION["login_user"]; ?></h3>
                            </div>
                            <div class="panel-body">
                               <h3 style="font-size:30px;"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-flag fa-stack-1x fa-inverse"></i></span> Crear un curso nuevo</h3>
                                    <?php
                                    if(isset($_POST['submit']))
                                    {
                                        $nombre = mysql_real_escape_string(htmlspecialchars($_POST['nombre']));
                                        $fecha = mysql_real_escape_string(htmlspecialchars($_POST['fecha']));
                                        $dias = mysql_real_escape_string(htmlspecialchars($_POST['dias']));
                                        $mes = mysql_real_escape_string(htmlspecialchars($_POST['mes']));
                                        $precio = mysql_real_escape_string(htmlspecialchars($_POST['precio']));
                                        $horas = mysql_real_escape_string(htmlspecialchars($_POST['horas']));
                                        $objetivo = mysql_real_escape_string(htmlspecialchars($_POST['objetivo']));
                                        $temario = mysql_real_escape_string(htmlspecialchars($_POST['temario']));
                                        $sede = mysql_real_escape_string(htmlspecialchars($_POST['sede']));
                                        $horario = mysql_real_escape_string(htmlspecialchars($_POST['horario']));
                                        $incluye = mysql_real_escape_string(htmlspecialchars($_POST['incluye']));
                                        $info = mysql_real_escape_string(htmlspecialchars($_POST['info']));
                                        $certificacion = mysql_real_escape_string(htmlspecialchars($_POST['certificacion']));
                                        $imagen = mysql_real_escape_string(htmlspecialchars($_POST['imagen']));
                                        
                                        $result = mysql_query("INSERT INTO ensenanza (nombre, fecha, dias, mes, precio, horas, objetivo, temario, sede, horario, incluye, info, certificacion, imagen) VALUES ('$nombre', '$fecha', '$dias', '$mes', '$precio', '$horas', '$objetivo', '$temario', '$sede', '$horario', '$incluye', '$info', '$certificacion', '$imagen')") 
                                        or die(mysql_error());
                                        if (!mysql_query($result))
                                            {
                                                echo "<h2><span class='fa-stack fa-lg'><i class='fa fa-circle fa-stack-2x'></i><i class='fa fa-check fa-stack-1x fa-inverse'></i></span> El curso ha sido creado con exito!</h2>";
                                            } else {
                                                die('Error: ' . mysql_error());
                                            }
                                    }
                                    else
                                    {
                                    ?>

                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                          <label>Nombre:</label>
                                          <input type="text" name="nombre" class="form-control" placeholder="Nombre del curso">
                                        </div>
                                        <div class="form-group">
                                          <label>Fecha:</label>
                                          <input type="text" name="fecha" class="form-control" placeholder="Fecha del curso" id="datetimepicker"/>
                                        </div>
                                        <div class="form-group">
                                          <label>Día(s):</label>
                                          <input type="text" name="dias" class="form-control" placeholder="Dia(s) del curso">
                                        </div>
                                        <div class="form-group">
                                          <label>Mes:</label>
                                          <input type="text" name="mes" class="form-control" placeholder="Mes del curso">
                                        </div>
                                        <div class="form-group">
                                          <label>Precio:</label>
                                          <input type="text" name="precio" class="form-control" placeholder="Precio del curso - 0,000.00">
                                        </div>
                                        <div class="form-group">
                                          <label>Horas:</label>
                                          <input type="text" name="horas" class="form-control" placeholder="Horas del curso">
                                        </div>
                                        <div class="form-group">
                                          <label>Objetivo:</label>
                                          <input type="text" name="objetivo" class="form-control" placeholder="Objetivo del curso">
                                        </div>
                                        <div class="form-group">
                                          <label>Temario:</label>
                                          <textarea class="form-control" name="temario" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                          <label>Sede:</label>
                                          <input type="text" name="sede" class="form-control" placeholder="Sede del curso">
                                        </div>
                                        <div class="form-group">
                                          <label>Horario:</label>
                                          <input type="text" name="horario" class="form-control" placeholder="Horario del curso">
                                        </div>
                                        <div class="form-group">
                                          <label>Incluye:</label>
                                          <textarea class="form-control" name="incluye" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                          <label>Tipo de certificaci&oacute;n:</label>
                                          <input type="text" name="certificacion" class="form-control" placeholder="Tipo de certificacion del curso">
                                        </div>
                                        <div class="form-group">
                                          <label>Material:</label>
                                          <textarea class="form-control" name="info" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                          <label>Imagen:</label>
                                          <input type="text" name="imagen" class="form-control" placeholder="URL de la imagen">
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-success" value="CREAR CURSO">
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
    <script src="js/jquery.js"></script>
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
