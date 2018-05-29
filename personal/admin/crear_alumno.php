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
    <title>Crear Alumno - CERTIFICACIONES IMCYC</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/jquery.datetimepicker.css" rel="stylesheet">
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
                                <h3 class="panel-title"><i class="fa fa-dashboard"></i> Dar de alta - Alumno | <span style="color: #333333;"><?php echo $_SESSION["login_user"]; ?></h3>
                            </div>
                            <div class="panel-body">
                               <h3 style="font-size:30px;"><i class="icon-chevron-right"></i> Agregar Alumno</h3>
                                    <?php
                                    if(isset($_POST['update_lugar']))
                                    {
                                        $foto = mysql_real_escape_string(htmlspecialchars($_POST['foto']));
                                        $nombre = mysql_real_escape_string(htmlspecialchars($_POST['nombre']));
                                        $apellidos = mysql_real_escape_string(htmlspecialchars($_POST['apellidos']));
                                        $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
                                        $telefono = mysql_real_escape_string(htmlspecialchars($_POST['telefono']));
                                        $status = mysql_real_escape_string(htmlspecialchars($_POST['status']));
                                        $id_alumno = mysql_real_escape_string(htmlspecialchars($_POST['id_alumno']));
                                        $fecha_certificada = mysql_real_escape_string(htmlspecialchars($_POST['fecha_certificada']));
                                        $certificacion = mysql_real_escape_string(htmlspecialchars($_POST['certificacion']));
                                        
                                        $result = mysql_query("INSERT INTO alumnos_certificados SET foto='$foto', nombre='$nombre', apellidos='$apellidos', email='$email', telefono='$telefono', status='$status', id_alumno='$id_alumno', fecha_certificada='$fecha_certificada', certificacion='$certificacion'") 
                                        or die(mysql_error());

                                        if (!mysql_query($result))
                                            {
                                                echo "El ALUMNO ha sido dado de alta con éxito!";

                                            } else {
                                                die('Error: ' . mysql_error());
                                            }
                                    }
                                    else
                                    {
                                    ?>


                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                          <label>Fotografía:</label>
                                          <input type="text" name="foto" class="form-control" placeholder="Foto del alumno (URL)">
                                        </div>
                                        <div class="form-group">
                                          <label>Nombre:</label>
                                          <input type="text" name="nombre" class="form-control" placeholder="Nombre del alumno">
                                        </div>
                                        <div class="form-group">
                                          <label>Apellidos:</label>
                                          <input type="text" name="apellidos" class="form-control" placeholder="Apellidos del alumno">
                                        </div>
                                        <div class="form-group">
                                          <label>Email:</label>
                                          <input type="text" name="email" class="form-control" placeholder="Correo electrónico del alumno">
                                        </div>
                                        <div class="form-group">
                                          <label>Teléfono:</label>
                                          <input type="text" name="telefono" class="form-control" placeholder="Teléfono del alumno">
                                        </div>
                                        <div class="form-group">
                                          <label>STATUS:</label>
                                            <select name="status" class="selectpicker">
                                              <option value="PASS">PASS</option>
                                              <option value="IN PROCESS">IN PROCESS</option>
                                              <option value="FAILED">FAILED</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <label>ID Alumno:</label>
                                          <input type="text" name="id_alumno" class="form-control" placeholder="ID Alumno del alumno (ACI)">
                                        </div>
                                        <div class="form-group">
                                          <label>Fecha de vigencía:</label>
                                          <input type="text" name="fecha_certificada" class="form-control" placeholder="Fecha de vigencia" id="datetimepicker"/>
                                        </div>
                                        <div class="form-group">
                                          <label>Certificación:</label>
                                          <input type="text" name="certificacion" class="form-control" placeholder="Nombre de la certificación">
                                        </div>
                                        <input type="submit" name="update_lugar" class="btn btn-success" value="REGISTRAR DATOS">
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
    <!-- Morris Charts JavaScript -->
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
