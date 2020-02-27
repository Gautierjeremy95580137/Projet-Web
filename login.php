<?php
session_start();
echo "test1 ca passe la sessions start";
require_once 'request.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MyFavoriteFlight</title>
    <link href="style/style.css" rel="Stylesheet" type="text/css" >
</head>
<body>

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
    <div class="petitcontainerLog" > Veuillez renseigner votre nom ou prenom. Si vous nêtes pas inscrits, cliquez ici : </div>
    <a href="inscription.php" class="petitcontainerLog logRedirectInscscription">INSCRIPTION</a>
</div>
<?php include 'footer.php' ?>
<?php
echo "ceci est le var_dump  ";
var_dump($_POST);
if(isset($_POST['login']))
{
    /* echo "test2";
         if (empty($_POST['pseudo']) || empty($_POST['mdp'])) {
             echo "test3";
             header("Location: /index.php");
         }

         else {*/
    echo "test4";
    echo "test require";
    $bdd = new Request('mysql', 'localhost', 'aviation', 'root', 'root');
    echo "ligne suivante";
    $bdd->getmybdd();
    echo "ma bdd est:";
    //var_dump($Nbdd);
    echo "test5";
    echo "le mdp est ";
    var_dump ($_POST['mdp']);
    echo "le pseudo est";
    var_dump ($_POST['pseudo']);
    $ok = $bdd->checkmdp($_POST['mdp'], $_POST['pseudo']);
    echo "test6";

    /**   if ($ok==true) {
    echo "test7";
    $_SESSION['pseudo'] = $_POST['pseudo'];
    echo "test8";
    var_dump($_SESSION);
    header ('Location: index.php');
    }
    //else {
    //echo "test9";
    //header("location:index.php");
    //}
    //}*/
}

?>



</body>
</html>
