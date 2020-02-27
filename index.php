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
    <script src = "jsindex.js"></script>

</head>
<body id ="balise"class="baliseBlack">

<?php include "header.php" ?>

<div class="grandcontainerBouton">

    <div class="petitcontainerBouton">
        <h3>My Flight Assistant</h3>
        <a href="login.php" class="boutonLog">CONNEXION</a>
        <a href="inscription.php" class="boutonLog">INSCRIPTION</a>
    </div>
</div>
<?php include "footer.php" ?>
</body>
</html>