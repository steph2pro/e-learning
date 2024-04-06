<?php
    include_once "models/Cours.php";
    $cours=ReadALLCours($pdo);
?>
<div class="content">
    <a href="?p=formation" class="btn btn-danger btn-addon pull-right">
        <i class="fa fa-ban fa-fw"></i>
        Annuler
    </a>

    <div class="row ">
    <div class="col-md-12 m-t-15">
<section class="panel">
    <header class="panel-heading">
        Ajout d'une formation
    </header>
    <div class="panel-body">
        <form action="controleurs/formationControl.php?a=add" method="POST" role="form"  enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">intitule de la formation </label>
                <input type="text" class="form-control" name="intitule" placeholder="Entrer l'intitule' de formations" require>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">description de la formation </label>
                <input type="text" class="form-control" name="desc" placeholder="Entrer la description de formations" require>
            </div>
                
            
                <div class="form-group">
                <label for="exampleInputEmail1">cours concerner</label>
                <select class="form-control"  name="id_cour">
                    <?php
                    foreach ($cours as $cour) {
                    ?>
                    <option value="<?= $cour['id_cour'] ?>"><?= $cour['intitule'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">contenu de la formation</label>
                <input type="file" class="form-control" name="contenu" placeholder="Entrer le prenom de l'formations" require>
            </div>



            <button type="submit" class="btn btn-info">Enregistrer</button>
            <a href="?p=formation" type="submit" class="btn btn-danger">Annuler</a>
        </form>

    </div>
</section>
</div>
</div>
</div>