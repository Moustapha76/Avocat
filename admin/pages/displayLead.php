<?php
    include 'connexion.php';
    $updateStatut = $bdd->prepare('UPDATE leads SET vu = 1 WHERE id = ?');
    $updateStatut->execute(array($_GET['id']));
    $req = $bdd->prepare("SELECT * FROM leads  WHERE id = ?");
    $req->execute(array($_GET['id']));
    $leads = $req->fetchAll();
foreach($leads as $lead){
?>
    <div class="detail">
        <a href="outil.php?p=lead" class="closer"><i class="fa-solid fa-xmark"></i></a>
        <div class='msgbox'><?=$lead['msg']?></div>
        <p>Details du message</p>   
        <div class="infos">
            <span><b>Nom : </b> <?=$lead['nom']?></span>
            <span><b>Téléphone : </b> <?=$lead['tel']?></span>
            <span><b>Email : </b> <?=$lead['email']?></span>
            <span><b>Envoyé le : </b> <?=$lead['jour']?></span>
        </div>
    </div>
<?php } ?>