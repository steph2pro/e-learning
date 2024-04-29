
<?php 
     session_start();
    include_once "../models/Questionaires.php";

    $id = $_GET['id'];

    $questionnaire=ReadQuestionnaire($id,$pdo);


      if (isset($_POST)) {
        
        $reponse = $_POST['reponse'];
        $reponses=$questionnaire[0]["reponses"];
       
        // Convertir la chaîne en un tableau de réponses en utilisant une expression régulière pour le séparateur
        $reponsesArray = preg_split('/[,;]\s*/', $reponses);
         // Supprimer les espaces autour des réponses 
        $reponsesArray = array_map('trim', $reponsesArray);
         // test si la reponse fait partie des reponses proposer
        if (in_array($reponse, $reponsesArray)) {
            $_SESSION["msg"]="votre reponse es bien juste bravo";
            header('location:../index.php?p=quizApp');
        } else {
            $_SESSION["msg"]="votre reponse est fausse veillez reesayer";
            header('location:../index.php?p=quizApp');
        }

        
    }


        ?>