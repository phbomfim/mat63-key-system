<?php
    function isFilterInputOk($value) {
        return ($value !== NULL and $value !== false);
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');
    
    $isOk = isFilterInputOk($email) && isFilterInputOk($password);

    // missing backend calling 

    if($isOk) {
        header("refresh:0; url=/view/pages/private/salas.php");
    }
?>