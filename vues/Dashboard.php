<?php
//les statistiques
    include_once "models/Utilisateur.php";
    require_once "./models/Cours.php";
    require_once "./models/Formations.php";
    require_once "./models/Utilisateur.php";
    require_once "./models/Questionaires.php";

    $formations=CountFormation($pdo);
    $cours=CountCours($pdo);
    $utilisateurs=Countutilisateurs($pdo);
    $Ens=CountEnseignant($pdo);
    $Appr=CountApprenant($pdo);
    $Adm=CountAdmin($pdo);
?>
<div>
                    <div class="sm-st clearfix">
                        <div class="sm-st-info">
                            <span>Bienvenue <?= $_SESSION['School_User'][0]['nom']?>!</span>
                            votre education est notre priorite
                        </div>
                    </div>
                </div>
                <?php 
                if ( $_SESSION['School_User'][0]['role']=="admin") {
                    require_once "dashboardAdmin.php";
 
                 }
                 if ( $_SESSION['School_User'][0]['role']=="enseignant") {
                    
                    require_once "dashboardEns.php";
 
                 }
                 if ( $_SESSION['School_User'][0]['role']=="apprennant") {
                    
                    require_once "dashboardApp.php";
 
                 }
                
                ?>
                