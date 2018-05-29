<?php
session_start();
include "../pdc/cnt.php";

$elid = trim($_POST['elid']);

$sql = "SELECT * FROM certificados WHERE idx='$elid'";  
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($row['idx'] === $elid){
    echo "admin";
    $_SESSION['idx'] = $row['idx'];
    $_SESSION['certificacion'] = $row['certificacion'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['status'] = $row['status'];
    $_SESSION['thru'] = $row['thru'];
} else {
    echo "ID NO VÁLIDO";
}


/*
if(isset($_POST['elid'])) {
    
    $elid = trim($_POST['elid']);

    $sql = "SELECT * FROM certificados WHERE idx='$elid'";  
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

        if($row['idx'] === $elid){
            echo "admin";
            $_SESSION['elid'] = $row['idx'];
        } else {
            echo "El ID de usuario no es correcto";
        }

}
*/
