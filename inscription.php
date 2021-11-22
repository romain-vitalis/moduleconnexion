<?php
$bdd= mysqli_connect("localhost:3306","romain-vitalis","Lacoste260???","romain-vitalis_moduleconnexion");

if (isset($_POST['env']))
{
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $mdp = $_POST['mdp'];
  $utilisateurs = $_POST['login'];
  $req= mysqli_query($bdd,"INSERT INTO utilisateurs (login,prenom,nom,password)
  VALUES('$nom','$prenom','$utilisateurs','$mdp')");
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
    <link rel="stylesheet" href="moduleconnexions.css">
    <title>Inscription</title>
</head>
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
</body>
</html>
    