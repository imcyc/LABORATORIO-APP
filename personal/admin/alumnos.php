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
                                <h3 style="font-size:30px;"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-users fa-stack-1x fa-inverse"></i></span> Alumnos inscritos</h3>
                            </div>
                            <div class="panel-body">
                                <?php
                                    $result = mysql_query("SELECT * FROM alumnos") 
                                    or die(mysql_error());  

                                    echo "<table class='table table-striped'>";
                                    echo "<thead><tr><th>ID</th><th>NOMBRE</th><th>APELLIDO</th><th>EMAIL</th><th>CURSO</th><th>MENSAJE</th><th>EMPRESA</th><th>FECHA</th><th>REGISTRO</th><th>PAGADO</th></tr></thead>";
                                    while($row = mysql_fetch_array( $result )) {
                                    ?>

                                    <tbody>
                                    <form action="edit_report.php" method="POST">
                                        <tr>
                                            <td>
                                                <input type="text" name="id" style="width: 20px; border: none; background: none;" value="<?php echo $row['id']; ?>" />
                                            </td>
                                            <td>
                                                <p><?php echo $row['nombre']; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $row['apellido']; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $row['email']; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $row['curso']; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $row['mensaje']; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $row['empresa']; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $row['fecha']; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $row['tiempo']; ?></p>
                                            </td>
                                            <td>
                                                <p style="text-align:center;"><?php echo $row['pago']; ?></p>
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
