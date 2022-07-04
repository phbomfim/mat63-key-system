<?php

function initiateSession() {
    session_unset();
    session_start();
}

function isThereNoSession() {
    $status = session_status();
    return ($status === PHP_SESSION_NONE) || ($status === PHP_SESSION_DISABLED);
}

function strikeSession() {
    session_unset();
    session_destroy();
}

?>