<?php
    session_start();
    include "config.php";

    if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])) {
        header("location: index.php");
    }


?>