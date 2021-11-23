<?php

session_start();
$id = $_SESSION["id"];
$bdd= mysqli_connect("localhost:3306","romain-vitalis","Lacoste260???","romain-vitalis_moduleconnexion");
$req= mysqli_query($bdd,"SELECT * FROM utilisateurs WHERE id = $id");
$res= mysqli_fetch_all($req,MYSQLI_ASSOC);
$login = $res[0]['login'];
$prenom = $res[0]['prenom'];
$nom = $res[0]['nom'];
$password = $res[0]['password']; 


if (isset($_POST['env']))
{
    $nom10 = $_POST['nom'];
    $prenom10 = $_POST['prenom'];
    $password10 = $_POST['password'];
    $login10 = $_POST['login'];
    $req2= mysqli_query($bdd,"UPDATE utilisateurs SET login='$login10', prenom='$prenom10', nom='$nom10', password='$password10' WHERE  id = $id ");
    header("Location: profil.php");
} 

?>


<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>site</title>
</head>
<nav>
        <div>
        <img src="https://www.makrea.com/1441-large_default/sticker-logo-olympique-de-marseille.jpg" alt="Logo OM" width="145px" height="145px">
        </div>
<ul class="Menu">
    <li><a href="index.php">Accueil</a></li>
    <li>Boutique</li>
    <li>Billeterie</li>
    <li><a href="inscription.php">Inscription</a></li>
    <li><a href="connexion.php">Connexion</a></li>
    <li>Profil</li>
</ul>
</nav> 
<header class ="img"> 
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQcuIudOCAc2emquEIjAb3Wa1S5DMg78istA&usqp=CAU" width="200px"  height="200px">
</header>
<body>
<h3>Modification du profil</h3>
        <form name="formu" action="#" method="POST">
        <div class ="formli">
        <label for="username">Nouveau login:</label> 
        <input id="login" name="login" type="text" placeholder="username"/>
        <label for="username">Changement Prénom:</label> 
        <input name="prenom"  type="text" placeholder="prenom"/>
        <label for="username">Changement nom:</label> 
        <input name="nom"  type="text" placeholder="nom"/>
        <label for="username">Changement mot de passe :</label> 
        <input name="password"  type="password" placeholder="ton mdp"/>
	    <input type=submit value="Mettre à jour le profil" name="env">
        </div>
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
        </form>
</body>
</html>


