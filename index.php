<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MyFavoriteFlight</title>
    <link href="style/style.css" rel="Stylesheet" type="text/css" >
</head>
<body id ="balise"class="baliseBlack">

<?php include "header.php" ?>

	<div class="log">
		<h2>My Flight Assistant</h2>
		
		<p><a href="login.php">Connexion</a></p>
		<p><a href="inscription.php">Inscription</a></p>

		<button onclick="isChange(1)">white</button>
		<button onclick="isChange()">black</button>

	</div>

	<?php include "footer.php" ?>
	<script src="darkmode.js"></script>
</body>
</html>


