<?php
if(isset($_GET['action']) && ($_GET['action'] == 'success')){?>
    <div class="success"><p>Merci !<br/><br/>Votre message est en cours de traitement, nous vous repondrons dans les plus bref delais.</p><br/><a class="btn close">Ok</a></div> 
<?php
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="avocat, docteur en droit, avocat au maroc, avocat casablanca, meilleur avocat maroc">
    <title>Maître Diouf Moustapha : Avocat Docteur en Droit</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="./public/images/logo.png" alt="Maître Diouf Moustapha"></a>
        <nav>
            <label for="menu"><i class="fa-solid fa-bars"></i></label>
            <input type="checkbox" id="menu">
            <ul>
                <li><a href="#atout">Nos atouts</a></li>
                <li><a href="#accueil">Qui sommes-nous ?</a></li>
                <li><a href="#team">L'équipe</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="tel-show btn">Afficher le numéro</div>
    </header>
    <div class="banner">
        <h1>D.C.S</h1>
        <p>Meilleur cabinet d'avocats au Maroc depuis 2002</p>
    </div>
    <main>
        <section id="atout">
            <h1>Pourquoi nous choisir ?</h1>
            <div class="flex-div">
                <div class="item">
                    <i class="fa-solid fa-ear-listen"></i>
                    <p>Bonne écoute</p>
                </div>
                <div class="item">
                    <i class="fa-solid fa-handshake-angle"></i>
                    <p>Accompagnement</p>
                </div>
                <div class="item">
                    <i class="fa-solid fa-user-tie"></i>
                    <p>Professionnalisme</p>
                </div>
                <div class="item">
                    <i class="fa-solid fa-briefcase"></i>
                    <p>Expérience</p>
                </div>
            </div>
        </section>
        <section id="accueil">
            <h1>Qui sommes-nous ?</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus quibusdam cupiditate atque officia neque ex! Enim corrupti exercitationem praesentium excepturi itaque aliquam laborum incidunt, magni eius nam quos, quam neque?</p>
        </section>
        <section id="team">
            <h1>Notre équipe</h1>
            <div class="flex-div">
                <div class="item"><img src="./public/images/team/1.jpg" alt="">
                    <p>Fatima Saleh, 33 ans<br>Avocate à la cour</p>
                </div>
                <div class="item"><img src="./public/images/team/2.jpg" alt="">
                    <p>Younouss Mehdi, 29 ans<br>Avocat à la cour</p>
                </div>
                <div class="item"><img src="./public/images/team/3.jpg" alt="">
                    <p>Modou Fall, 27 ans<br>Avocat à la cour</p>
                </div>
                <div class="item"><img src="./public/images/team/4.jpg" alt="">
                    <p>Yasser Arafat, 30 ans<br>Avocat à la cour</p>
                </div>
            </div>
        </section>
        <section id="service">
            <h1>Nos services</h1>
            <div class="bloc-services">
                <div class="service-1"><img src="./public/images/services/Arbitrage.jpeg" alt="Arbitrage">
                    <p>Arbitrage</p>
                </div>
                <div class="service-2"><img src="./public/images/services/Contentieux-et-précontentieux.jpg" alt="Contentieux et précontentieux">
                    <p>Contentieux et précontentieux</p>
                </div>
                <div class="service-3"><img src="./public/images/services/droit-des-societes.jpg" alt="droit des sociétés">
                    <p>Droit des sociétés</p>
                </div>
                <div class="service-4"><img src="./public/images/services/Droit-social.jpg" alt="Droit social">
                    <p>Droit social</p>
                </div>
                <div class="service-5"><img src="./public/images/services/Propriété-intellectuelle.jpg" alt="Propriété intellectuelle">
                    <p>Propriété intellectuelle</p>
                </div>
                <div class="service-6"><img src="./public/images/services/redaction-et-revue-de-contrat.jpg" alt="redaction et revue de contrat">
                    <p>Rédaction et revue de contrat</p>
                </div>
            </div>
        </section>
        <section id="contact">
            <h1>Contactez-nous</h1>
            <form action="dashboard.php" method="post">
                <div class="input-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" required>
                </div>
                <div class="input-group">
                    <label for="tel">Téléphone</label>
                    <input type="tel" name="tel" id="tel" placeholder="Numero de telephone" required>
                </div>
                <div class="input-group">
                    <label for="mail">Email</label>
                    <input type="email" name="mail" id="mail" placeholder="Entrez votre adress mail" required>
                </div>
                <div class="input-group">
                    <label for="msg">Votre message</label>
                    <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Votre message" required></textarea>
                </div>
                <input type="submit" class="btn" value="Soumettre">
            </form>
        </section>
        <section id="plan">
            <h1>Ou nous trouver ?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga praesentium consequatur error accusamus sed repellat odit sapiente, voluptatibus qui nisi ab necessitatibus cupiditate rerum repellendus, harum quasi aspernatur, ratione maxime?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos eius, quas adipisci deleniti quod quos eligendi quisquam laborum quo delectus fugit harum similique eum nihil amet, esse, ipsa voluptatem sapiente!</p><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13304.0514205478!2d-7.6439717!3d33.5270514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1672538501319!5m2!1sfr!2sma" width="1600" height="400" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
    <footer>
        <div>
            <div class="bloc"><img src="./public/images/logo.png" alt="logo du site"></div>
            <div class="bloc">
                <h3>Accés rapide</h3>
                <ul>
                    <li><a href="#atout">Nos atouts</a></li>
                    <li><a href="#accueil">Qui sommes-nous ?</a></li>
                    <li><a href="#team">L'équipe</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="bloc">
                <h3>Ou nous trouver ?</h3>
                90 Lot Mostakbal <br> 20180 Casablanca <br>
                <div class="tel-show">Afficher le numéro</div>
            </div>
            <div class="bloc">
                <h3>FAQ</h3>
                <ul>
                    <li><a href="#">Avocat à Casablanca</a></li>
                    <li><a href="#">Docteur en droit à Casablanca</a></li>
                    <li><a href="#">Meilleur avocat au Maroc</a></li>
                    <li><a href="#">Propriété intellectuelle au Maroc</a></li>
                    <li><a href="#">Droit social au Maroc</a></li>
                    <li><a href="#">Droit des sociétés au Maroc</a></li>
                    <li><a href="#">Rédaction de contrat au Maroc</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">Copyright 2022 - Tous droits réservés <br>Made by DCS with love</div>
    </footer>
    
    <script src="./public/js/main.js"></script>
    <script>
        var close = document.querySelector('.close');
        close.addEventListener('click', function() {
            document.querySelector('.success').style.display = 'none';
        })
    </script>
</body>

</html>