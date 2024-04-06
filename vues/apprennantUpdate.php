<?php
    
      include_once "models/Utilisateur.php";

    $id = $_GET['id'];

    $utilisateurs=ReadUtilisateur($id,$pdo);
    ?>
<div class="content">
    <a href="?p=apprennant" class="btn btn-danger btn-addon pull-right">
        <i class="fa fa-ban fa-fw"></i>
        Annuler
    </a>

    <div class="row ">
    <div class="col-md-12 m-t-15">
<section class="panel">
    <header class="panel-heading">
        Modifier un apprennant
    </header>
    <div class="panel-body">
        <form  enctype="multipart/form-data" action="controleurs/utilisateurControl.php?a=update&id=<?= $id ?>" method="POST" role="form">
        <div class="form-group">
                <label for="exampleInputEmail1">Noms  et prenoom</label>
                <input type="text" class="form-control" name="name" placeholder="Entrer le Nom de apprennant" value='<?= $utilisateurs[0]["nom"] ?>'>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">telephone</label>
                <input type="number" class="form-control" name="tel" placeholder="Entrer le telephone de l'enseignat" value='<?= $utilisateurs[0]["telephone"] ?>'>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">email</label>
                <input type="email" class="form-control" name="mail" placeholder="Entrer l'email de l'apprennant" value='<?= $utilisateurs[0]["email"] ?>'>
            </div>
            <div class="form-group">
                <label>Sexe</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexe" id="sexeHomme" value="homme" <?php if($utilisateurs[0]["sexe"]=="homme"){echo "checked";} ?> >
                    <label class="form-check-label" for="sexeHomme">
                        Homme
                    </label>
                    <input style="margin-left: 25%;" class="form-check-input" type="radio" name="sexe" id="sexeFemme" value="femme"  <?php if($utilisateurs[0]["sexe"]=="femme"){echo "checked";} ?> >
                    <label class="form-check-label" for="sexeFemme">
                        Femme
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ville</label>
                <input type="text" class="form-control" name="ville" placeholder="Entrer la ville de l'apprennant" value='<?= $utilisateurs[0]["ville"] ?>' require>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">pays</label>
                <input type="text" class="form-control" name="pays" placeholder="Entrer le pays de l'apprennant"  value='<?= $utilisateurs[0]["pays"] ?>' require>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" class="form-control" name="login" placeholder="Entrer le login de l'apprennant" value='<?= $utilisateurs[0]["login"] ?>'>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mot de pass</label>
                <input type="password" class="form-control" name="psw" placeholder="Entrer le mot de pass de l'apprennant" value='<?= $utilisateurs[0]["password"] ?>'>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">photo</label>
                <input type="file" class="form-control" name="photo" placeholder="Entrer le prenom de l'apprennant" value='<?= $utilisateurs[0]["photo"] ?>'>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">role </label>
                <input type="text" class="form-control" name="role" value='<?= $utilisateurs[0]["role"] ?>' readonly>
            </div>   




            <button type="submit" class="btn btn-info">Enregistrer</button>
            <a href="?p=apprennant" type="submit" class="btn btn-danger">Annuler</a>
        </form>

    </div>
</section>
</div>
</div>
</div>


