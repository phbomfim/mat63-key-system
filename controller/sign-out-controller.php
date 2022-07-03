<?php
    require_once "../utils/sanitization.php";

    $fullName = getTextInputDefault('fullName');
    $username = getTextInputDefault('username');
    $email = getEmailSanitized('email');
    $phoneNumber = getTextInputDefault('phoneNumber');
    $password = getTextInputDefault('password');
    
    $isOk = isThereRealContent($fullName) && 
        isThereRealContent($username) && 
        isThereRealContent($email) && 
        isThereRealContent($phoneNumber) && 
        isThereRealContent($password);

    // missing backend calling 
    // missing session storage

    if($isOk) {
        header("refresh:0; url=/view/pages/private/salas.php");
    }
?>