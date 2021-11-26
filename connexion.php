<?php
 /* fonction pour ouvrir une connexion au serveur MySQL */
$bdd= mysqli_connect("localhost:3306","romain-vitalis","Lacoste260???","romain-vitalis_moduleconnexion");


if(isset($_POST['login']) && isset($_POST['mdp'])){
    $login=$_POST['login'];
    $pass=$_POST['mdp'];
    $sql=mysqli_query ($bdd,"SELECT * FROM utilisateurs WHERE login='$login' and password='$pass'");
    $res= mysqli_fetch_all($sql); 
    if(count($res) > 0 ) {
        echo "vous êtes connecté";
        session_start();
        $_SESSION['id']=$res[0][0];
        header("Refresh: 6;url=profil.php");
        if ($login == 'admin' && $pass== 'admin') {
            $sql=mysqli_query ($bdd,"SELECT * FROM utilisateurs WHERE login='$login' AND password='$pass'");
            $res= mysqli_fetch_all($sql); 
            session_start();
            header ('Location: admin.php');
        } 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>$connexion</title>
</head>
  <!--Début Barre de Naviguation --->
<nav>
        <div>
        <img src="https://www.makrea.com/1441-large_default/sticker-logo-olympique-de-marseille.jpg" alt="Logo OM" width="145px" height="145px">
        </div>

<!--Début Menu --->
<ul class="Menu">
    <li><a href="index.php">Accueil</a></li>
    <li>Boutique</li>
    <li>Billeterie</li>
    <?php 
        if (isset($_SESSION["id"])) {
        echo "<li><a href='crash.php'>Déconnexion</a></li>";
        echo "<li><a href='profil.php'>Profil</a></li>"; 
         } else {
        echo "<li><a href='connexion.php'>Se connecter</a></li>";
        echo "<li><a href='Inscription.php'>Sinscrire</a></li>";
    };
        ?>
</ul>
</nav> 

<body>
<div class ="connexion">
<form method="POST" action="#">
        <label>Login:</label><input type=text name="login"><br>
        <label>Password:</label><input type=password name="mdp"><br>
        <input type=submit value="Envoyer" name="env">
</div>
</form>

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
 