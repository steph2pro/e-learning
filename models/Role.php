<?php
    require_once 'Model.php';

    function CreateRole( $libelle ,$pdo)
    {
        $sql="INSERT INTO role SET libelle = '$libelle';";
        $req=$pdo->prepare($sql);
        $req->execute();
    }

    function ReadALLRole($pdo)
    {
        $sql="SELECT * from role";
        $req=$pdo->prepare($sql);
        $req->execute();
        $datas=$req->fetchAll(PDO::FETCH_OBJ);

        return $datas;
    }

    function ReadRole($id,$pdo)
    {
        $sql="SELECT * from role WHERE idrole='$id'";
        $req=$pdo->prepare($sql);
        $req->execute();
        $data=$req->fetchAll();

        return $data;
    }

    function UpdateRole( $id,$libelle,$pdo)
    {
        $sql="UPDATE role SET libelle='$libelle' WHERE idrole='$id'";
        $req=$pdo->prepare($sql);
        $req->execute();
    }

    function DeleteRole($id,$pdo)
    {
        $sql="DELETE role WHERE idrole='$id'";
        $req=$pdo->prepare($sql);
        $req->execute();
    }