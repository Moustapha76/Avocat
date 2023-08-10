<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/admin.css">
</head>
<body id="connexion">
    <div class="admin">
        <?php if(isset($_GET['action']) && $_GET['action'] == 'erreur'){echo "<div class='error'>Echec de l'Identification</div>";}?>
        <form action="pages/identification.php" method="post">
            <i class="fas fa-user"></i>
            <label for="id">Identifiant</label>
            <input type="text" name="identifiant" id="id" placeholder="Entrez votre identifiant">
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" placeholder="Entrez votre mot de passe">
            <input type="submit" class="btn btn-primary" value="Se connecter">
        </form>
    </div>
</body>
</html>