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
<body>

	<?php include "header.php" ?>

	<div class="container2">
	<h1>LFPG-Paris charles de gaulle</h1>
	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_30_JAN_2020/FRANCE/AIRAC-2020-01-30/html/eAIP/Cartes/LFPG/AD%202%20LFPG%20ADC%2001.pdf">AD 2 LFPG ADC 01<a>

	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_27_FEB_2020/FRANCE/AIRAC-2020-02-27/html/eAIP/Cartes/LFPG/AD%202%20LFPG%20SID%20RWY26L-26R-27L-27R%20RNAV%20EVX%20LGL.pdf">AD 2 LFPG SID RWY26L-26R-27L-27R RNAV EVX LGL<a>

	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_27_FEB_2020/FRANCE/AIRAC-2020-02-27/html/eAIP/Cartes/LFPG/AD%202%20LFPG%20SID%20RWY%20WEST%20CONV%20POGO%20WEST%20LFPO%20LFOB.pdf">AD 2 LFPG SID RWY WEST CONV POGO WEST LFPO LFOB<a>

	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_27_FEB_2020/FRANCE/AIRAC-2020-02-27/html/eAIP/Cartes/LFPG/AD%202%20LFPG%20STAR%20RWY%20EAST%20-RNAV%20BIBAX%20LUKIP.pdf">AD 2 LFPG STAR RWY EAST -RNAV BIBAX LUKIP<a>

	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_27_FEB_2020/FRANCE/AIRAC-2020-02-27/html/eAIP/Cartes/LFPG/AD%202%20LFPG%20IAC%20RWY09L%20-INA%20RNAV%20OKIPA%20NIGHT.pdf">AD 2 LFPG IAC RWY09L -INA RNAV OKIPA NIGHT<a>

	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_27_FEB_2020/FRANCE/AIRAC-2020-02-27/html/eAIP/Cartes/LFPG/AD%202%20LFPG%20IAC%20RWY09L%20-INA%20RNAV%20OKIPA%20NIGHT.pdf">AD 2 LFPG IAC RWY27L FNA -ILS CAT123 LOC<a>

	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_27_FEB_2020/FRANCE/AIRAC-2020-02-27/html/eAIP/Cartes/LFPG/AD%202%20LFPG%20IAC%20RWY%20WEST%20-INA%20RNAV%20OKIPA.pdf">AD 2 LFPG IAC RWY WEST -INA RNAV OKIPA<a>


	<h1>LFRB-Brest Bretagne</h1>
	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_27_FEB_2020/FRANCE/AIRAC-2020-02-27/html/eAIP/Cartes/LFRB/AD%202%20LFRB%20ADC%2001.pdf">AD 2 LFRB ADC 01<a>

	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_27_FEB_2020/FRANCE/AIRAC-2020-02-27/html/eAIP/Cartes/LFRB/AD%202%20LFRB%20SID%20RWY07R%20-RNAV.pdf">AD 2 LFRB SID RWY07R -RNAV<a>

	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_27_FEB_2020/FRANCE/AIRAC-2020-02-27/html/eAIP/Cartes/LFRB/AD%202%20LFRB%20IAC%20RWY25L%20-INA%20CONV.pdf">AD 2 LFRB IAC RWY25L -INA CONV<a>

	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_27_FEB_2020/FRANCE/AIRAC-2020-02-27/html/eAIP/Cartes/LFRB/AD%202%20LFRB%20IAC%20RWY25L%20FNA%20-ILS%20CAT%20123%20LOC%20Y.pdf">AD 2 LFRB IAC RWY25L FNA -ILS CAT 123 LOC Y<a>

	<h1>LFKF-FIGARI SUD CORSE</h1>
	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_27_FEB_2020/FRANCE/AIRAC-2020-02-27/html/eAIP/Cartes/LFKF/AD%202%20LFKF%20ADC%2001.pdf">AD 2 LFKF ADC 01<a>

	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_27_FEB_2020/FRANCE/AIRAC-2020-02-27/html/eAIP/Cartes/LFKF/AD%202%20LFKF%20SID%20RWY23%20CONV.pdf">AD 2 LFKF SID RWY23 CONV<a>


	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_27_FEB_2020/FRANCE/AIRAC-2020-02-27/html/eAIP/Cartes/LFKF/AD%202%20LFKF%20STAR%20RWY23%20CONV.pdf">AD 2 LFKF STAR RWY23 CONV<a>

	<li><a href="https://www.sia.aviation-civile.gouv.fr/dvd/eAIP_27_FEB_2020/FRANCE/AIRAC-2020-02-27/html/eAIP/Cartes/LFKF/AD%202%20LFKF%20IAC%20RWY23%20-ILS.pdf">AD 2 LFKF IAC RWY23 -ILS<a>





		




	</div>


	<?php include "footer.php" ?>

</body>
</html>