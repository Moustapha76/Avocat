<?php
    include 'connexion.php';
    $req = $bdd->prepare('SELECT * FROM service');
    $req->execute();
    $services = $req->fetchAll();
?>
<div class="sidebar">
    <h1>Tableau de bord</h1>
    <ul>
        <li><a class="<?php if($_GET['p']=='leads'){echo 'active';} ?>" href="?p=lead">Leads</a></li>
        <li><a class="<?php if($_GET['p']=='banner'){echo 'active';} ?>" href="?p=banner">Bandeau d'accueil</a></li>
        <li class="service-item"><a class="<?php if($_GET['p']=='service'){echo 'active';} ?>" href="?p=service">Services</a>
        <ul class="serviceList">
            <?php
                foreach($services as $service){ ?>
                    <li><a href="outil.php?p=service&ids=<?=$service['id']?>"><?=$service['title']?></a></li>
                <?php
                }
            ?>
        </ul>
        </li>
        <li><a target="__blank" href="http://localhost:13148/Avocat/">Visiter le site</a></li>
    </ul>
</div>