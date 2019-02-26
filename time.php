<?php
if (isset($_POST['convertir']) && isset($_POST['valeur'])) {
	//case2==>Octes
	
	if (isset($_POST['case13']) && isset($_POST['case2'])) {
		$n1="milliseconde";$n2="année";
		$valeur=$_POST['valeur'];
		$res=$valeur*3.1709791983765e-11;
	}
	if (isset($_POST['case11']) && isset($_POST['case2'])) {
		$n1="seconde";$n2="année ";
		$valeur=$_POST['valeur'];
		$res=$valeur*3.1709791983765e-8;
	}
	if (isset($_POST['case9']) && isset($_POST['case2'])) {
		$n1="minute";$n2="année";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.9025875190259e-6;
	}
	if (isset($_POST['case7']) && isset($_POST['case2'])) {
		$n1="heure";$n2="année";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.00011415525114155;
	}
	if (isset($_POST['case5']) && isset($_POST['case2'])) {
		$n1="jour";$n2="année ";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.0027397260273973;
	}
	if (isset($_POST['case3']) && isset($_POST['case2'])) {
		$n1="semaine";$n2="année ";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.019178082191781;
	}
	//case4==>kilooctets
	if (isset($_POST['case13']) && isset($_POST['case4'])) {
		$n1="milliseconde";$n2="semaine";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.6534391534392e-9;
	}
	if (isset($_POST['case11']) && isset($_POST['case4'])) {
		$n1="seconde";$n2="semaine ";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.6534391534392e-6;
	}
	if (isset($_POST['case9']) && isset($_POST['case4'])) {
		$n1="minute";$n2="semaine ";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.9206349206349e-5;
	}
	if (isset($_POST['case7']) && isset($_POST['case4'])) {
		$n1="heure";$n2="semaine";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.005952380952381;
	}
	if (isset($_POST['case5']) && isset($_POST['case4'])) {
		$n1="jour";$n2="semaine ";
		$valeur=$_POST['valeur'];
		$res=$valeur* 0.14285714285714;
	}
	if (isset($_POST['case1']) && isset($_POST['case4'])) {
		$n1="année";$n2="semaine ";
		$valeur=$_POST['valeur'];
		$res=$valeur*52.142857142857;
	}

	//case6=>Mo octets
	if (isset($_POST['case13']) && isset($_POST['case6'])) {
		$n1="milliseconde";$n2="jour";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.1574074074074e-8;
	}
	if (isset($_POST['case11']) && isset($_POST['case6'])) {
		$n1="seconde";$n2="jour ";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.1574074074074e-5;
	}
	if (isset($_POST['case9']) && isset($_POST['case6'])) {
		$n1="minute";$n2="jour ";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.00069444444444444;
	}
	if (isset($_POST['case7']) && isset($_POST['case6'])) {
		$n1="heure";$n2="jour";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.041666666666667;
	}
	if (isset($_POST['case3']) && isset($_POST['case6'])) {
		$n1="semaine";$n2="jour ";
		$valeur=$_POST['valeur'];
		$res=$valeur*7;
	}
	if (isset($_POST['case1']) && isset($_POST['case6'])) {
		$n1="année";$n2="jour ";
		$valeur=$_POST['valeur'];
		$res=$valeur*365;
	}

	
	//case8=>Go octets
	
	if (isset($_POST['case13']) && isset($_POST['case8'])) {
		$n1="milliseconde";$n2="heure";
		$valeur=$_POST['valeur'];
		$res=$valeur* 2.7777777777778e-7;
	}
	if (isset($_POST['case11']) && isset($_POST['case8'])) {
		$n1="seconde";$n2="heure ";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.00027777777777778;
	}
	if (isset($_POST['case9']) && isset($_POST['case8'])) {
		$n1="minute";$n2="heure";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.016666666666667;
	}
	if (isset($_POST['case5']) && isset($_POST['case8'])) {
		$n1="jour";$n2="heure";
		$valeur=$_POST['valeur'];
		$res=$valeur*24;
	}
	if (isset($_POST['case3']) && isset($_POST['case8'])) {
		$n1="semaine";$n2="heure ";
		$valeur=$_POST['valeur'];
		$res=$valeur*168;
	}
	if (isset($_POST['case1']) && isset($_POST['case8'])) {
		$n1="année";$n2="heure";
		$valeur=$_POST['valeur'];
		$res=$valeur*8760;
	}
	

	//
	if (isset($_POST['case13']) && isset($_POST['case10'])) {
		$n1="milliseconde";$n2="minute";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.6666666666667e-5;
	}
	if (isset($_POST['case11']) && isset($_POST['case10'])) {
		$n1="seconde";$n2="minute ";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.016666666666667;
	}
	if (isset($_POST['case7']) && isset($_POST['case10'])) {
		$n1="heure";$n2="minute";
		$valeur=$_POST['valeur'];
		$res=$valeur*60;
	}
	if (isset($_POST['case5']) && isset($_POST['case10'])) {
		$n1="jour";$n2="minute";
		$valeur=$_POST['valeur'];
		$res=$valeur*1440;
	}
	if (isset($_POST['case3']) && isset($_POST['case10'])) {
		$n1="semaine";$n2="minute ";
		$valeur=$_POST['valeur'];
		$res=$valeur*10080;
	}
	if (isset($_POST['case1']) && isset($_POST['case10'])) {
		$n1="année";$n2="minute";
		$valeur=$_POST['valeur'];
		$res=$valeur*525600;
	}

	//
	if (isset($_POST['case13']) && isset($_POST['case12'])) {
		$n1="milliseconde";$n2="seconde";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.001;
	}
	if (isset($_POST['case9']) && isset($_POST['case12'])) {
		$n1="minute";$n2="seconde ";
		$valeur=$_POST['valeur'];
		$res=$valeur*60;
	}
	if (isset($_POST['case7']) && isset($_POST['case12'])) {
		$n1="heure";$n2="seconde";
		$valeur=$_POST['valeur'];
		$res=$valeur*3600;
	}
	if (isset($_POST['case5']) && isset($_POST['case12'])) {
		$n1="jour";$n2="seconde";
		$valeur=$_POST['valeur'];
		$res=$valeur*86400 ;
	}
	if (isset($_POST['case3']) && isset($_POST['case12'])) {
		$n1="semaine";$n2="seconde";
		$valeur=$_POST['valeur'];
		$res=$valeur*604800;
	}
	if (isset($_POST['case1']) && isset($_POST['case12'])) {
		$n1="année";$n2="seconde";
		$valeur=$_POST['valeur'];
		$res=$valeur*31536000;
	}
	//

	if (isset($_POST['case11']) && isset($_POST['case14'])) {
		$n1="seconde";$n2="milliseconde";
		$valeur=$_POST['valeur'];
		$res=$valeur*1000;
	}
	if (isset($_POST['case9']) && isset($_POST['case14'])) {
		$n1="minute";$n2="milliseconde";
		$valeur=$_POST['valeur'];
		$res=$valeur*60000;
	}
	if (isset($_POST['case7']) && isset($_POST['case14'])) {
		$n1="heure";$n2="milliseconde";
		$valeur=$_POST['valeur'];
		$res=$valeur*3600000;
	}
	if (isset($_POST['case5']) && isset($_POST['case14'])) {
		$n1="jour";$n2="milliseconde";
		$valeur=$_POST['valeur'];
		$res=$valeur*86400000;
	}
	if (isset($_POST['case3']) && isset($_POST['case14'])) {
		$n1="semaine";$n2="milliseconde ";
		$valeur=$_POST['valeur'];
		$res=$valeur*604800000;
	}
	if (isset($_POST['case1']) && isset($_POST['case14'])) {
		$n1="année";$n2="milliseconde";
		$valeur=$_POST['valeur'];
		$res=$valeur*31536000000;
	}

	
	

	

}

