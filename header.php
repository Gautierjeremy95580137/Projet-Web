<header id="testheader" class="header">
	<nav id="menu">
		<img class="logoImg" src="img/logo.png">
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="planvol.php">Plan de vol</a></li>
			<li><a href="convertisseur.php">Convertisseur</a></li>
			<li><a href="cartes.php">Telechargement</a></li>
            <?php if ($_SESSION['pseudo']): ?>
                <li class="onoff"><a href="logout.php">Déconnexion</a></li>
            <?php endif ?>
		</ul>
	</nav>
	<div>
		<button class="onoff" onclick="onoff(this)"><div>Activer le mode sombre</div></button>
		<script src="darkmode.js"></script>
	</div>
</header>