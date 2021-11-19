<?php
$bdd= mysqli_connect("localhost","root","","moduleconnexion");


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
    <title>$connexion</title>
</head>
<body>
<form method="POST" action="#">
        <label>Login:</label><input type=text name="login"><br>
        <label>Password:</label><input type=password name="mdp"><br>
        <input type=submit value="Envoyer" name="env">
</form>
</body>
</html>
 