<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MyFavoriteFlight</title>
    <link href="style/style.css" rel="Stylesheet" type="text/css" >
</head>
<body id ="balise"class="baliseBlack">

<div class="imgBox1">
    <img id="AncientPlaneImg" src="img/avion_ancien.jpeg" />
</div>

<?php include "header.php" ?>

	<div class="log">
		<form>

		<div id="Down"></div>
		<button type="button" onclick="getValue();" >ADDITION</button>
		<div id="Down2"></div>

		</form>
	</div>

	<?php include "footer.php" ?>
	<script src="convertisseurTemporel.js"></script>
</body>
</html>