?>


<!DOCTYPE html>
<html>
<link href='css/style.css' rel='stylesheet'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
	<title>Convertisseur de Temps</title>
</head>
<body>
<h1>Convertisseur</h1>
<div class="cadre">
	<form method="POST" action="#">
	<p><strong>Comment convertir <span style="color: #5f9ea0">un temps</span> ?</strong></p>
	<p>Insérez une valeur et sélectionnez <span style="color: #87cefa">l'unité de volume</span> (de départ puis d'arrivée) <span style="color: #87cefa">( Exemple :  semaine en minute )</span><br>
Vous pouvez choisir le nombre de chiffres significatifs.</p><br>
	<a href="temperature.php"><img src="images/temperature.png""></a><span style="padding-left:6%">
	<a href="volume.php"><img src="images/volume.png""></a><span style="padding-left:6%">
	<a href="distance.php"><img src="images/distance.png""></a><span style="padding-left:6%">
	<a href="byte.php"><img src="images/byte.png""></a><br>
	<a href="temperature.php">Temperature</a><span style="padding-left:18%">
	<a href="volume.php">Volume</a><span style="padding-left:16%">
	<a href="distance.php">Distance</a><span style="padding-left:16%">
	<a href="byte.php">Data Byte</a><span style="padding-left:16%"><br></br>
		<div>
			<span style="padding-left:35%">Enterez une valeur<br>
			<span style="padding-left:35%"><input type="text" name="valeur"><br>
			<span style="padding-left:20%"><input class="inp" type="text" name="res" value="<?php if (isset($res) && (isset($n1)) && (isset($n2))) {
				echo "$valeur $n1 = $res $n2";
			} ?>"><br>

			<span style="padding-left:19%">année<input type="checkbox" name="case1" value="1"><span style="padding-left:27%"><input type="checkbox" name="case2" value="2">année</span><br>

			<span style="padding-left:17.5%">semaine<input type="checkbox" name="case3" value="3"><span style="padding-left:27%"><input type="checkbox" name="case4" value="4"> samaine</span><br>

			<span style="padding-left:21%">jour<input type="checkbox" name="case5" value="5"><span style="padding-left:27%"><input type="checkbox" name="case6" value="6"> jour</span><br>

			<span style="padding-left:19.5%">heure<input type="checkbox" name="case7" value="7"><span style="padding-left:27%"><input type="checkbox" name="case8" value="8">heure</span><br>

			<span style="padding-left:18%">minute<input type="checkbox" name="case9" value="9"><span style="padding-left:3%"><input class="convert" type="submit" name="convertir" value="Convertir"><span style="padding-left:4%"><input type="checkbox" name="case10" value="10">minute</span><br>

			<span style="padding-left:17.5%">seconde<input type="checkbox" name="case11" value="11"><span style="padding-left:27%"><input type="checkbox" name="case12" value="12">seconde</span><br>

			<span style="padding-left:14%">milliseconde<input type="checkbox" name="case13" value="13"><span style="padding-left:27%"><input type="checkbox" name="case14" value="14">milliseconde </span><br></br>


	<a href="#"><img src="images/weight.png""></a><span style="padding-left:6%">
	<a href="#"><img src="images/area.png""></a><span style="padding-left:6%">
	<a href="#"><img src="images/speed.png""></a><span style="padding-left:6%">
	<a href="#"><img src="images/time-select.png""></a><br>
	<span style="padding-left:7%"><a href="#">Poids</a><span style="padding-left:18%">
	<a href="#">Superficie</a><span style="padding-left:16%">
	<a href="#">Vitesse</a><span style="padding-left:16%">
	<a href="#">Temps</a><span style="padding-left:16%">
		</div>
</body>
</html>