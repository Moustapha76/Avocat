<?php
    if(isset($_GET['ids'])){
        include 'connexion.php';
        $req = $bdd->prepare('SELECT * FROM service WHERE id = ?');
        $req->execute(array($_GET['ids']));
        $services = $req->fetchAll();
        $id = $services[0]['id'];
        $title = $services[0]['title'];
        $subtitle = $services[0]['subtitle'];
        $content = $services[0]['content'];
        $img = $services[0]['img_service'];
        // echo $id.'<br/>'.$title.'<br/>'.$subtitle.'<br/>'.$content.'<br/>'.$img; 
    }
?>
<section id="service">
    <div class="addService bloc-contain">
        <h4 class="title">
            <?php if(isset($id)) echo 'Service &nbsp;N&deg;'.$id; else echo "Ajout d'un service"; ?>
            <?php
            if(isset($id)){ ?>
                <a class="btn btn-danger" href="deleteService.php?ids=<?= $id ?>" onclick="return(confirm('Voulez-vous supprimer ce service ?'))">Supprimer <i class="fa-solid fa-trash"></i></a>
            <?php }
            ?>
        </h4><br>
        <form action="<?php if(isset($id)) echo 'saveService.php?ids='.$id; else echo "saveService.php"; ?>" method="POST"  enctype="multipart/form-data">
            <div class="infos">
               <div class="group-addon">
                   <div class="input-group">
                        <label for="titre">Titre</label>
                        <input type="text" id="titre" name="title" class="titre" value="<?php if(isset($title)) echo $title; else echo 'Titre du service'; ?>" />
                    </div>
                    <div class="input-group">
                        <label for="subtitle">Sous-titre</label>
                        <input type="text" id="subtitle" name="subtitle" value="<?php if(isset($subtitle)) echo $subtitle; else echo 'Sous-titre du service'; ?>">
                    </div>
               </div>
                <div class="input-group">
                    <label for="content">Contenu</label>
                    <textarea name="content" id="content" cols="50" rows="10"><?php if(isset($content)) echo $content; else echo 'Site en cours d\'enrichissement...'; ?></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="<?php if(isset($id)) echo "Sauvegarder"; else echo "Ajouter"; ?>"/>
            </div>
            <div class="upload-box">
                <div class="upload-img">
                    <img id="preview" src="<?php if(isset($img)) echo $img; else echo "../../public/images/upload.png"; ?>" alt="image de l'article">
                </div>
                <label for="imgService" class="btn btn-primary"><?php if(isset($img)) echo "Modifier l'image"; else echo "Téléverser une image"; ?></label>
                <input type="file" id="imgService" name="imgService"/>
            </div>
        </form>
    </div>
</section>
<script>
var imgService = document.querySelector("#imgService");
var preview = document.querySelector("#preview");
imgService.addEventListener('change', function(e) {
    if (e.target.files.length > 0) {
        const url = URL.createObjectURL(e.target.files[0]);
        preview.src = url;
    }
})</script>