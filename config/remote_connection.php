<?php 
    
    $host="us-cdbr-east-06.cleardb.net";
    $user="bf5f3b69fe0047";
    $password="ea1b84d6";
    $dbname="heroku_ee84e3b7fc1e480";

    $con = new mysqli($host, $user, $password, $dbname);
    
    if ($con->connect_error) {
        echo"<script language='javascript' type='text/javascript'>alert('Falha na conexão');</script>";
        die("Connection failed: " . $con->connect_error);
    }

?>