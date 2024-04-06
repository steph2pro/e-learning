<?php
    require_once 'Model.php';

    function CreateCour( $intitule,$contenues,$id_utilisateur,$pdo)
    {
        $sql="INSERT INTO cours SET  intitule='$intitule',date=NOW(),contenues='$contenues',id_utilisateur='$id_utilisateur';";
        $req=$pdo->prepare($sql);
        $req->execute();
    }

    function ReadALLCours($pdo)
    {
        $sql="SELECT * from cours";
        $req=$pdo->prepare($sql);
        $req->execute();
        $datas=$req->fetchAll();

        return $datas;
    }

    function ReadCour($id,$pdo)
    {
        $sql="SELECT * from cours WHERE id_cour='$id'";
        $req=$pdo->prepare($sql);
        $req->execute();
        $data=$req->fetchAll();

        return $data;
    }

    function UpdateCour( $id,$intitule,$contenues,$id_utilisateur,$pdo)
    {
        $sql="UPDATE cours SET  intitule='$intitule',date=NOW(),contenues='$contenues',id_utilisateur='$id_utilisateur' WHERE id_cour='$id';";
        $req=$pdo->prepare($sql);
        $req->execute();
    }

    function DeleteCours($id,$pdo)
    {
        $sql="DELETE FROM cours WHERE id_cour='$id';";
        $req=$pdo->prepare($sql);
        $req->execute();
    }

    function CountCours($pdo)
    {
        $sql="SELECT * from cours";
        $req=$pdo->prepare($sql);
        $req->execute();        
        $req->fetchAll(PDO::FETCH_OBJ);
        $datas=$req->rowCount();
        return $datas;
    }