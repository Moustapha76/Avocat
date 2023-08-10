<?php
        include './admin/pages/connexion.php';
        $nom = strip_tags($_POST['nom']);
        $tel = strip_tags($_POST['tel']);
        $mail = strip_tags($_POST['mail']);
        $msg = strip_tags($_POST['msg']);
        if(isset($nom) && !empty($nom) && isset($tel) && !empty($tel) && isset($mail) && !empty($mail) && isset($msg) && !empty($msg)){
                $req = $bdd->prepare('INSERT INTO leads (nom,tel,email,msg,jour) VALUES(?,?,?,?,NOW())');
                $req->execute(array($nom,$tel,$mail,$msg));
        
                header('location: index.php?action=success');
        }
        else{
                header('location: index.php');
        }

?>
<!-- CREATE TABLE leads (
    id int PRIMARY KEY,
    nom varchar(255),
    tel varchar(255),
    email varchar(255),
    msg varchar(255),
    jour datetime
); -->