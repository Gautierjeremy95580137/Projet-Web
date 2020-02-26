<?php
session_start();
var_dump($_SESSION['pseudo']);

if (!$_SESSION['pseudo']){
        header('Location: login.php');
        exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MyFavoriteFlight</title>
    <link href="style/style.css" rel="Stylesheet" type="text/css" >
</head>
<body>
<?php include "header.php" ?>

	<div class="log">
		<h2>My Flight Assistant</h2>
		<p><a href="login.php">Connexion</a></p>
		<p><a href="inscription.php">Inscription</a></p>
	</div>

	<?php include "footer.php" ?>
</body>
</html>


