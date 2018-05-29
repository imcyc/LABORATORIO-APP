<?php
session_start();
include "../pdc/cnt.php";
if(isset($_POST['btn-login']) || isset($_POST['btn-loginpersonal']) || isset($_POST['btn-loginlaboratorio']) || isset($_POST['btn-loginaditivos'])) {
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";  
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

        if($row['password'] === $password){
            echo "admin";
            $_SESSION['user_session'] = $row['id'];
        } else {
            echo "Usuario y/o contrasena no validos!";
        }

}

