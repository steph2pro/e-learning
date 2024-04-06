<?php
    include_once "models/Formations.php";

    $formations=ReadALLFormation($pdo);

?>

<div class="content">
    <a href="?p=formationAdd" class="btn btn-primary btn-addon pull-right">
        <i class="fa fa-plus"></i>
        Ajouter une formation
    </a>

    <div class="row ">

        <div class="col-md-12 m-t-15">
            <section class="panel">
                <header class="panel-heading">
                    <div>
                        Liste des formations
                        <input type="search" name="search" id="search" name="search" placeholder="rechercher......" class="pull-right" style="padding: 10px;width: 30%;margin: 10px">
                    </div>
                    
                </header>
                <div class="panel-body table-responsive">
                <div id="elements">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>intilute de la formations</th>
                                <th>description</th>
                                <th>contenue</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i=0;
                            foreach ($formations as $key => $formation) { 
                                 
                           
                           
                        ?>
                            <tr class="element">
                                <td class="data"><?= $i += 1 ?></td>
                                <td class="data"><?= $formation["intitule"] ?></td>
                                <td class="data"><?= $formation["description"] ?></td>
                                <td>
                                <a href="assets/formations/<?= $formation["contenues"] ?>" class="btn btn-success">consulter</a>
                                    
                                 </td>
                                    
                                </td>

                                <td class="data">
                                    <a href="?p=formationUpdate&id=<?= $formation["id_formation"] ?>" class="btn btn-info btn-xs m-r-15"><i class="fa fa-pencil"></i></a>
                                    <a href="?p=formationDelete&id=<?= $formation["id_formation"] ?>" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        <?php }   ?>
                        </tbody>
                    </table>
                </div>
            </section>


        </div>

    </div>
</div>
