<?php
    include_once "models/Cours.php";

    $cours=ReadALLCours($pdo);

?>

<div class="content">
    <a href="?p=coursAdd" class="btn btn-primary btn-addon pull-right">
        <i class="fa fa-plus"></i>
        Ajouter un cours
    </a>

    <div class="row ">

        <div class="col-md-12 m-t-15">
            <section class="panel">
                <header class="panel-heading">
                    <div>
                        Liste des cours
                        <input type="search" name="search" id="search" name="search" placeholder="rechercher......" class="pull-right" style="padding: 10px;width: 30%;margin: 10px">
                    </div>
                    
                </header>
                <div class="panel-body table-responsive">
                <div id="elements">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>titre du cours</th>
                                <th>date de publication</th>
                                <th>contenue</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i=0;
                            foreach ($cours as $key => $cour) { 
                                 if ($cour["id_utilisateur"]==$_SESSION['School_User'][0]['id_utilisateur']) {
                           
                           
                        ?>
                            <tr class="element">
                                <td class="data"><?= $i += 1 ?></td>
                                <td class="data"><?= $cour["intitule"] ?></td>
                                <td class="data"><?= $cour["date"] ?></td>
                                <td>
                                <a href="assets/cours/<?= $cour["contenues"] ?>" class="btn btn-success">consulter</a>
                                    
                                 </td>
                                    
                                </td>

                                <td class="data">
                                    <a href="?p=coursUpdate&id=<?= $cour["id_cour"] ?>" class="btn btn-info btn-xs m-r-15"><i class="fa fa-pencil"></i></a>
                                    <a href="?p=coursDelete&id=<?= $cour["id_cour"] ?>" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
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
