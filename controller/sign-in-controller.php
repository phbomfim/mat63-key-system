<?php
    require_once '../config/remote_connection.php';
    require_once "../utils/sanitization.php";
    require_once "../utils/session.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $verifica = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$password' "; 
    $result_id = mysqli_query($con,$verifica) or die("Erro no banco de dados!"); 
    $total = mysqli_num_rows($result_id); 
    
    if($total > 0) {
        initiateSession();
        $_SESSION["authorized"] = true;
        $_SESSION["signOut"] = true;
        
        header("Location:../view/pages/private/salas.php");
    } 
    
    else {
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha errados');window.location.href='../index.php';</script>";
        die();
    }
?>
