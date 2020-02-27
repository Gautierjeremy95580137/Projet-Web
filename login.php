<?php
session_start();
require_once 'request.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MyFavoriteFlight</title>
    <link href="style/style.css" rel="Stylesheet" type="text/css" >
</head>
<body id ="balise"class="baliseBlack">

<?php
include 'header.php';
?>

<div class="grandContainerLog">
    <form method="post" class="petitcontainerLog">
        <input type="text" name="pseudo" placeholder="Votre pseudo" class="formLog" >
        <input type="password" name="mdp" placeholder="Mot de passe" class="formLog">
        <button type="submit" name="login" value="soumis" class="formLog">Se connecter</button>
    </form>
</div>
<div class="grandContainerLog">

    <a href="inscription.php" class="petitcontainerLog logRedirectInscscription boutonInscription">INSCRIPTION</a>
</div>

<?php include 'footer.php' ?>

<?php
if(isset($_POST['login']))
{
   
   
    $bdd = new Request('mysql', 'localhost', 'aviation', 'root', 'root');
    $bdd->getmybdd();
    $ok = $bdd->checkmdp($_POST['mdp'], $_POST['pseudo']);


}

?>



</body>
</html>
