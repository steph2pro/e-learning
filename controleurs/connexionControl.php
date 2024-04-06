<?php
    session_start();

    require_once "controlleur.php";

    if (isset($_POST)) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $user = ReadConnexionUtilisateur($login,$password,$pdo);

        if (!empty($user)) {
            $_SESSION['School_User'] = $user;
             
        }else{
           $_SESSION['error'] = "information erroner ou compte innexistant!"; 
        }

        header('location:../index.php');
    }
?>