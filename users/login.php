<?php
/**require 'users/auth.php';

if (estConnecte()) {
header('Location: ../index.php');
exit();
}
endif;*/
require '../header.php';
?>

    <form action="" method="post">
        <div class="form-group">
            <input class="form-control" type="text" name="pseudo" placeholder="Nom d'utilisateur">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="motdepasse" placeholder="Votre mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>

