
<div class="content">
    <a href="?p=questionnaire" class="btn btn-danger btn-addon pull-right">
        <i class="fa fa-ban fa-fw"></i>
        Annuler
    </a>

    <div class="row ">
    <div class="col-md-12 m-t-15">
<section class="panel">
    <header class="panel-heading">
        Ajout d'un questionnaire
    </header>
    <div class="panel-body">
        <form action="controleurs/questionnaireControl.php?a=add" method="POST" role="form"  enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">intitule du questionnaire </label>
                <input type="text" class="form-control" name="intitule" placeholder="Entrer l'intitule du questionnaire" require>
            </div>
                <input type="hidden" class="form-control" name="id_utilisateur" value="<?= $_SESSION['School_User'][0]['id_utilisateur'] ?>">
            
            <div class="form-group">
                <label for="exampleInputEmail1">contenue du questionnaire </label>
                <input type="text" class="form-control" name="contenu" placeholder="Entrer l'intitule du questionnaire" require>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">reponse possible du questionnaire </label>
                <input type="text" class="form-control" name="reponse" placeholder="Entrer l'intitule du questionnaire" require>
            </div>



            <button type="submit" class="btn btn-info">Enregistrer</button>
            <a href="?p=questionnaire" type="submit" class="btn btn-danger">Annuler</a>
        </form>

    </div>
</section>
</div>
</div>
</div>