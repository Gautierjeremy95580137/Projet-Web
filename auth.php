<?php


/** cette foonct retourne triue sur une session utilisateur est en cours  et  lance une session start en cas absence de session
 */
function estConnecte(): bool{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecte']);
}

/**
 *Cette fonction redirige l'utilisateur s'il n'est pas connecté ( état connecté ou nom établi grâce  à la fonction estConnecte)
 */

function forcerConnexion(): void
{
    if (!est_connecte()) {
        header('Location: users/login.php');
        exit();
    }
}