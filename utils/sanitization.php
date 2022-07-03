<?php

function getEmailSanitized($emailFieldName = 'email') {
    return filter_input(INPUT_POST, $emailFieldName, FILTER_SANITIZE_EMAIL);
}

function getTextInputDefault($nameField) {
    return filter_input(INPUT_POST, $nameField);
}

function isThereRealContent($value) {
    return ($value !== NULL and $value !== false);
}

?>