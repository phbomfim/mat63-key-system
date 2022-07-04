<?php
    require_once "../utils/sanitization.php";
    require_once "../utils/session.php";

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

    initiateSession();
    $_SESSION["authorized"] = true;
    $_SESSION["signUp"] = true;

    if($isOk) {
        header("refresh:0; url=/view/pages/private/salas.php");
    }
?>