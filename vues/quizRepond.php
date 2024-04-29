<?php
    
      include_once "models/Questionaires.php";

    $id = $_GET['id'];

    $questionnaire=ReadQuestionnaire($id,$pdo);
    ?>

    <div class="content">
   

    <div class="row ">
    <div class="col-md-12 m-t-15">
<section class="panel" style="width: 60%;margin-left:  15%;">
    <header class="panel-heading" style="text-align: center;">
    <?= $questionnaire[0]["intitule"] ?>
    </header>
    <div class="panel-body">
        <form action="controleurs/quizControl.php?id=<?= $id ?>" method="POST" role="form"  enctype="multipart/form-data">
          

            <div class="form-group">
                <label for="exampleInputEmail1"><?= $questionnaire[0]["contenu"] ?> ??</label>
                <input type="text" class="form-control" name="reponse" placeholder="Entrer votre reponse ici"  require>
            </div>




            <div style="text-align: center;">
            <button type="submit" class="btn btn-info">valider</button>
            <a href="?p=quizApp" type="submit" class="btn btn-danger">Annuler</a>
            </div>
        </form>
        
    </div>
</section>
</div>
</div>
</div>