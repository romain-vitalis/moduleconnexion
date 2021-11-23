<?php
$bdd= mysqli_connect("localhost:3306","romain-vitalis","Lacoste260???","romain-vitalis_moduleconnexion");

if (isset($_POST['env']))
{
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $mdp = $_POST['mdp'];
  $utilisateurs = $_POST['login'];
  $req= mysqli_query($bdd,"INSERT INTO utilisateurs (login,prenom,nom,password)
  VALUES('$utilisateurs','$prenom','$nom','$mdp')");
  echo 'enregistrement réussi';
  header("Refresh: 6;url=connexion.php");
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
<nav>
        <div>
        <img src="https://www.makrea.com/1441-large_default/sticker-logo-olympique-de-marseille.jpg" alt="Logo OM" width="145px" height="145px">
        </div>
<ul class="Menu">
    <li><a href="index.php">Accueil</a></li>
    <li>Boutique</li>
    <li>Billeterie</li>
    <li>Inscription</li>
    <li><a href="connexion.php">Connexion</a></li>
    <li><a href="profil.php">Profil</a></li>
</ul>
</nav> 
<body>
<div class ="formulaire">
    <form action="#" method="post">
    <input name="login" type="text" placeholder="username" required />
      <input name="prenom" type="text" placeholder="prenom" required />
      <input name="nom" type="text" placeholder="nom"required />
      <input name="mdp" type="password" placeholder="mot de passe"required />
      <input name="conf" type="password" placeholder="confirmepassword"required />
      <input name="env" type="submit" placeholder="envoyer">  
      <p class="message">Déjà inscrit ? <a href="connexion.php">connexion</a></p>
      </div>
</head>
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
    