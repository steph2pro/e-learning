<?php
    session_start();

    require_once "controlleur.php";

    if (isset($_GET['a'])) {
        switch ($_GET['a']) {
            case 'add':
                if (isset($_POST)) {
                    
                    $nom = $_POST['name']. ' '.$_POST['prenom'];
                    $pass = $_POST['psw'];
                    $login = $_POST['login'];
                    $tel = $_POST['tel'];
                    $mail = $_POST['mail'];
                    $sexe = $_POST['sexe'];
                    $role = $_POST['role'];
                    $ville= $_POST['ville'];
                    $pays= $_POST['pays'];
                    if (isset($_FILES["photo"])){
                        # recuperation des information sur limage
                        $img_name=$_FILES["photo"]["name"];
                        $img_size=$_FILES["photo"]["size"]/1024;//pour convertir la taille es Ko
                        $tmp_name=$_FILES["photo"]["tmp_name"];
                        if ($img_size>100000) {
                            //message d'erreur
                            $_SESSION["msg"]="desole,ce fichier est trop grand !";
                            echo "erreu2";
                            header('location:../index.php?p=utilisateur');
                       }else{
                            //recuperation de l'extension du fichier
                            $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
                            //convertion de cet extension en miniscule
                            $img_ex_min=strtolower($img_ex);
                            //creation d'un tableau pour stocker les extenssion acceptable
                            $allowed_exs=array("jpg","jpeg","png");
                            //test si l'extension de l'image est parmi de ceux acceptable
                            if (in_array($img_ex_min,$allowed_exs)) {
                                //on renome l'image en le donant un nom aleatoir
                                $photo=uniqid("PROFILE-",true).'.'.$img_ex_min;
                                //creation du repertoire pour les image
                                $img_upload_path="../assets/profiles/".$photo;
                                //on deplace l'image vers le dossier profiles
                                move_uploaded_file($tmp_name,$img_upload_path);
                                //enregistrement dans la bd       
                                CreateUtilisateur ($nom,$tel,$mail,$sexe,$ville,$pays,$login, $pass,$photo,$role ,$pdo);
                                $_SESSION["msg"]="$role enregistrer avec succes";
                                header('location:../index.php?p=utilisateur');
                            }else{
                                //message d'erreur a cause du type de fichier
                                $_SESSION["msg"]="desole,ce fichier n'est pas le type requis !";
                                
                                header('location:../index.php?p=utilisateur');
                            }
                       }
                    }


                    
                }
                break;
            case 'update':
                if (isset($_POST)) {
                    $id = $_GET['id'];
                    $nom = $_POST['name']. ' '.$_POST['prenom'];
                    $pass = $_POST['psw'];
                    $login = $_POST['login'];
                    $tel = $_POST['tel'];
                    $mail = $_POST['mail'];
                    $sexe = $_POST['sexe'];
                    $role = $_POST['role'];
                    $ville= $_POST['ville'];
                    $pays= $_POST['pays'];
                    if (isset($_FILES["photo"])){
                        # recuperation des information sur limage
                        $img_name=$_FILES["photo"]["name"];
                        $img_size=$_FILES["photo"]["size"]/1024;//pour convertir la taille es Ko
                        $tmp_name=$_FILES["photo"]["tmp_name"];
                        if ($img_size>100000) {
                            //message d'erreur
                            $_SESSION["msg"]="desole,ce fichier est trop grand !";
                            echo "erreu2";
                            header('location:../index.php?p=utilisateur');
                       }else{
                            //recuperation de l'extension du fichier
                            $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
                            //convertion de cet extension en miniscule
                            $img_ex_min=strtolower($img_ex);
                            //creation d'un tableau pour stocker les extenssion acceptable
                            $allowed_exs=array("jpg","jpeg","png");
                            //test si l'extension de l'image est parmi de ceux acceptable
                            if (in_array($img_ex_min,$allowed_exs)) {
                                //on renome l'image en le donant un nom aleatoir
                                $photo=uniqid("PROFILE-",true).'.'.$img_ex_min;
                                //creation du repertoire pour les image
                                $img_upload_path="../assets/profiles/".$photo;
                                //on deplace l'image vers le dossier profiles
                                move_uploaded_file($tmp_name,$img_upload_path);
                                //enregistrement dans la bd       
                                UpdateUtilisateur($id,$nom,$tel,$mail,$sexe,$ville,$pays,$login, $pass,$photo,$role ,$pdo);;
                                $_SESSION["msg"]="$role modifier avec succes";
                                header('location:../index.php?p=utilisateur');
                            }else{
                                //message d'erreur a cause du type de fichier
                                $_SESSION["msg"]="desole,ce fichier n'est pas le type requis !";
                                
                                header('location:../index.php?p=utilisateur');
                            }
                       }
                    }

                    
                    
                }
                break;
            case 'delete':
                if (isset($_POST)) {
                    $id = $_GET['id'];
                    
                    DeleteUtilisateur($id,$pdo);
                    $_SESSION["msg"]="$role suprimer avec succes";
                    header('location:../index.php?p=utilisateur');
                }
                break;
            
            default:
                # code...
                break;
        }
    }

    
?>