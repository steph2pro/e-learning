<?php
    $id = $_GET['id'];
?>
<div class="col-lg-5">
    <section class="panel">
        <header class="panel-heading">
            Supression d'un enseignant
        </header>
        <div class="panel-body">
            <form role="form">


                <div class="alert alert-block alert-danger center">
                    <strong> Voulez-vous vraiment Supprimer cet enseignant ?</strong>
                </div>

                <a href="controleurs/utilisateurControl.php?a=delete&id=<?= $id ?>" type="submit"
                    class="btn btn-danger">OUI</a>
                <a href="?p=enseignant" type="submit" class="btn btn-success">NON</a>
            </form>

        </div>
    </section>
</div>