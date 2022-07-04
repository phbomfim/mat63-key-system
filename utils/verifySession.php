<?php

if($_SESSION["authorized"] !== true) {
    header("refresh:0; url=/view/pages/home.php");    
    echo "<script>alert('Be Authenticated')</script>";
}