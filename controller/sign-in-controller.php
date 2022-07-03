<?php
    require_once "../utils/sanitization.php";

    $email = getEmailSanitized('email');
    $password = getTextInputDefault('password');
    
    $isThereEnoughContent = isThereRealContent($email) && isThereRealContent($password);

    // missing backend calling 
    // missing session storage

    if($isThereEnoughContent) {
        header("refresh:0; url=/view/pages/private/salas.php");
    }
?>