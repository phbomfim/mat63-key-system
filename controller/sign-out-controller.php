<?php
    function isFilterInputOk($value) {
        return ($value !== NULL and $value !== false);
    }

    $fullName = filter_input(INPUT_POST, 'fullName');
    $username = filter_input(INPUT_POST, 'username');
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phoneNumber = filter_input(INPUT_POST, 'phoneNumber');
    $password = filter_input(INPUT_POST, 'password');
    
    $isOk = isFilterInputOk($fullName) && 
        isFilterInputOk($username) && 
        isFilterInputOk($email) && 
        isFilterInputOk($phoneNumber) && 
        isFilterInputOk($password);

    // missing backend calling 
    // missing session storage

    if($isOk) {
        header("refresh:0; url=/view/pages/private/salas.php");
    }
?>