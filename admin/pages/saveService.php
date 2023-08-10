<?php
include('connexion.php');
$id = strip_tags($_GET['ids']);
$title = strip_tags($_POST['title']);
$subtitle = strip_tags($_POST['subtitle']);
$content = strip_tags($_POST['content']);
if(isset($_FILES['imgService']) AND $_FILES['imgService']['error'] == 0){
    if ($_FILES['imgService']['size'] <= 2000000){
               $infosimgService = pathinfo($_FILES['imgService']['name']);
               $extension = $infosimgService['extension'];
               $filename = sha1($_FILES['imgService']['name']).'.'.$extension;
               $extensions_autorisees = array('jpg', 'jpeg', 'png');
            // $path = "C:/xampp/htdocs/ERP/public/images/produits/". basename($_FILES['imgService']['name']);
               $file_path = "../../public/images/services".$filename;
               if (in_array($extension, $extensions_autorisees)){
                   move_uploaded_file($_FILES['imgService']['tmp_name'],$file_path);
                    
                    if (isset($_GET['ids'])){
                        $req = $bdd->prepare('UPDATE service SET title = ?, subtitle = ?, img_service = ?, content = ? WHERE id = ?');
                        $req->execute(array($title,$subtitle,$file_path,$content,$id));
                    }
                    else{
                        $req = $bdd->prepare('INSERT INTO service (title,subtitle,img_service,content) VALUES(?,?,?,?)');
                        $req->execute(array($title,$subtitle,$file_path,$content));
                    }
                   
                   header('location:./outil.php?p=service&action=success');
               }else{ header("Location: ./outil.php?p=service&action=extension"); }
           }else{ header("Location: ./outil.php?p=service&action=taille"); }
   }
   else if (isset($_GET['ids'])){
        $req = $bdd->prepare('UPDATE service SET title = ?, subtitle = ?, content = ? WHERE id = ?');
        $req->execute(array($title,$subtitle,$content,$id));
        header('location:./outil.php?p=service&action=success');
    }
   else{header("Location: ./outil.php?p=service&action=erreur");}
?>

<!-- CREATE TABLE service (
    id int PRIMARY KEY,
    title varchar(255),
    subtitle varchar(255),
    img_service varchar(255),
    content varchar(255),
); -->