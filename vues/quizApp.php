<?php
    include_once "models/Questionaires.php";

    $questionnaires=ReadALLQuestionnaire($pdo);

?>

<?php
    if (isset($_SESSION["msg"])) {
        $message = $_SESSION["msg"];
        unset($_SESSION["msg"]);
        echo "<script>alert('$message');</script>";
    }
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
                                <th>question</th>
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
                                <td class="data">
                                    <a href="?p=quizRepond&id=<?= $questionnaire["id_questionnaire"] ?>" class="btn btn-info" >repondre</a>
                                   
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
