<?php
    session_start();

    if (isset($_SESSION['School_User'])) {
        require_once "vues/home.php";
    } else {
        require_once "vues/connexion.php";
    }
