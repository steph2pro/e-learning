<?php
    include_once "models/Formations.php";

    $formations=ReadALLFormation($pdo);

?>

<div class="content">
   
    <div class="row ">

        <div class="col-md-12 m-t-15">
            <section class="panel">
                <header class="panel-heading">
                    <div>
                        Liste des formations disponible
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


                            </tr>
                        <?php }   ?>
                        </tbody>
                    </table>
                </div>
            </section>


        </div>

    </div>
</div>
