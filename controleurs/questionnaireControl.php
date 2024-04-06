<?php
    session_start();

    require_once "controlleur.php";

    if (isset($_GET['a'])) {
        switch ($_GET['a']) {
            case 'add':
                if (isset($_POST)) {
                    
                    $intitule = $_POST['intitule'];
                    $reponses = $_POST['reponse'];
                    $contenu = $_POST['contenu'];
                    $id_utilisateur = $_POST['id_utilisateur'];
                     CreateQuestionnaire ($intitule,$contenu,$reponses,$id_utilisateur,$pdo);
                     $_SESSION["msg"]="questionnaire enregistrer avec succes";
                     header('location:../index.php?p=questionnaire');
                
                }


                    
                
                break;
            case 'update':
                
                if (isset($_POST)) {
                    
                    $id = $_GET['id'];
                    $intitule = $_POST['intitule'];
                    $reponses = $_POST['reponse'];
                    $contenu = $_POST['contenu'];
                    $id_utilisateur = $_POST['id_utilisateur'];
                    UpdateQuestionnaire( $id,$intitule,$contenu,$reponses,$id_utilisateur,$pdo);
                     $_SESSION["msg"]="questionnaire modifier avec succes";
                     header('location:../index.php?p=questionnaire');


                    
                }
                break;
            case 'delete':
                if (isset($_POST)) {
                    $id = $_GET['id'];
                    
                    DeleteQuestionnaire($id,$pdo);
                    $_SESSION["msg"]="questionnaire suprimer avec succes";
                    header('location:../index.php?p=questionnaire');
                }
                break;
            
            default:
                # code...
                break;
        }
    }

    
?>