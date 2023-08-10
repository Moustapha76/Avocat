<?php
    // Tip : PHP don't show sql error
    include "connexion.php";
    $id = strip_tags($_GET['ids']);
    $req = $bdd->prepare("DELETE FROM service WHERE id = ?");
    $req->execute(array($id));
    
    header("location:outil.php?p=service&action=success");
?>