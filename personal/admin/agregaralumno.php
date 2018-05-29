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
    <title>Agregar alumno - ENSE&Ntilde;ANZA IMCYC</title>
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
                                <h3 class="panel-title"><i class="fa fa-dashboard"></i> Agregar alumno | <span style="color: #333333;"><?php echo $_SESSION["login_user"]; ?></h3>
                            </div>
                            <div class="panel-body">
                               <h3 style="font-size:30px;"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-graduation-cap fa-stack-1x fa-inverse"></i></span> Agregar alumno</h3>
                                    <?php
                                    if(isset($_POST['submit']))
                                    {
                                        $nombre = mysql_real_escape_string(htmlspecialchars($_POST['nombre']));
                                        $apellido = mysql_real_escape_string(htmlspecialchars($_POST['apellido']));
                                        $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
                                        $curso = mysql_real_escape_string(htmlspecialchars($_POST['curso']));
                                        $fecha = mysql_real_escape_string(htmlspecialchars($_POST['fecha']));
                                        $empresa = mysql_real_escape_string(htmlspecialchars($_POST['empresa']));
                                        $mensaje = mysql_real_escape_string(htmlspecialchars($_POST['mensaje']));
                                        $pago = mysql_real_escape_string(htmlspecialchars($_POST['pago']));
                                        $agregadopor = mysql_real_escape_string(htmlspecialchars($_POST['agregadopor']));
                                        $agregadodesde = mysql_real_escape_string(htmlspecialchars($_POST['agregadodesde']));
                                        
                                        $result = mysql_query("INSERT INTO alumnos (nombre, apellido, email, curso, fecha, empresa, mensaje, pago, agregadopor, agregadodesde) VALUES ('$nombre', '$apellido', '$email', '$curso', '$fecha', '$empresa', '$mensaje', '$pago', '$agregadopor', '$agregadodesde')") 
                                        or die(mysql_error());
                                        if (!mysql_query($result))
                                            {
                                                echo "<h2><span class='fa-stack fa-lg'><i class='fa fa-circle fa-stack-2x'></i><i class='fa fa-check fa-stack-1x fa-inverse'></i></span> El alumno ha sido agregado con éxito!</h2>";
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
                                          <input type="text" name="nombre" class="form-control" placeholder="Nombre del Alumno">
                                        </div>
                                        <div class="form-group">
                                          <label>Apellido:</label>
                                          <input type="text" name="apellido" class="form-control" placeholder="Apellido del alumno">
                                        </div>
                                        <div class="form-group">
                                          <label>Email:</label>
                                          <input type="text" name="email" class="form-control" placeholder="Email del alumno">
                                        </div>
                                        <div class="form-group">
                                          <label>Curso:</label>
                                          <?php
                                                $result_cursos = mysql_query("SELECT DISTINCT nombre FROM ensenanza ORDER BY nombre")
                                                or die(mysql_error()); 
                                                    
                                                echo "<select name='curso' class='form-control' placeholder='seleccionar curso'>";
                                                while($row = mysql_fetch_array( $result_cursos )) {
                                                    echo "<option value='".$row['nombre']."'>".$row['nombre']."</option>";
                                                }
                                                echo "</select>";
                                          ?>
                                        </div>
                                        <div class="form-group">
                                          <label>Fecha y hora del curso:</label>
                                          <input type="text" name="fecha" class="form-control" placeholder="Fecha del curso" id="datetimepicker"/>
                                        </div>
                                        <div class="form-group">
                                          <label>Empresa:</label>
                                          <input type="text" name="empresa" class="form-control" placeholder="Empresa a la que pertenece el alumno">
                                        </div>
                                        <div class="form-group">
                                          <label>Información adicional:</label>
                                          <input type="text" name="mensaje" class="form-control" placeholder="Información adicional sobre el alumno">
                                        </div>
                                        <div class="form-group">
                                          <label>Pagado?:  </label>
                                            <label class="radio-inline">
                                              <input name="pago" value="Si" type="radio"> Si
                                            </label>
                                            <label class="radio-inline">
                                              <input name="pago" value="No" checked="" type="radio"> No
                                            </label>
                                          <input type="hidden" name="agregadopor" class="form-control" value="<?php echo $user; ?>">
                                          <input type="hidden" name="agregadodesde" class="form-control" value="Administrador">
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-success" value="AGREGAR ALUMNO">
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
