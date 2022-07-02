<?php 
    
    $host="localhost";
    $user="root";
    $password="";
    $dbname="key_system";

    $con = new mysqli($host, $user, $password, $dbname);
    
    if ($con->connect_error) {
        // fail case test line 
        echo"<script language='javascript' type='text/javascript'>alert('Falha na conexão');</script>";
        die("Connection failed: " . $con->connect_error);
    }

    // success case test line 
    echo"<script language='javascript' type='text/javascript'>alert('Conexão OK');</script>";
?>