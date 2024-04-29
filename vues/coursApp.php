<?php
    include_once "models/Cours.php";

    $cours=ReadALLCours($pdo);

?>

<div class="content">
    
    <div class="row ">

        <div class="col-md-12 m-t-15">
            <section class="panel">
                <header class="panel-heading">
                    <div>
                        Liste des cours disponible
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
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i=0;
                            foreach ($cours as $key => $cour) { 
                                
                        ?>
                            <tr class="element">
                                <td class="data"><?= $i += 1 ?></td>
                                <td class="data"><?= $cour["intitule"] ?></td>
                                <td class="data"><?= $cour["date"] ?></td>
                                <td>
                                <a href="assets/cours/<?= $cour["contenues"] ?>" class="btn btn-success">consulter</a>
                                    
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
