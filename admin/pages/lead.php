<section id="lead">
    <?php
    include 'connexion.php'; 
    $req = $bdd->prepare("SELECT * FROM leads ORDER BY 'jour' DESC");
    $req->execute();
    $leads = $req->fetchAll();
    ?>
    <h2>Liste des leads</h2>
    <table>
        <thead>
            <th>nom</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Date</th>
            <th>Statut</th>
            <th colspan=2>Options</th>
        </thead>
        <?php
        foreach($leads as $lead){
        ?>
        <tr>
            <td><?=$lead['nom']?></td>
            <td><?=$lead['tel']?></td>
            <td><?=$lead['email']?></td>
            <td><?=$lead['jour']?></td>
            <td><?php if($lead['vu'] == 1) echo 'lu <i class="fa-solid fa-square-check"></i>'; else echo 'Non lu'?></td>
            <td><a class="btn btn-primary" href="outil.php?p=displayLead&id=<?php echo $lead['id']; ?>">Consulter <i class="fa-solid fa-eye"></i></a></td>
            <td><a class="btn btn-danger" href="delete.php?id=<?php echo $lead['id']; ?>" onclick="return(confirm('Voulez-vous supprimer ce message ?'))">Supprimer <i class="fa-solid fa-trash"></i></a></td>
        </tr>
        <?php 
        }
    ?>
    </table>
</section>