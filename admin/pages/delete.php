<?php
    // Tip : PHP don't show sql error
    include "connexion.php";
    $id = $_GET['id'];
    $req = $bdd->prepare("DELETE FROM leads WHERE id = ?");
    $req->execute(array($id));
    
    header("location:outil.php?p=lead&action=success");
?>