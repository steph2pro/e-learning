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

                <div class="row" style="margin-bottom:5px;">
                    <div class="col-md-3">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-blue"><i class="fa fa-users"></i></span>
                            <div class="sm-st-info">
                                <span><?= $utilisateurs ?></span>
                                Utilisateurs 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-red"><i class="fa fa-list-alt" aria-hidden="true"></i></span>
                            <div class="sm-st-info">
                                <span><?= $formations ?></span>
                                formations disponible
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-violet"><i class="fa fa-list-alt" aria-hidden="true"></i></span>
                            <div class="sm-st-info">
                                <span><?= $cours ?></span>
                                cours ajouter
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom:5px;">
                    <div class="col-md-3">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-pink" style="background:fuchsia"><i class="fa fa-user"></i></span>
                            <div class="sm-st-info">
                                <span><?= $Ens ?></span>
                                nombre d'enseignant
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-violet" style="background: pink"><i class="fa fa-user"></i></span>
                            <div class="sm-st-info">
                                <span><?= $Appr ?></span>
                                nombre d'apprenant
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sm-st clearfix">
                            <span class="sm-st-icon st-magenta" style="background: magenta;"><i class="fa fa-user"></i></span>
                            <div class="sm-st-info">
                                <span><?= $Adm ?></span>
                                nombre Administrateur
                            </div>
                        </div>
                    </div>
                </div>