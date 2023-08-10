<?php 
// session_start(); 
// $_SESSION['admin'] = "root";
// $_SESSION['mdp'] = "root";
if(isset($_POST['identifiant']) && isset($_POST['mdp'])){
    $id = strip_tags($_POST['identifiant']);
    $mdp = strip_tags($_POST['mdp']);
    
    if($id == 'root' && $mdp == 'root') {header("location:outil.php?p=leads");}
    else {header("location: ../index.php?action=erreur");}
}
?>