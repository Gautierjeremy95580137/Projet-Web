<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MyFavoriteFlight</title>
    <link href="style/style.css" rel="Stylesheet" type="text/css" >
</head>
<body>

<?php
/**require 'auth.php';

if (estConnecte()) {
header('Location: /index.php');
exit();
}
endif;*/
include 'header.php';
?>

    <form action="" method="post">
        <div>
            <input type="text" name="pseudo" placeholder="Nom d'utilisateur">
        </div>
        <div>
            <input type="password" name="mdp" placeholder="Votre mot de passe">
        </div>
        <button type="submit">Se connecter</button>
    </form>

    <?php include "footer.php" ?>
</body>
</html>

