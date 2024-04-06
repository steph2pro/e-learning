<?php
    require_once 'Model.php';

    function CreateUtilisateur( $nom,$tel,$email,$sexe,$ville,$pays,$login, $pass,$photo,$role ,$pdo)
    {
        $sql="INSERT INTO utilisateurs SET  nom='$nom',telephone='$tel',email='$email',sexe='$sexe',ville='$ville',pays='$pays',login='$login',password='$pass',photo='$photo',role='$role';";
    $req=$pdo->prepare($sql);
        $req->execute();
    }

    function ReadALLUtilisateur($pdo)
    {
        $sql="SELECT * from utilisateurs";
        $req=$pdo->prepare($sql);
        $req->execute();
        $datas=$req->fetchAll(PDO::FETCH_ASSOC);

        return $datas;
    }

    function ReadUtilisateur($id,$pdo)
    {
        $sql="SELECT * from utilisateurs WHERE id_utilisateur='$id'";
        $req=$pdo->prepare($sql);
        $req->execute();
        $data=$req->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    function UpdateUtilisateur( $id, $nom,$tel,$email,$sexe,$ville,$pays,$login, $pass,$photo,$role ,$pdo)
    {
        $sql="UPDATE utilisateurs SET nom='$nom',telephone='$tel',email='$email',sexe='$sexe',ville='$ville',pays='$pays',login='$login',password='$pass',photo='$photo',role='$role' WHERE id_utilisateur='$id'";
        $req=$pdo->prepare($sql);
        $req->execute();
    }

    function DeleteUtilisateur($id,$pdo)
    {
        $sql="DELETE FROM utilisateurs WHERE id_utilisateur='$id'";
        $req=$pdo->prepare($sql);
        $req->execute();
    }

    function ReadConnexionUtilisateur($login,$pass,$pdo)
    {
        $sql="SELECT * from utilisateurs WHERE login='$login' AND password='$pass'";
        $req=$pdo->prepare($sql);
        $req->execute();
        $data=$req->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
    function CountUtilisateurs($pdo)
    {
        $sql="SELECT * from utilisateurs";
        $req=$pdo->prepare($sql);
        $req->execute();        
        $req->fetchAll(PDO::FETCH_OBJ);
        $datas=$req->rowCount();
        return $datas;
    }
    
    function CountApprenant($pdo)
    {
        $sql="SELECT * from utilisateurs WHERE role='apprennant'";
        $req=$pdo->prepare($sql);
        $req->execute();        
        $req->fetchAll(PDO::FETCH_OBJ);
        $datas=$req->rowCount();
        return $datas;
    }

    function CountEnseignant($pdo)
    {
        $sql="SELECT * from utilisateurs WHERE role='enseignant'";
        $req=$pdo->prepare($sql);
        $req->execute();        
        $req->fetchAll(PDO::FETCH_OBJ);
        $datas=$req->rowCount();
        return $datas;
    }

    function CountAdmin($pdo)
    {
        $sql="SELECT * from utilisateurs WHERE role='admin'";
        $req=$pdo->prepare($sql);
        $req->execute();        
        $req->fetchAll(PDO::FETCH_OBJ);
        $datas=$req->rowCount();
        return $datas;
    }