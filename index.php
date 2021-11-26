<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mon site</title>
</head>
<body>
    <!--Début Barre de Naviguation --->
<nav>
        <div>
        <img src="https://www.makrea.com/1441-large_default/sticker-logo-olympique-de-marseille.jpg" alt="Logo OM" width="145px" height="145px">
        </div>
<ul class="Menu">
    <li>Accueil</li>
    <li>Boutique</li>
    <li>Billeterie</li>
    <ul class="sous">
        <?php 
        if (isset($_SESSION["id"])) {
        echo "<li><a href='deconnexion.php'>deconnexion</a></li>";
        echo "<li><a href='profil.php'>Profil</a></li>"; 
         } else {
        echo "<li><a href='connexion.php'>Se connecter</a></li>";
        echo "<li><a href='inscription.php'>Sinscrire</a></li>";
    };
        ?>
      </ul>

</nav> 
    <header class="img"> 
        <img src="https://www.leparisien.fr/resizer/e9VQt5CzgXxTsxJ4vV6jADkRuqk=/932x582/cloudfront-eu-central-1.images.arcpublishing.com/leparisien/GQKKHDS7U5BAHNKBS37LFQHH6A.jpg" width="1500px"  height="400px">
    </header>
<main>
        <section>
            <div>
                <h1>Présentation de notre club</h1><br>
              <p>Le club a été crée en 1899<br>
              Le palmarès de l'OM :
              Champion (11 titres – 9 comptés) : 1929*- 1937 – 1948 – 1971 – 1972 – 1989 – 1990 – 1991 – 1992 – 1993* – 2010<br>
              Coupe de France
              Vainqueur (10 titres) : 1924 – 1926 – 1927 – 1935 – 1938 – 1943 – 1969 – 1972 – 1976 – 1989<br>
              Coupe de la Ligue
              Vainqueur (3 titres) : 2010, 2011, 2012
              Trophée des Champions 
              Vainqueur : 2010, 2011
              Ligue des champions 
              Vainqueur : 1993</p>
            <h2>OL-OM les stats d'avant-match</h2>
            <br>
            <p>L'OM compte 6 clean sheets en Ligue 1 Uber Eats cette saison, plus que toute autre équipe.<br>
            L’OM n’a d’ailleurs pas encaissé de but lors de 3 de ses 4 dernières rencontres dans l’élite. <br>
            Dimitri Payet est impliqué sur 13 buts face à l'OL en Ligue 1 Uber Eats (4 buts, 9 passes décisives), son meilleur total face à une équipe actuelle de l’élite.<br></p>
            <h4>La réaction du directeur de la communication de l’OM, Jacques Cardoze, après l’arrêt de la rencontre OL-OM.</h4>
            «L’arbitre a toujours considéré que sa position était de ne pas reprendre le match. <br>
            Il y a eu un projectile envoyé sur Dimitri Payet et on peut imaginer, derrière, l’atteinte psychologique pour nos joueurs. 
            Faire reprendre le match aurait pu créer des conditions d’iniquité. On voyait bien que les conditions n’étaient pas réunies. 
            On était dans le devoir d’attendre la décision de l’arbitre, celle ensuite de la Ligue. 
            Elle s’est exprimée dans un communiqué dans le courant de la soirée pour regretter la décision de reprendre le match, puisque, à un moment donné, il a été question que le match reprenne.<br>
            Dans un second temps, l’arbitre s’est à nouveau réuni avec les deux présidents, Jean-Michel Aulas et Pablo Longoria.<br> Après cette réunion, il a considéré que les conditions n’étaient pas réunies. La position du club est que c’est à l’arbitre de décider et il a été très clair, il a répété à plusieurs reprises que sportivement, les conditions n’étaient pas réunies.»<br>
            <br>
            <h5>Photos Supporters<h5>
            <blockquote width="200px" height="200px">
            <div class ="photos1">
                <img id="slide"src="https://images.rtl.fr/~c/2000v2000/rtl/www/1388106-des-supporters-de-l-om-au-velodrome-le-17-aout-2015.jpg" width="300px" height="300px">
                <img id="slide"src="https://static.lephoceen.net/cache/images/402230467e0bd39fcad7bc8c09485544.jpg" width="300px" height="300px">
                <img id="slide"src="https://static.lexpress.fr/medias_11698/w_1711,h_1283,c_crop,x_0,y_0/w_640,h_358,c_fill,g_center/v1512893786/les-dirigeants-phoceens-ont-decide-de-sanctionner-leurs-propres-supporters-image-d-illustration_5989810.jpg" width="300px" height="300px">
            </div>
        </blockquote>
</main>
        <section class="fans">
            <a>Rejoins le fan club de l'OM en cliquant sur l'onglet Inscription</a><br>
            <a>Sinon connectez-vous sur l'onglet Connexion</a> 
        </section>
        <footer>      
    <h3>Contact</h3>
    <p>Tel:04 84 45 38 00</p>
    <p>Email: digital@om.net</p>
    <p>Adresse: 3 Bd Michelet,</p>
    <p>Ville: Marseille 13008</p>
    <p>Ou alors contactez-nous via nos réseaux sociaux</p>
    <li><a href="https://twitter.com/OM_Officiel?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter</a></li>
    <li><a href="https://www.facebook.com/OM">Facebook</a></li>   
</footer>
</body>
</html>
</body>
</html>