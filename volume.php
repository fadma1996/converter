<?php
if (isset($_POST['convertir']) && isset($_POST['valeur'])) {
	//case2==>Octes
	
	if (isset($_POST['case13']) && isset($_POST['case2'])) {
		$n1="ml";$n2="m³";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.0e-6;
	}
	if (isset($_POST['case11']) && isset($_POST['case2'])) {
		$n1="cl";$n2="m³ ";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.0e-5;
	}
	if (isset($_POST['case9']) && isset($_POST['case2'])) {
		$n1="dl";$n2="m³ ";
		$valeur=$_POST['valeur'];
		$res=$valeur* 0.0001;
	}
	if (isset($_POST['case7']) && isset($_POST['case2'])) {
		$n1="l";$n2="m³";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.001;
	}
	if (isset($_POST['case5']) && isset($_POST['case2'])) {
		$n1="cm³";$n2="m³ ";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.0e-6;
	}
	if (isset($_POST['case3']) && isset($_POST['case2'])) {
		$n1="dm³";$n2="m³ ";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.001;
	}
	//case4==>kilooctets
	if (isset($_POST['case13']) && isset($_POST['case4'])) {
		$n1="ml";$n2="dm³";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.001;
	}
	if (isset($_POST['case11']) && isset($_POST['case4'])) {
		$n1="cl";$n2="dm³ ";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.01;
	}
	if (isset($_POST['case9']) && isset($_POST['case4'])) {
		$n1="dl";$n2="dm³ ";
		$valeur=$_POST['valeur'];
		$res=$valeur* 0.1;
	}
	if (isset($_POST['case7']) && isset($_POST['case4'])) {
		$n1="l";$n2="dm³";
		$valeur=$_POST['valeur'];
		$res=$valeur*1;
	}
	if (isset($_POST['case5']) && isset($_POST['case4'])) {
		$n1="cm³";$n2="dm³ ";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.001;
	}
	if (isset($_POST['case1']) && isset($_POST['case4'])) {
		$n1="m³";$n2="dm³ ";
		$valeur=$_POST['valeur'];
		$res=$valeur*1000;
	}

	//case6=>Mo octets
	if (isset($_POST['case13']) && isset($_POST['case6'])) {
		$n1="ml";$n2="cm³";
		$valeur=$_POST['valeur'];
		$res=$valeur*1;
	}
	if (isset($_POST['case11']) && isset($_POST['case6'])) {
		$n1="cl";$n2="cm³ ";
		$valeur=$_POST['valeur'];
		$res=$valeur*10;
	}
	if (isset($_POST['case9']) && isset($_POST['case6'])) {
		$n1="dl";$n2="cm³ ";
		$valeur=$_POST['valeur'];
		$res=$valeur*100;
	}
	if (isset($_POST['case7']) && isset($_POST['case6'])) {
		$n1="l";$n2="cm³";
		$valeur=$_POST['valeur'];
		$res=$valeur*1000;
	}
	if (isset($_POST['case3']) && isset($_POST['case6'])) {
		$n1="dm³";$n2="cm³ ";
		$valeur=$_POST['valeur'];
		$res=$valeur*1000;
	}
	if (isset($_POST['case1']) && isset($_POST['case6'])) {
		$n1="m³";$n2="cm³ ";
		$valeur=$_POST['valeur'];
		$res=$valeur*1000000;
	}

	
	//case8=>Go octets
	
	if (isset($_POST['case13']) && isset($_POST['case8'])) {
		$n1="ml";$n2="l";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.001;
	}
	if (isset($_POST['case11']) && isset($_POST['case8'])) {
		$n1="cl";$n2="l ";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.01;
	}
	if (isset($_POST['case9']) && isset($_POST['case8'])) {
		$n1="dl";$n2="l";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.1;
	}
	if (isset($_POST['case5']) && isset($_POST['case8'])) {
		$n1="cm³";$n2="l";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.001;
	}
	if (isset($_POST['case3']) && isset($_POST['case8'])) {
		$n1="dm³";$n2="l ";
		$valeur=$_POST['valeur'];
		$res=$valeur*1;
	}
	if (isset($_POST['case1']) && isset($_POST['case8'])) {
		$n1="m³";$n2="l";
		$valeur=$_POST['valeur'];
		$res=$valeur*1000;
	}
	

	//
	if (isset($_POST['case13']) && isset($_POST['case10'])) {
		$n1="ml";$n2="dl";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.01;
	}
	if (isset($_POST['case11']) && isset($_POST['case10'])) {
		$n1="cl";$n2="dl ";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.1;
	}
	if (isset($_POST['case7']) && isset($_POST['case10'])) {
		$n1="l";$n2="dl";
		$valeur=$_POST['valeur'];
		$res=$valeur*10;
	}
	if (isset($_POST['case5']) && isset($_POST['case10'])) {
		$n1="cm³";$n2="dl";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.01;
	}
	if (isset($_POST['case3']) && isset($_POST['case10'])) {
		$n1="dm³";$n2="dl ";
		$valeur=$_POST['valeur'];
		$res=$valeur*10;
	}
	if (isset($_POST['case1']) && isset($_POST['case10'])) {
		$n1="m³";$n2="dl";
		$valeur=$_POST['valeur'];
		$res=$valeur*10000;
	}

	//
	if (isset($_POST['case13']) && isset($_POST['case12'])) {
		$n1="ml";$n2="cl";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.1;
	}
	if (isset($_POST['case9']) && isset($_POST['case12'])) {
		$n1="dl";$n2="cl ";
		$valeur=$_POST['valeur'];
		$res=$valeur*10;
	}
	if (isset($_POST['case7']) && isset($_POST['case12'])) {
		$n1="l";$n2="cl";
		$valeur=$_POST['valeur'];
		$res=$valeur*100;
	}
	if (isset($_POST['case5']) && isset($_POST['case12'])) {
		$n1="cm³";$n2="cl";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.1;
	}
	if (isset($_POST['case3']) && isset($_POST['case12'])) {
		$n1="dm³";$n2="cl ";
		$valeur=$_POST['valeur'];
		$res=$valeur*100;
	}
	if (isset($_POST['case1']) && isset($_POST['case12'])) {
		$n1="m³";$n2="cl";
		$valeur=$_POST['valeur'];
		$res=$valeur*100000;
	}
	//

	if (isset($_POST['case11']) && isset($_POST['case14'])) {
		$n1="cl";$n2="ml";
		$valeur=$_POST['valeur'];
		$res=$valeur*10;
	}
	if (isset($_POST['case9']) && isset($_POST['case14'])) {
		$n1="dl";$n2="ml ";
		$valeur=$_POST['valeur'];
		$res=$valeur*100;
	}
	if (isset($_POST['case7']) && isset($_POST['case14'])) {
		$n1="l";$n2="ml";
		$valeur=$_POST['valeur'];
		$res=$valeur*1000;
	}
	if (isset($_POST['case5']) && isset($_POST['case14'])) {
		$n1="cm³";$n2="ml";
		$valeur=$_POST['valeur'];
		$res=$valeur*1;
	}
	if (isset($_POST['case3']) && isset($_POST['case14'])) {
		$n1="dm³";$n2="ml ";
		$valeur=$_POST['valeur'];
		$res=$valeur*1000;
	}
	if (isset($_POST['case1']) && isset($_POST['case14'])) {
		$n1="m³";$n2="ml";
		$valeur=$_POST['valeur'];
		$res=$valeur*1000000;
	}

	
	

	

}

