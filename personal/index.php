<?php
session_start();
if(!isset($_SESSION['user_session'])){
    header("Location: index.php");
}
include "can/conect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Certificaciones en construcci&oacute;n, certificaciones en concreto, certificaciones en cemento">
    <meta name="author" content="">
    <title>CERTIFICACIONES IMCYC</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
    $(".search_button").click(function() {
        // getting the value that user typed
        var searchString    = $("#search_box").val();
        // forming the queryString
        var data            = 'search='+ searchString;
        // if searchString is not empty
        if(searchString) {
            // ajax call
            $.ajax({
                type: "POST",
                url: "do_search.php",
                data: data,
                beforeSend: function(html) { // this happens before actual call
                    $("#displayDiv").html(''); 
                    $("#searchresults").show();
                    $(".word").html(searchString);
               },
               success: function(html){ // this happens after we get results
                    $("#displayDiv").show();
                    $("#displayDiv").append(html);
                    $(".row.extras").fadeOut(200);
              }
            });    
        }
        return false;
    });
    $(".search_button_alumnos").click(function() {
        var searchString    = $("#search_box_alumnos").val();
        var data            = 'search='+ searchString;
        if(searchString) {
            $.ajax({
                type: "POST",
                url: "do_search_alumnos.php",
                data: data,
                beforeSend: function(html) { // this happens before actual call
                    $("#displayDiv").html(''); 
                    $("#searchresults").show();
                    $(".word").html(searchString);
               },
               success: function(html){ // this happens after we get results
                    $("#displayDiv").show();
                    $("#displayDiv").append(html);
                    $(".row.extras").fadeOut(200);
              }
            });    
        }
        return false;
    });
});
</script>
</head>
<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row intro">
            <div class="col-md-12">
                <div align="center" class="logofront">
                    <img src="../images/logo_blanco.svg" alt="" title="" width="200">
                </div>
                <h1>Instituto Mexicano del Cemento y del Concreto A.C.</h1>
                <hr>
                <p>PERSONAL CERTIFICADO</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4 class="bbusca"><span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="background:#ff0000; color:#ffffff; padding:10px;"></span> BUSCAR POR CERTIFICACIÓN:</h4>
                    <form method="post" action="do_search.php">
                        <div class="input-group add-on" style="width:100%; margin-top:7px;">
                        <input class="form-control" type="text" name="search" id="search_box" placeholder="Nombre de la certificación" style="width:100%;" />
                        <div class="input-group-btn">
                            <input type="submit" value="BUSCAR" class="search_button btn btn-success" />
                        </div>
                        </div>
                    </form>
            </div>
            <div class="col-md-6">
                <h4 class="bbusca"><span class="glyphicon glyphicon-user" aria-hidden="true" style="background:#ff0000; color:#ffffff; padding:10px;"></span> BUSCAR POR APELLIDOS:</h4>
                <form name="myForm" class="navbar-form" role="search">
                    <div class="input-group add-on" style="width:100%;">
                    <input class="form-control" type="text" name="search" id="search_box_alumnos" placeholder="Apellidos del especialista" style="width:100%;" />
                    <div class="input-group-btn">
                        <input type="submit" value="BUSCAR" class="search_button_alumnos btn btn-success" />
                    </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="displayDiv" class="row estelares">
                </div>
                <div class="row extras">
                    <?php
                        
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        $conn->set_charset("utf8");
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $statux="PASS";
                        $sql = "SELECT * FROM alumnos_certificados WHERE status='$statux' ORDER BY apellidos ASC";
                        $result = $conn->query($sql);
                        $i = 1;
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                ?>
                                    <div class="col-sm-4 col-lg-4 col-md-4">
                                        <div class="thumbnail">
                                            <div style="height: 167px; overflow: hidden;">
                                            <img src="
                                            <?php
                                                    $status = $row["status"];
                                                    $foto = $row["foto"];
                                                    if ( $foto != ""){
                                                        echo $foto;
                                                    }
                                                    elseif ( $status === "PASS" && $foto===""){
                                                        echo 'images/profile.jpg';
                                                    }
                                                    elseif ( $status === "IN PROCESS" && $foto===""){
                                                        echo 'images/profile_pro.jpg';
                                                    }
                                                    else {
                                                        echo 'images/profile_not.jpg';
                                                    }
                                            ?>      
                                                 " alt="<?php echo $row["nombre"] ?>, <?php echo $row["apellidos"] ?>" title="<?php echo $row["nombre"] ?>, <?php echo $row["apellidos"] ?>">
                                            </div>
                                            <div class="caption">
                                                <h4><a href="#"><?php echo $row["nombre"] ?><br><span class="apelli"><?php echo $row["apellidos"] ?></span></a></h4>
                                                <hr>
                                                <p class="certifica">CERTIFICACI&Oacute;N:</p>
                                                <p class="certificacion"><?php echo $row["certificacion"] ?></a>.</p>
                                            </div>
                                            <div class="ratings">
                                                <p class="pull-right">VALIDEZ: 
                                                <?php 
                                                    $fecha = $row["fecha_certificada"];
                                                    $time = strtotime($fecha);
                                                    $myFormatForView = date("d.m.y", $time);
                                                    echo $myFormatForView 
                                                ?>
                                                </p>
                                                <?php
                                                    $status = $row["status"];
                                                    if ( $status === "PASS"){
                                                        echo '<p class="status paso">'.$row["status"].'</p>';
                                                    }
                                                    elseif ( $status === "IN PROCESS"){
                                                        echo '<p class="status pro">'.$row["status"].'</p>';
                                                    }
                                                    else {
                                                        echo '<p class="status nopaso">'.$row["status"].'</p>';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php   
                            }
                        } else {
                            echo "0 results";
                        }
                    $conn->close();
                    ?> 
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; 2016 - 2017 Instituto Mexicano del Cemento y del Concreto A.C.</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>