<?php
    session_start();

    require_once "controlleur.php";

    if (isset($_GET['a'])) {
        switch ($_GET['a']) {
            case 'add':
                if (isset($_POST)) {
                    
                    $intitule = $_POST['intitule'];
                    $desc = $_POST['desc'];
                    $id_cour = $_POST['id_cour'];
                    
                    if (isset($_FILES["contenu"])){
                        # recuperation des information sur limage
                        $img_name=$_FILES["contenu"]["name"];
                        $img_size=$_FILES["contenu"]["size"]/1024;//pour convertir la taille es Ko
                        $tmp_name=$_FILES["contenu"]["tmp_name"];
                        if ($img_size>100000) {
                            //message d'erreur
                            $_SESSION["msg"]="desole,ce fichier est trop grand !";
                            echo "erreu2";
                            header('location:../index.php?p=formation');
                       }else{
                            //recuperation de l'extension du fichier
                            $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
                            //convertion de cet extension en miniscule
                            $img_ex_min=strtolower($img_ex);
                            //creation d'un tableau pour stocker les extenssion acceptable
                            $allowed_exs=array("jpg","jpeg","png","pdf","doc","docx","dot");
                            //test si l'extension de l'image est parmi de ceux acceptable
                            if (in_array($img_ex_min,$allowed_exs)) {
                                //on renome l'image en le donant un nom aleatoir
                                $contenu=uniqid("formation-",true).'.'.$img_ex_min;
                                //creation du repertoire pour les image
                                $img_upload_path="../assets/formations/".$contenu;
                                //on deplace l'image vers le dossier profiles
                                move_uploaded_file($tmp_name,$img_upload_path);
                                //enregistrement dans la bd       
                                CreateFormation( $intitule,$desc,$contenu,$id_cour,$pdo);
                                $_SESSION["msg"]="formation enregistrer avec succes";
                                header('location:../index.php?p=formation');
                            }else{
                                //message d'erreur a cause du type de fichier
                                $_SESSION["msg"]="desole,ce fichier n'est pas le type requis !";
                                
                                header('location:../index.php?p=formation');
                            }
                       }
                    }


                    
                }
                break;
            case 'update':
                
                if (isset($_POST)) {

                    $id = $_GET['id'];
                    $intitule = $_POST['intitule'];
                    $desc = $_POST['desc'];
                    $id_cour = $_POST['id_cour'];
                    if (isset($_FILES["contenu"])){
                        # recuperation des information sur limage
                        $img_name=$_FILES["contenu"]["name"];
                        $img_size=$_FILES["contenu"]["size"]/1024;//pour convertir la taille es Ko
                        $tmp_name=$_FILES["contenu"]["tmp_name"];
                        if ($img_size>100000) {
                            //message d'erreur
                            $_SESSION["msg"]="desole,ce fichier est trop grand !";
                            echo "erreu2";
                            header('location:../index.php?p=formation');
                       }else{
                            //recuperation de l'extension du fichier
                            $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
                            //convertion de cet extension en miniscule
                            $img_ex_min=strtolower($img_ex);
                            //creation d'un tableau pour stocker les extenssion acceptable
                            $allowed_exs=array("jpg","jpeg","png","pdf","doc","docx","dot");
                            //test si l'extension de l'image est parmi de ceux acceptable
                            if (in_array($img_ex_min,$allowed_exs)) {
                                //on renome l'image en le donant un nom aleatoir
                                $contenu=uniqid("formation-",true).'.'.$img_ex_min;
                                //creation du repertoire pour les image
                                $img_upload_path="../assets/formations/".$contenu;
                                //on deplace l'image vers le dossier profiles
                                move_uploaded_file($tmp_name,$img_upload_path);
                                //enregistrement dans la bd       
                                UpdateFormation ($id,$intitule,$desc,$contenu,$id_cour,$pdo);
                                $_SESSION["msg"]="formation modifier avec succes";
                                header('location:../index.php?p=formation');
                            }else{
                                //message d'erreur a cause du type de fichier
                                $_SESSION["msg"]="desole,ce fichier n'est pas le type requis !";
                                
                                header('location:../index.php?p=formation');
                            }
                       }
                    }


                    
                }
                break;
            case 'delete':
                if (isset($_POST)) {
                    $id = $_GET['id'];
                    
                    DeleteFormation($id,$pdo);
                    $_SESSION["msg"]="formation suprimer avec succes";
                    header('location:../index.php?p=formation');
                }
                break;
            
            default:
                # code...
                break;
        }
    }

    
?>