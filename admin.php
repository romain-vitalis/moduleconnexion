<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <meta charset="utf-8">

    </head>
    <body>
        <h1>My SQL</h1>
        <?php
            $bdd = mysqli_connect("localhost","root","","moduleconnexion"); 
            $req= mysqli_query($bdd,"SELECT * FROM utilisateurs");  
            $res= mysqli_fetch_all($req); 
 ?>

        <h1>Tableau de bord</h1>
        <table>
            <head>
                <?php
                echo '<tr>';                        
                foreach($res[0] as $key => $value){        
                echo "<th>$key</th>"; }
                    echo '</tr>';
                    ?>
            </head>
            <body>
                <tr>
            <?php



                foreach($res as $key => $value){ 
                echo '<tr>';
                foreach ($value as $key1 => $value1) 
                {
                echo "<td>$value1</td>";  
                }
                 echo '</tr>'; 
                }
                ?>

            </body>
        </table>
    </body>
</html>
