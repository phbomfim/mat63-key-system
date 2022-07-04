<?php
    require_once "../utils/sanitization.php";
    require_once "../utils/session.php";

    $email = getEmailSanitized('email');
    $password = getTextInputDefault('password');
    
    $isThereEnoughContent = isThereRealContent($email) && isThereRealContent($password);

    // missing backend calling here
    
    initiateSession();
    $_SESSION["authorized"] = true;
    $_SESSION["signIn"] = true;

    if($isThereEnoughContent) {
        header("refresh:0; url=/view/pages/private/salas.php");
    }
?>