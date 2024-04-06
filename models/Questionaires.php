<?php
    require_once 'Model.php';

    function CreateQuestionnaire($intitule, $contenu, $reponses, $id_utilisateur, $pdo)
{
    $sql = "INSERT INTO questionnaires (intitule, contenu, reponses, id_utilisateur) VALUES (:intitule, :contenu, :reponses, :id_utilisateur)";
    $req = $pdo->prepare($sql);
    
    // Remplacer les paramètres par leurs valeurs respectives
    $req->bindParam(':intitule', $intitule);
    $req->bindParam(':contenu', $contenu);
    $req->bindParam(':reponses', $reponses);
    $req->bindParam(':id_utilisateur', $id_utilisateur);
    
    $req->execute();
}

    function ReadALLQuestionnaire($pdo)
    {
        
        $sql="SELECT * FROM questionnaires";
        $req=$pdo->prepare($sql);
        $req->execute();
        $datas=$req->fetchAll();

        return $datas;
    }

    function ReadQuestionnaire($id,$pdo)
    {
        $sql="SELECT * from questionnaires WHERE id_questionnaire='$id'";
        $req=$pdo->prepare($sql);
        $req->execute();
        $data=$req->fetchAll();

        return $data;
    }

    function UpdateQuestionnaire($id, $intitule, $contenu, $reponses, $id_utilisateur, $pdo)
{
    $sql = "UPDATE questionnaires SET intitule=:intitule, contenu=:contenu, reponses=:reponses, id_utilisateur=:id_utilisateur WHERE id_questionnaire=:id";
    $req = $pdo->prepare($sql);
    
    // Remplacer les paramètres par leurs valeurs respectives
    $req->bindParam(':intitule', $intitule);
    $req->bindParam(':contenu', $contenu);
    $req->bindParam(':reponses', $reponses);
    $req->bindParam(':id_utilisateur', $id_utilisateur);
    $req->bindParam(':id', $id);
    
    $req->execute();
}

    function DeleteQuestionnaire($id,$pdo)
    {
        $sql="DELETE FROM questionnaires WHERE id_questionnaire='$id'";
        $req=$pdo->prepare($sql);
        $req->execute();
    }

    function Countquestionnaire($pdo)
    {
        $sql="SELECT * from questionnaires";
        $req=$pdo->prepare($sql);
        $req->execute();        
        $req->fetchAll(PDO::FETCH_OBJ);
        $datas=$req->rowCount();
        return $datas;
    }