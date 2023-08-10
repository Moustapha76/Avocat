<?php
        include 'connexion.php';
        $req = $bdd->query('SELECT * FROM banner WHERE id = 1');
        $bannerInfos = $req->fetchAll();
        $slogan = $bannerInfos[0]['slogan'];
        $description = $bannerInfos[0]['description'];
        $imgUrl = $bannerInfos[0]['imgBanner'];
        // echo $id.'<br/>'.$title.'<br/>'.$subtitle.'<br/>'.$content.'<br/>'.$img; 
?>
<section id="banner">
    <div class="addBanner bloc-contain">
        <h4 class="title">Bandeau d'accueil</h4><br>
        <form action="saveBanner.php" method="POST"  enctype="multipart/form-data">
            <div class="infos">
                <div class="group-addon">
                    <div class="input-group">
                        <label for="slogan">Slogan</label>
                        <input type="text" id="slogan" name="slogan" value="<?php echo $slogan; ?>" class="slogan"/>
                    </div>
                    <div class="input-group">
                        <label for="description">Description</label>
                        <textarea id="description" rows="5" cols="20" name="description"><?php echo $description; ?></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sauvegarder</button>
            </div>
            <div class="upload-box">
                <div class="upload-img">
                    <img id="preview" src="<?php echo $imgUrl; ?>" alt="image de l'article">
                </div>
                <label for="imgBanner" class="btn btn-primary">Modifier l'image</label>
                <input type="file" id="imgBanner" name="imgBanner"/>
            </div>
        </form>
    </div>
</section>
<script>
var imgBanner = document.querySelector("#imgBanner");
var preview = document.querySelector("#preview");
imgBanner.addEventListener('change', function(e) {
    if (e.target.files.length > 0) {
        const url = URL.createObjectURL(e.target.files[0]);
        preview.src = url;
    }
})</script>