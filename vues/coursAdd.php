
<div class="content">
    <a href="?p=cours" class="btn btn-danger btn-addon pull-right">
        <i class="fa fa-ban fa-fw"></i>
        Annuler
    </a>

    <div class="row ">
    <div class="col-md-12 m-t-15">
<section class="panel">
    <header class="panel-heading">
        Ajout d'un cours
    </header>
    <div class="panel-body">
        <form action="controleurs/coursControl.php?a=add" method="POST" role="form"  enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">titre du cours </label>
                <input type="text" class="form-control" name="intitule" placeholder="Entrer le Nom de cours" require>
            </div>
                <input type="hidden" class="form-control" name="id_utilisateur" value="<?= $_SESSION['School_User'][0]['id_utilisateur'] ?>">
            
            <div class="form-group">
                <label for="exampleInputEmail1">contenu</label>
                <input type="file" class="form-control" name="contenu" placeholder="Entrer le prenom de l'cours" require>
            </div>



            <button type="submit" class="btn btn-info">Enregistrer</button>
            <a href="?p=cours" type="submit" class="btn btn-danger">Annuler</a>
        </form>

    </div>
</section>
</div>
</div>
</div>