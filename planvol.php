<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script type="text/javascript" src="simbrief.apiv1.js"></script>


</head>
<body>

	<?php include "header.php" ?>
	

		






<h3>First and foremost, you must include the following line in your page header: <i>&lt;script type="text/javascript" src="simbrief.apiv1.js"&gt;&lt;/script&gt;</i></h3>

<form id="sbapiform">



<h3>Next, define your options &lt;form&gt; and give it the following property: <i>id="sbapiform"</i>. In your form, you can have user selectable options:</h3>
<br>

<table>
	<tr>
		<td>Aircraft:</td>
		<td><select name="type"><option value="a320">A320</option><option value="b738">B738</option><option value="b744">B744</option><option value="b74f">B74F</option></select></td>
	<tr>
	<tr>
		<td>Origin:</td>
		<td><input name="orig" size="5" type="text" placeholder="ZZZZ" maxlength="4" value="KJFK"></td>
	<tr>
	<tr>
		<td>Destination:</td>
		<td><input name="dest" size="5" type="text" placeholder="ZZZZ" maxlength="5" value="KBOS"></td>
	<tr>
	<tr>
		<td>Route:</td>
		<td><textarea name="route" placeholder="Enter your route here"></textarea></td>
	</tr>
	<tr>
		<td colspan=2>---------------</td>
	</tr>
	<tr>
		<td>Units:</td>
		<td><select name="units"><option value="KGS">KGS</option><option value="LBS" selected>LBS</option></select></td>
	</tr>
	<tr>
		<td>Cont Fuel: </td>
		<td><select name="contpct"><option value="auto" selected>AUTO</option><option value="0">0 PCT</option><option value="0.02">2 PCT</option><option value="0.03">3 PCT</option><option value="0.05">5 PCT</option><option value="0.1">10 PCT</option><option value="0.15">15 PCT</option><option value="0.2">20 PCT</option></select></td>
	</tr>
	<tr>
		<td>Reserve Fuel: </td>
		<td><select name="resvrule"><option value="auto">AUTO</option><option value="0">0 MIN</option><option value="15">15 MIN</option><option value="30">30 MIN</option><option value="45" selected>45 MIN</option><option value="60">60 MIN</option><option value="75">75 MIN</option><option value="90">90 MIN</option></select></td>
	</tr>	
	<tr>
		<td>Detailed Navlog: </td>
		<td><input type="hidden" name="navlog" value="0"><input type="checkbox" name="navlog" value="1" checked></td>
	</tr>
	<tr>
		<td>ETOPS Planning: </td>
		<td><input type="hidden" name="etops" value="0"><input type="checkbox" name="etops" value="1"></td>
	</tr>
	<tr>
		<td>Plan Stepclimbs: </td>
		<td><input type="hidden" name="stepclimbs" value="0"><input type="checkbox" name="stepclimbs" value="1" checked></td>
	</tr>
	<tr>
		<td>Runway Analysis: </td>
		<td><input type="hidden" name="tlr" value="0"><input type="checkbox" name="tlr" value="1" checked></td>
	</tr>
	<tr>
		<td>Include NOTAMS: </td>
		<td><input type="hidden" name="notams" value="0"><input type="checkbox" name="notams" value="1" checked></td>
	</tr>
	<tr>
		<td>FIR NOTAMS: </td>
		<td><input type="hidden" name="firnot" value="0"><input type="checkbox" name="firnot" value="1"></td>
	</tr>
	<tr>
		<td>Flight Maps: </td>
		<td><select name="maps"><option value="detail">Detailed</option><option value="simple">Simple</option><option value="none">None</option></select></td>
	</tr>
</table>
	

<br>

<h3>You can also have hidden options. These are options that you can automatically fill in for your pilots, such as the aircraft registration, departure date, etc.
<br>
The more options you can automatically fill in for your pilots using data from your flight schedules, the more streamlined your dispatch system will be!
<br>
These options do not need be displayed to the user in your dispatch system, they can be passed in the background using <i>&lt;input type="hidden"&gt;</i> tags:</h3>

<br><br>


Airline code: ABC
<input type="hidden" name="airline" value="ABC"> 
<br>

Flight number: 1234
<input type="hidden" name="fltnum" value="1234"> 
<br>

Departure date: 01JAN14
<input type="hidden" name="date" value="01JAN14"> 
<br>

Departure time: 12:30Z
<input type="hidden" name="deph" value="12">
<input type="hidden" name="depm" value="30">	
<br>

Scheduled time enroute: 2:15
<input type="hidden" name="steh" value="2">
<input type="hidden" name="stem" value="15">
<br>

Aircraft registration: N123SB
<input type="hidden" name="reg" value="N123SB">	
<br>

Aircraft selcal code: GR-FS
<input type="hidden" name="selcal" value="GR-FS">	
<br>

Plan format: LIDO
<input type="hidden" name="planformat" value="lido">
<br>


<br>





	
<h3>Finally, include the submit button. This button is tied to a SimBrief javascript function (included in the simbrief.js file) by including the <i>onClick="simbriefsubmit();"</i> option.</h3>


<input type="button" onclick="simbriefsubmit('https://www.simbrief.com/api/demo_output.php?test=1');" style="font-size:30px" value="Generate">



</form>

<br><br><br>











	<?php include "footer.php" ?>

</body>
</html>