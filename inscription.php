<?php
$connect= mysqli_connect("localhost:3306","romain-vitalis","Lacoste260???","romain-vitalis_moduleconnexion");

if (isset($_POST['env']))
{
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $password = $_POST['password'];
  $login = $_POST['login'];
  $conf = $_POST['conf']; 

  if (!empty($nom) && !empty($prenom) && !empty($password) && !empty($login)) {
    if ($password == $conf) { 
      echo '...Bienvenue dans le fan club de lOM';
      $req= mysqli_query($connect,"INSERT INTO utilisateurs (login,prenom,nom,password)
    VALUES('$login','$prenom','$nom','$password')");
    } else {echo 'Tas oublier de mettre le même mot de passe';}

  } else {echo 'T as oublier de remplir un champ';}
  
} 



?>
<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
</head>
    <body>
    <nav>
        <div>
        <img src="https://www.makrea.com/1441-large_default/sticker-logo-olympique-de-marseille.jpg" alt="Logo OM" width="145px" height="145px">
        </div>
<ul class="Menu">
    <li><a href="index.php">Accueil</a></li>
    <li>Boutique</li>
    <li>Billeterie</li>
    <?php 
        if (isset($_SESSION["id"])) {
        echo "<li><a href='deconnexion.php'>Déconnexion</a></li>";
        echo "<li><a href='profil.php'>Profil</a></li>"; 
         } else {
        echo "<li><a href='connexion.php'>Se connecter</a></li>";
        echo "<li><a href='inscription.php'>Sinscrire</a></li>";
    };
        ?>
</ul>
</nav> 
      <div class="formulaire"> 
    <form name="formulaire" action="" method="post">
    <input name="login" type="text" placeholder="username"/>
      <input name="prenom" type="text" placeholder="prenom"/>
      <input name="nom" type="text" placeholder="nom"/>
      <input name="password" type="password" placeholder="Ton mdp"/>
      <input name="conf" type="password" placeholder="confirmer"/>
<input name="env" type="submit" placeholder="envoyer">
      <p class="message">T'as déjà un compte ? Connecte-toi<a href="connexion.php">Connexion</a></p>
    </form>
      <footer>      
    <h3>Contact</h3>
    <p>Tel:04 84 45 38 00</p>
    <p>Emails: digital@om.net</p>
    <p>Adresse: 3 Bd Michelet,</p>
    <p>Ville: Marseille 13008</p>
    <p>Ou alors contactez-nous via nos réseaux sociaux</p>
    <li><a href="https://twitter.com/OM_Officiel?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter</a></li>
    <li><a href="https://www.facebook.com/OM">Facebook</a></li>   
</footer>
</body>
</html>
    