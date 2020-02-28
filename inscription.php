<?php
session_start();
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

<body id ="balise"class="baliseBlack">

    <?php
    include "header.php";
    ?>

        <div class="imgBox1">
            <img id="AncientPlaneImg" src="img/avion_ancien.jpeg" />
        </div>


        <div class="containerFormulaire">
            
            <h3>Inscription</h3>

            <img id="paperPlaneIcon" src="img/paper_plane.svg" />

            <div id="inscription" class="incriptionFormulaire">

                <form method="post">

                    <p>Entrez vos informations personnelles</p>

                    <ul>
                         <li><label for="nom">Nom</label></br><input type="text" id ="'nom'" name="nom"/></li>
                        <li><label for="prenom">Prénom</label></br><input type="text" id="prenom" name="prenom"/></li>
                        <li><label for="naissance">Date de naissance</label></br><input type="date" id ="naissance" name="naissance"/></li>
                        <li><label for="mail">E-mail</label></br><input type="email" id="mail" name="mail"/></li>
                    </ul>

                    <p>Entrez vos informations de connexion</p>

                    <ul>
                        <li><label for="pseudo">Pseudo</label></br><input type="text" id="pseudo" name="pseudo"/></li>
                        <li><label for="mdp">Mot de passe</label></br><input type="password" id="mdp" name="mdp"/></li>
                    </ul>

                    <button type="submit" value="">Finaliser mon inscription</button>


                    <?php if ($_POST['nom']): ?>
                            <h2>Vous êtes inscrits</h2>
                         <li><a href="login.php">connectez-vous ici</a></li>
                    <?php endif ?>

                </form>
            
            </div>

        </div>



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
        $mdp_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        echo "on est dans le size of";
        $aviateur = new Utilisateurs ($_POST['nom'],$_POST['prenom'],$_POST['pseudo'],$_POST['naissance'], $_POST['mail'], $mdp_hache);
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
