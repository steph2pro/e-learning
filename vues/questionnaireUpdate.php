<?php
    
      include_once "models/Questionaires.php";

    $id = $_GET['id'];

    $questionnaire=ReadQuestionnaire($id,$pdo);
    ?>
    <div class="content">
    <a href="?p=questionnaire" class="btn btn-danger btn-addon pull-right">
        <i class="fa fa-ban fa-fw"></i>
        Annuler
    </a>

    <div class="row ">
    <div class="col-md-12 m-t-15">
<section class="panel">
    <header class="panel-heading">
        Modifier un questionnaire
    </header>
    <div class="panel-body">
        <form action="controleurs/questionnaireControl.php?a=update&id=<?= $id ?>" method="POST" role="form"  enctype="multipart/form-data">
          

            <div class="form-group">
                <label for="exampleInputEmail1">intitule du questionnaire </label>
                <input type="text" class="form-control" name="intitule" placeholder="Entrer l'intitule du questionnaire"  value='<?= $questionnaire[0]["intitule"] ?>'  require>
            </div>
                <input type="hidden" class="form-control" name="id_utilisateur"  value='<?= $questionnaire[0]["id_utilisateur"] ?>' >
            
            <div class="form-group">
                <label for="exampleInputEmail1">contenue du questionnaire </label>
                <input type="text" class="form-control" name="contenu" placeholder="Entrer l'intitule du questionnaire"  value='<?= $questionnaire[0]["contenu"] ?>'  require>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">reponse possible du questionnaire </label>
                <input type="text" class="form-control" name="reponse" placeholder="Entrer l'intitule du questionnaire"  value='<?= $questionnaire[0]["reponses"] ?>' require>
            </div>




            <button type="submit" class="btn btn-info">Enregistrer</button>
            <a href="?p=questionnaire" type="submit" class="btn btn-danger">Annuler</a>
        </form>

    </div>
</section>
</div>
</div>
</div>