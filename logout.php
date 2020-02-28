<?php
session_start();
unset($_SESSION['pseudo']);
session_destroy();
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
    <title>My Flight Assistant</title>
        <link  href="style/style.css" rel="Stylesheet" type="text/css" >
    </head>

    <?php include "header.php"; ?>

    <body id ="balise"class="baliseBlack body">

        <div class="imgBox1">
            <img id="AncientPlaneImg" src="img/avion_ancien.jpeg" />
        </div>

            <div class="imgBox1">
                <img id="AncientPlaneImg" src="img/avion_ancien.jpeg" />
            </div>

            <div class="containerFormulaire">
                <div id="inscription" class="incriptionFormulaire">
                    <div>Vous avez été déconnecté</div>
                    </br>
                    <div id="reco">
                    <a class="onoff" href="login.php"><div>Connexion</div></a>
                    </div> 
                </div>
            </div>
    <?php include "footer.php" ?>
    </body>
</html>
