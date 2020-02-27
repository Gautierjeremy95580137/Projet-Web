<?php
session_start();
var_dump($_SESSION['pseudo']);

if (!$_SESSION['pseudo']){
        header('Location: login.php');
        exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MyFavoriteFlight</title>
    <link href="style/style.css" rel="Stylesheet" type="text/css" >

</head>
<body id ="balise"class="baliseBlack">

<?php include "header.php" ?>
        

        <div class="signature">
            Étudiants impliqués dans le projet :
            <ul>
                <li>Boris CASSEL</li>
                <li>Jérémy GAUTIER</li>
                <li>Teddy VILLARS</li>
                <li>Hugo PAVARD</li>
            </ul>
            </br>
            Coding Factory by ITESCIA
        </div>

        <?php include "footer.php" ?>

    </body>
</html>