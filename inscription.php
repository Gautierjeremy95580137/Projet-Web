<?php
/* implantation d'un cookie
if (!empty($_POST['nom'])){
    setcookie('utilisateur',$_POST['nom']);
}*/

require "utilisateurs.php";
require "request.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Flight Assistant</title>
    <link  href="style/style.css" rel="Stylesheet" type="text/css" >
</head>
<body>


<?php
include "header.php";
?>

<div id="inscription" class="incriptionFormulaire">


    <form method="post">
        <label for="nom"> Indiquez votre nom</label>
                    <input type="text" id ="'nom'" name="nom"/>

                    <label for="prenom">Indiquez votre prénom</label>
                    <input type="text" id="prenom" name="prenom"/>


                    <label for="pseudo">Indiquez votre pseudo</label>
                    <input type="text" id="pseudo" name="pseudo"/>


                  <label for="naissance">Indiquez votre date de naissance</label>
                 <input type="text" id ="naissance" name="naissance"/>


                    <label for="mail">Indiquez votre mail</label>
                    <input type="text" id="mail" name="mail"/>



                    <label for="mdp">Indiquez votre mot de passe</label>
                    <input type="text" id="mdp" name="mdp"/>


                    <button type="submit" value="">Finaliser mon inscription</button>
    </form>


    <?php
    //echo "coucou je suis là";
    $bdd = new Request('mysql', 'localhost', 'aviation', 'root', 'root');
   // echo "je suis encore là";
    $bdd->getmybdd();
    //$bdd->setInsertAviateur('test2', 'test2prenom', 'monpseudo',  '1983-11-11','mail', 'mdp');

    /**var_dump($bdd);
    var_dump($_POST);
    var_dump($_POST['nom']);

    echo $_POST['nom'];
    echo $_POST['prenom'];
    echo $_POST['pseudo'];
    echo $_POST['naissance'];
    echo $_POST['mail'];
    echo $_POST['mdp'];*/

    /**
     * envoi données à la bdd apres verification que la variable de stockage des données transmises par le formulaire n'est pas vide
     */
    if(sizeof($_POST)>0){
    echo "on est dans le size of";
    $aviateur = new Utilisateurs ($_POST['nom'],$_POST['prenom'],$_POST['pseudo'],$_POST['naissance'], $_POST['mail'], $_POST['mdp']);
    var_dump($aviateur);
    $bdd->setInsertAviateur($aviateur->getNom(), $aviateur->getPrenom(), $aviateur->getPseudo(), $aviateur->getNaissance(), $aviateur->getMail(), $aviateur->getMdp());
    //echo $bdd;
    //echo $aviateur;
    }
    ?>

</div>
<?php include "footer.php" ?>
</body>
</html>
