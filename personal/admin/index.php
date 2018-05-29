<?php 
include "admin/dbconfig.php";
session_start();
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["username"];
    $administrator = "administrator";
    $nluna = "nluna";
    $password = $_POST["password"];
	 if ($name == '' || $password == '') {
        $msg = "Por favor ingrese su usuario y contraseña";
    } else {
        //$sql = "SELECT * FROM clients INNER JOIN reports ON reports.id=clients.id WHERE login = '$name' AND password = '$password'";
        $sql = "SELECT * FROM admin WHERE username = '$name' AND password = '$password'";
        $query = mysql_query($sql);

        if ($query === false) {
            echo "Could not successfully run query ($sql) from DB: " . mysql_error();
            exit;
        }

        if (mysql_num_rows($query) > 0) {
            
            $_SESSION['login_user'] = $name;
            $_SESSION['password_user'] = $password;
            
            if ($name === $administrator){
                header('Location: administrator.php');
                exit;
            }
            if ($name === $nluna){
                header('Location: administrator.php');
                exit;
            }
            else {
                $msg = "Usuario y contraseña no validos!";
            }
        }

        $msg = "Usuario y contraseña no validos!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ADMINISTRADOR CERTIFICACI&Oacute;N IMCYC</title>
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

<body id="page-top" class="index">
    <!-- Navigation -->
    <!-- Services Section -->
    <section id="services" style="background-color:none;">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div align="center">
                        <img src="images/logo.png" alt="IMCYC" title="IMCYC" />
                    </div>
                    <h2 style="text-align:center; color:#dedede;border-bottom:1px solid #cccccc;border-top:1px solid #cccccc;padding:10px 0;">CERTIFICACI&Oacute;N</h2>
                    <div style = "font-size:20px; color:#cc0000; margin-top:10px; margin-bottom: 10px; text-align: center; font-weight: bold;"><?php echo $msg; ?></div>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="form-group">
                          <label for="firstname" style="color:#dedede;">Usuario:</label>
                          <input type="username" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="lastname" style="color:#dedede;">Password:</label>
                          <input type="password" name="password" class="form-control">
                        </div>
                        <input class="send_btn btn-success" type="submit" value="Submit" alt="Submit" title="Submit" />
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="row" style="margin-top:20px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <p style="text-align:center !important; color:#FFFFFF; padding:10px 0;font-size:12px;border-bottom:1px solid #cccccc;border-top:1px solid #cccccc;padding:10px 0;">IMCYC © 2016 - Administrador de certificaci&oacute;n<br>Instituto Mexicano del Cemento y del Concreto A.C.</p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
    
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
