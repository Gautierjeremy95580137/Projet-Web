<?php
require "users/auth.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header>
	<nav id="menu">        
		<img class="logoImg" src="logo.png" alt="logo">
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="planvol.php">Plan de vol</a></li>
			<li><a href="outils.php">Convertisseur</a></li>
			<li><a href="forum.php">Forum</a></li>
			<li><a href="stats.php">Ma page</a></li>
			<li><a href="cartes.php">Telechargement</a></li>
            <?php if (!estConnecte()): ?>
                <li><a href="users/logout.php">Se déconnecter</a></li>
            <?php endif ?>
		</ul>
	</nav>
</header>