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
	<link href="style/style.css" rel="Stylesheet" type="text/css" >
	
	<title></title>
</head>

<?php include "header.php" ?>

<body id ="balise"class="baliseBlack">



	<div class="imgBox1">
        <img id="AncientPlaneImg" src="img/avion_ancien.jpeg" />
    </div>


		<div class="general" style="text-align: center";>
		<h1 class="titre" >Convertisseur</h1>
		<h3>Kilogramme en Livre</h3>
		<form action="" method="POST">
		<input type="text" name="n1">
		
		<input type="submit" value="Calculer">
		</form>
		<?php


		if(isset($_POST['n1']))// si les variables post existent (elles sont créées suite à la validation du formulaire), on affiche le résultat
		{

		    $resultat = $_POST['n1']*2.2046;// la variable $resultat prend la valeur demandée

		    echo  $resultat." LBS";// "echo" sert à afficher du texte
		}
		?>
		<hr>

		<h3>Livre en Kilogramme</h3>
		<form action="" method="POST">
		<input type="text" name="n2">
		
		<input type="submit" value="Calculer">
		</form>
		<?php


		if(isset($_POST['n2']))// si les variables post existent (elles sont créées suite à la validation du formulaire), on affiche le résultat
		{

		    $resultat = $_POST['n2']*0.4536;// la variable $resultat prend la valeur demandée

		    echo  $resultat." KGS";// "echo" sert à afficher du texte
		}
		?>

		<hr>

		<h3>HectoPascal en Pouce de mercure</h3>
		<form action="" method="POST">
		<input type="text" name="n3">
		
		<input type="submit" value="Calculer">
		</form>
		<?php


		if(isset($_POST['n3']))// si les variables post existent (elles sont créées suite à la validation du formulaire), on affiche le résultat
		{

		    $resultat = $_POST['n3']/33.864;// la variable $resultat prend la valeur demandée

		    echo  $resultat." inhg";// "echo" sert à afficher du texte
		}
		?>

		<hr>

		<h3>Pouce de mercure en HectoPascal</h3>
		<form action="" method="POST">
		<input type="text" name="n4">
		
		<input type="submit" value="Calculer">
		</form>
		<?php


		if(isset($_POST['n4']))// si les variables post existent (elles sont créées suite à la validation du formulaire), on affiche le résultat
		{

		    $resultat = $_POST['n4']*33.864;// la variable $resultat prend la valeur demandée

		    echo  $resultat." HPa";// "echo" sert à afficher du texte
		}
		?>






		<hr>
		<h3>Conversion temporelle</h3>
		<h4>Veuillez entrer des valeurs au format HH:MM:SS</h4>
		<div id="Down"></div>
		<button type="button" onclick="getValue()"; >Addition</button>
		<div id="Down2"></div>
		<script src="convertisseurTemporel.js"></script>

</div>




	<?php include "footer.php" ?>

</body>
</html>