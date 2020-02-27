<header id="testheader" class="header">
	<nav id="menu">
		<img class="logoImg" src="../img/logo.png" alt="logo">
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="planvol.php">Plan de vol</a></li>
			<li><a href="outils.php">Convertisseur</a></li>
			<li><a href="forum.php">Forum</a></li>
			<li><a href="stats.php">Ma page</a></li>
			<li><a href="cartes.php">Telechargement</a></li>
            <?php if ($_SESSION['pseudo']): ?>
                <li><a href="logout.php">Se déconnecter</a></li>
            <?php endif ?>
		</ul>
	</nav>
	<div>
		<button class="onoff" onclick="onoff(this)"><div>White</div></button>
		<script src="darkmode.js"></script>
	</div>
</header>