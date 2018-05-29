<?php

///////// Database Details , add  here  ////
$dbhost_name = "localhost";
$database = "app";  // Your database name
$username = "appimcyc";                  //  Login user id 
$password = "1pp3mcyc@";                  //   Login password
/////////// End of Database Details //////

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
$acentos = $dbo->query("SET NAMES 'utf8'");
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}


$in=$_GET['txt'];
if(!ctype_alnum($in)){
    echo "Data Error";
    exit;
}

$msg="";
$msg .="<div class='col-sm-12 col-lg-12 col-md-12'>";
$msg .="<h2 style='text-align:center;border-top:8px solid #39B396;padding:10px;background:#f2f2f2;margin:0;margin-bottom:10px;'>RESULTADOS DE SU BÚSQUEDA</h2>";
$msg .="</div>";
if(strlen($in)>0 and strlen($in) <20 ){
$sql="select nombre, id, apellidos, status, id_alumno, fecha_certificada, certificacion, foto from alumnos_certificados where certificacion like '%$in%'";
foreach ($dbo->query($sql) as $nt) {
//$msg.=$nt[name]."->$nt[id]<br>";
//$msg .="<option value=$nt[id]>$nt[nombre] => $nt[id] </option>";
$msg .="<div class='col-sm-4 col-lg-4 col-md-4'>";
$msg .="<div class='thumbnail'>";
    if ( $nt[status] === "PASS"){
       $msg .="<img src='images/profile.jpg' />";
    }
    elseif ( $nt[status] === "IN PROCESS"){
       $msg .="<img src='images/profile_pro.jpg' />";
    }
    else {
       $msg .="<img src='images/profile_not.jpg' />";
   }
$msg .="<div class='caption'>";
$msg .="<h4><a href='#'>$nt[nombre] <br><span style='color:#333333;'>$nt[apellidos]</span></a></h4>";
$msg .="<p>CERTIFICACIÓN:</p>";  
$msg .="<p style='text-align:center;font-weight:bold;'>$nt[certificacion]</p>";
$msg .="<p>STATUS:</p>";  
    if ( $nt[status] === "PASS"){
       $msg .="<p style='text-align:center;font-weight:bold;color:#2EB396;'>$nt[status]</p>";
    }
    elseif ( $nt[status] === "IN PROCESS"){
       $msg .="<p style='text-align:center;font-weight:bold;color:#FDC017;'>$nt[status]</p>";
    }
    else {
       $msg .="<p style='text-align:center;font-weight:bold;color:#E52420;'>$nt[status]</p>";
   }

$msg .="<p>ID DE ALUMNO:</p>";  
$msg .="<p style='text-align:center;font-weight:bold;'>$nt[id_alumno]</p>";
$msg .="<p>FECHA DE VALIDEZ:</p>";
    $fecha = $nt[fecha_certificada];
    $time = strtotime($fecha);
    $myFormatForView = date("d · m · y", $time);
$msg .="<p style='text-align:center;font-weight:bold;'>$myFormatForView</p>";
$msg .="</div>";
$msg .="</div>";
$msg .='</div>';
}
}

echo $msg;


?>
