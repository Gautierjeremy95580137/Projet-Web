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
	<title></title>
	<link href="style/style.css" rel="Stylesheet" type="text/css" >
</head>
<body>

	<?php include "header.php" ?>
	
		<iframe id="inlineFrameExample"
    title="Inline Frame Example"
    width="100%"
    height="220px"
    scrolling="yes" 
    src="https://www.cunimb.net/metars.php">
	</iframe>

	<hr>

	<iframe id="finder"
    title="pdv"
    width="100%"
    height="600px"
    scrolling="yes" 
    src="http://rfinder.asalink.net/free/">
    </iframe>
		


	<?php include "footer.php" ?>

</body>
</html>