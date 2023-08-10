<?php
include 'connexion.php';
$id = 1;
$slogan = strip_tags($_POST['slogan']);
$description = strip_tags($_POST['description']);

if(isset($_FILES['imgBanner']) AND $_FILES['imgBanner']['error'] == 0){
    if ($_FILES['imgBanner']['size'] <= 2000000){
               $infosimgBanner = pathinfo($_FILES['imgBanner']['name']);
               $extension = $infosimgBanner['extension'];
               $filename = sha1($_FILES['imgBanner']['name']).'.'.$extension;
               $extensions_autorisees = array('jpg', 'jpeg', 'png');
            // $path = "C:/xampp/htdocs/ERP/public/images/produits/". basename($_FILES['imgBanner']['name']);
               $file_path = "../../public/images/banner".$filename;
               if (in_array($extension, $extensions_autorisees)){
                    move_uploaded_file($_FILES['imgBanner']['tmp_name'],$file_path);
                    
                    $req = $bdd->prepare('UPDATE banner SET slogan = ?, description = ?, imgBanner = ? WHERE id = 1');
                    $req->execute(array($slogan,$description,$file_path));
                    
                    header('location:outil.php?p=banner&action=success');
               }else{ header("location:outil.php?p=banner&action=extension"); }
           }else{ header("location:outil.php?p=banner&action=taille"); }
   }
   else{
        $query = $bdd->prepare("UPDATE banner SET slogan = ?, description = ? WHERE id = ?");
        $query->execute(array($slogan,$description,$id));
        header("location:outil.php?p=banner&action=ras");
   }
?>
<!-- CREATE TABLE banner (
    id int PRIMARY KEY,
    slogan varchar(255),
    description varchar(255),
); -->