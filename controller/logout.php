<?php
    require_once "../utils/session.php";

    strikeSession();

    header("refresh:0; url=/view/pages/home.php");

?>