<?php
    require_once 'Model.php';

    function CreateFormation( $intitule,$description,$contenues,$id_cour,$pdo)
    {
        $sql="INSERT INTO formations SET  intitule='$intitule',description='$description',contenues='$contenues',id_cour='$id_cour';";
        $req=$pdo->prepare($sql);
        $req->execute();
    }

    function ReadALLFormation($pdo)
    {
        $sql="SELECT * from formations";
        $req=$pdo->prepare($sql);
        $req->execute();
        $datas=$req->fetchAll();

        return $datas;
    }

    function ReadFormation($id,$pdo)
    {
        $sql="SELECT * from formations WHERE id_formation='$id'";
        $req=$pdo->prepare($sql);
        $req->execute();
        $data=$req->fetchAll();

        return $data;
    }

    function UpdateFormation($id, $intitule,$description,$contenues,$id_cour,$pdo)
    {
        $sql="UPDATE formations SET intitule='$intitule',description='$description',contenues='$contenues',id_cour='$id_cour' WHERE id_formation='$id'";
        $req=$pdo->prepare($sql);
        $req->execute();
    }

    function DeleteFormation($id,$pdo)
    {
        $sql="DELETE FROM formations WHERE id_formation='$id'";
        $req=$pdo->prepare($sql);
        $req->execute();
    }

    function CountFormation($pdo)
    {
        $sql="SELECT * from formations";
        $req=$pdo->prepare($sql);
        $req->execute();        
        $req->fetchAll(PDO::FETCH_OBJ);
        $datas=$req->rowCount();
        return $datas;
    }    
    function generateMatricule()
    {
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $letter = substr($letters, mt_rand(0,strlen($letters)-1),1);
        $number = mt_rand(1, 999);
        if ($number < 10) {
            $number = '00'.$number;
        }

        return $letter.$number;
    }