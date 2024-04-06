<?php
    include_once "models/Questionaires.php";

    $questionnaires=ReadALLQuestionnaire($pdo);

?>

<div class="content">
    <a href="?p=questionnaireAdd" class="btn btn-primary btn-addon pull-right">
        <i class="fa fa-plus"></i>
        Ajouter un questionnaire
    </a>

    <div class="row ">

        <div class="col-md-12 m-t-15">
            <section class="panel">
                <header class="panel-heading">
                    <div>
                        Liste des questionnaires
                        <input type="search" name="search" id="search" name="search" placeholder="rechercher......" class="pull-right" style="padding: 10px;width: 30%;margin: 10px">
                    </div>
                    
                </header>
                <div class="panel-body table-responsive">
                <div id="elements">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>intilute du questionnaires</th>
                                <th>reponse possible</th>
                                <th>question</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i=0;
                            foreach ($questionnaires as $key => $questionnaire) { 
                                 
                           
                           
                        ?>
                            <tr class="element">
                                <td class="data"><?= $i += 1 ?></td>
                                <td class="data"><?= $questionnaire["intitule"] ?></td>
                                <td class="data"><?= $questionnaire["reponses"] ?></td>
                                <td class="data"><?= $questionnaire["contenu"] ?></td>
                                

                                <td class="data">
                                    <a href="?p=questionnaireUpdate&id=<?= $questionnaire["id_questionnaire"] ?>" class="btn btn-info btn-xs m-r-15"><i class="fa fa-pencil"></i></a>
                                    <a href="?p=questionnaireDelete&id=<?= $questionnaire["id_questionnaire"] ?>" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
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
