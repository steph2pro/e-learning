<?php
    include_once "models/utilisateur.php";

    $utilisateurs=ReadALLutilisateur($pdo);

?>

<div class="content">
    <a href="?p=enseignantAdd" class="btn btn-primary btn-addon pull-right">
        <i class="fa fa-plus"></i>
        Ajouter un enseignant
    </a>

    <div class="row ">

        <div class="col-md-12 m-t-15">
            <section class="panel">
                <header class="panel-heading">
                    <div>
                        Liste des enseignants
                        <input type="search" name="search" id="search" name="search" placeholder="rechercher......" class="pull-right" style="padding: 10px;width: 30%;margin: 10px">
                    </div>
                    
                </header>
                <div class="panel-body table-responsive">
                <div id="elements">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NOMS et PRENOM</th>
                                <th>Telephone</th>
                                <th>Sexe</th>
                                <th>Ville</th>
                                <th>Pays</th>
                                <th>login</th>
                                <th>profile</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i=0;
                            foreach ($utilisateurs as $key => $utilisateur) { 
                                 if ($utilisateur["role"]=="enseignant") {
                           
                           
                        ?>
                            <tr class="element">
                                <td class="data"><?= $i += 1 ?></td>
                                <td class="data"><?= $utilisateur["nom"] ?></td>
                                <td class="data"><?= $utilisateur["telephone"] ?></td>
                                <td class="data"><?= $utilisateur ["sexe"] ?></td>
                                <td class="data"><?= $utilisateur["ville"] ?></td>
                                <td class="data"><?= $utilisateur ["pays"] ?></td>
                                <td class="data"><?= $utilisateur ["login"] ?></td>
                                <td class="data">
                                <div class="pull-left image">
                                    <img src="assets/profiles/<?= $utilisateur["photo"] ?>" class="img-circle img" alt="User Image" />
                                </div>
                                    
                                </td>

                                <td class="data">
                                    <a href="?p=enseignantUpdate&id=<?= $utilisateur["id_utilisateur"] ?>" class="btn btn-info btn-xs m-r-15"><i class="fa fa-pencil"></i></a>
                                    <a href="?p=enseignantDelete&id=<?= $utilisateur["id_utilisateur"] ?>" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        <?php } }   ?>
                        </tbody>
                    </table>
                </div>
            </section>


        </div>

    </div>
</div>