?>


<!DOCTYPE html>
<html>
<link href='css/style.css' rel='stylesheet'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
	<title>Convertisseur de Temperature</title>
</head>
<body>
<h1>Convertisseur</h1>
<div class="cadre">
	<form method="POST" action="#">
	<p><strong>Comment convertir <span style="color: #5f9ea0">un volume</span> ?</strong></p>
	<p>Insérez une valeur et sélectionnez <span style="color: #87cefa">l'unité de volume</span> (de départ puis d'arrivée) <span style="color: #87cefa">( Exemple :  m³ en l )</span><br>
Vous pouvez choisir le nombre de chiffres significatifs.</p><br>
	<a href="temperature.php"><img src="images/temperature.png""></a><span style="padding-left:6%">
	<a href="#"><img src="images/volume-select.png""></a><span style="padding-left:6%">
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

			<span style="padding-left:15%"><span style="color: blue">mètre cube</span><big><strong>  m³</strong></big><input type="checkbox" name="case1" value="1"><span style="padding-left:27%"><input type="checkbox" name="case2" value="2"><big><strong>m³</strong></big><span style="color: blue"> mètre cube</span><br>

			<span style="padding-left:10%"><span style="color: blue">décimètre cube</span><big><strong> dm³</strong></big><input type="checkbox" name="case3" value="3"><span style="padding-left:27%"><input type="checkbox" name="case4" value="4"><big><strong>dm³</strong></big><span style="color: blue"> décimètre cube</span><br>

			<span style="padding-left:9.5%"><span style="color: blue">centimètre cube</span><big><strong> cm³</strong></big><input type="checkbox" name="case5" value="5"><span style="padding-left:27%"><input type="checkbox" name="case6" value="6"><big><strong>cm³</strong></big><span style="color: blue"> centimètre cube</span><br>

			<span style="padding-left:23%"><span style="color: blue">litre</span><big><strong> l</strong></big><input type="checkbox" name="case7" value="7"><span style="padding-left:27%"><input type="checkbox" name="case8" value="8"><big><strong>l</strong></big><span style="color: blue"> litre</span><br>

			<span style="padding-left:18%"><span style="color: blue">décilitre</span><big><strong> dl</strong></big><input type="checkbox" name="case9" value="9"><span style="padding-left:3%"><input class="convert" type="submit" name="convertir" value="Convertir"><span style="padding-left:4%"><input type="checkbox" name="case10" value="10"><big><strong>dl</strong></big><span style="color: blue">décilitre</span><br>

			<span style="padding-left:17.5%"><span style="color: blue">centilitre</span><big><strong> cl</strong></big><input type="checkbox" name="case11" value="11"><span style="padding-left:27%"><input type="checkbox" name="case12" value="12"><big><strong>cl</strong></big><span style="color: blue">centilitre</span><br>

			<span style="padding-left:17%"><span style="color: blue">millilitre</span><big><strong> ml</strong></big><input type="checkbox" name="case13" value="13"><span style="padding-left:27%"><input type="checkbox" name="case14" value="14"><big><strong>ml</strong></big><span style="color: blue">millilitre </span><br></br>


	<a href="#"><img src="images/weight.png""></a><span style="padding-left:6%">
	<a href="#"><img src="images/area.png""></a><span style="padding-left:6%">
	<a href="#"><img src="images/speed.png""></a><span style="padding-left:6%">
	<a href="time.php"><img src="images/time.png""></a><br>
	<span style="padding-left:7%"><a href="#">Poids</a><span style="padding-left:18%">
	<a href="#">Superficie</a><span style="padding-left:16%">
	<a href="#">Vitesse</a><span style="padding-left:16%">
	<a href="time.php">Temps</a><span style="padding-left:16%">
		</div>
</body>
</html>