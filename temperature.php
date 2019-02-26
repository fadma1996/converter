<?php
if (isset($_POST['convertir']) && isset($_POST['valeur'])) {
	//case2==>Octes
	
	if (isset($_POST['case11']) && isset($_POST['case2'])) {
		$n1="°Ra";$n2="°C ";
		$valeur=$_POST['valeur'];
		$res=$valeur*(-272.59444444444);
	}
	if (isset($_POST['case9']) && isset($_POST['case2'])) {
		$n1="°N";$n2="°C ";
		$valeur=$_POST['valeur'];
		$res=$valeur*3.030303030303;
	}
	if (isset($_POST['case7']) && isset($_POST['case2'])) {
		$n1="°Ré";$n2="°C ";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.25;
	}
	if (isset($_POST['case5']) && isset($_POST['case2'])) {
		$n1="K";$n2="°C ";
		$valeur=$_POST['valeur'];
		$res=$valeur*(-272.15);
	}
	if (isset($_POST['case3']) && isset($_POST['case2'])) {
		$n1="°F";$n2="°C ";
		$valeur=$_POST['valeur'];
		$res=$valeur*(-17.222222222222);
	}
	//case4==>kilooctets
	if (isset($_POST['case11']) && isset($_POST['case4'])) {
		$n1="°Ra";$n2="°F ";
		$valeur=$_POST['valeur'];
		$res=$valeur*(-433.07);
	}
	if (isset($_POST['case9']) && isset($_POST['case4'])) {
		$n1="°N";$n2="°F ";
		$valeur=$_POST['valeur'];
		$res=$valeur*63.054545454545;
	}
	if (isset($_POST['case7']) && isset($_POST['case4'])) {
		$n1="°Ré";$n2="°F ";
		$valeur=$_POST['valeur'];
		$res=$valeur*59.85;
	}
	if (isset($_POST['case5']) && isset($_POST['case4'])) {
		$n1="K";$n2="°F ";
		$valeur=$_POST['valeur'];
		$res=$valeur*(-432.27);
	}
	if (isset($_POST['case1']) && isset($_POST['case4'])) {
		$n1="°C";$n2="°F ";
		$valeur=$_POST['valeur'];
		$res=$valeur*(33.8);
	}

	//case6=>Mo octets
	if (isset($_POST['case11']) && isset($_POST['case6'])) {
		$n1="°Ra";$n2="K ";
		$valeur=$_POST['valeur'];
		$res=$valeur*(0.55555555555554 );
	}
	if (isset($_POST['case9']) && isset($_POST['case6'])) {
		$n1="°N";$n2="K ";
		$valeur=$_POST['valeur'];
		$res=$valeur*276.1803030303;
	}
	if (isset($_POST['case7']) && isset($_POST['case6'])) {
		$n1="°Ré";$n2="K ";
		$valeur=$_POST['valeur'];
		$res=$valeur*274.4;
	}
	if (isset($_POST['case3']) && isset($_POST['case6'])) {
		$n1="°F";$n2="K ";
		$valeur=$_POST['valeur'];
		$res=$valeur*(255.92777777778);
	}
	if (isset($_POST['case1']) && isset($_POST['case6'])) {
		$n1="°C";$n2="K ";
		$valeur=$_POST['valeur'];
		$res=$valeur*(274.15);
	}
	//case8=>Go octets
	
	if (isset($_POST['case11']) && isset($_POST['case8'])) {
		$n1="°Ra";$n2="°Ré";
		$valeur=$_POST['valeur'];
		$res=$valeur*(-218.07555555556);
	}
	if (isset($_POST['case9']) && isset($_POST['case8'])) {
		$n1="°N";$n2="°Ré";
		$valeur=$_POST['valeur'];
		$res=$valeur*2.4242424242424 ;
	}
	if (isset($_POST['case5']) && isset($_POST['case8'])) {
		$n1="K";$n2="°Ré";
		$valeur=$_POST['valeur'];
		$res=$valeur*(-217.72);
	}
	if (isset($_POST['case3']) && isset($_POST['case8'])) {
		$n1="°F";$n2="°Ré";
		$valeur=$_POST['valeur'];
		$res=$valeur*(-13.777777777778);
	}
	if (isset($_POST['case1']) && isset($_POST['case8'])) {
		$n1="°C";$n2="°Ré";
		$valeur=$_POST['valeur'];
		$res=$valeur*(0.8);
	}
	

	//
	if (isset($_POST['case11']) && isset($_POST['case10'])) {
		$n1="°Ra";$n2="°N";
		$valeur=$_POST['valeur'];
		$res=$valeur*(-218.07555555556);
	}
	if (isset($_POST['case9']) && isset($_POST['case10'])) {
		$n1="°N";$n2="°N";
		$valeur=$_POST['valeur'];
		$res=$valeur*2.4242424242424 ;
	}
	if (isset($_POST['case5']) && isset($_POST['case10'])) {
		$n1="K";$n2="°N";
		$valeur=$_POST['valeur'];
		$res=$valeur*(-217.72);
	}
	if (isset($_POST['case3']) && isset($_POST['case10'])) {
		$n1="°F";$n2="°N";
		$valeur=$_POST['valeur'];
		$res=$valeur*(-13.777777777778);
	}
	if (isset($_POST['case1']) && isset($_POST['case10'])) {
		$n1="°C";$n2="°N";
		$valeur=$_POST['valeur'];
		$res=$valeur*(0.8);
	}

	//

	if (isset($_POST['case1']) && isset($_POST['case12'])) {
		$n1="°C";$n2="°Ra";
		$valeur=$_POST['valeur'];
		$res=$valeur*493.47;
	}
	if (isset($_POST['case3']) && isset($_POST['case12'])) {
		$n1="°F";$n2="°Ra";
		$valeur=$_POST['valeur'];
		$res=$valeur*460.67;
	}
	if (isset($_POST['case5']) && isset($_POST['case12'])) {
		$n1="K";$n2="°Ra";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.8000000000001;
	}
	if (isset($_POST['case7']) && isset($_POST['case12'])) {
		$n1="°Ré";$n2="°Ra";
		$valeur=$_POST['valeur'];
		$res=$valeur*493.92;
	}
	if (isset($_POST['case9']) && isset($_POST['case12'])) {
		$n1="°N";$n2="°Ra";
		$valeur=$_POST['valeur'];
		$res=$valeur*497.12454545455;
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
	<p><strong>Comment convertir <span style="color: #5f9ea0">une temperature</span> ?</strong></p>
	<p>Insérez une valeur et sélectionnez <span style="color: #87cefa">l'unité de temperature</span> (de départ puis d'arrivée) <span style="color: #87cefa">( Exemple : Fahrenheit en Celcius )</span><br>
Vous pouvez choisir le nombre de chiffres significatifs.</p><br>
	<a href="#"><img src="images/temperature-select.png""></a><span style="padding-left:6%">
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

			<span style="padding-left:15%"><span style="color: blue">Celsius</span><big><strong> °C</strong></big><input type="checkbox" name="case1" value="1"><span style="padding-left:27%"><input type="checkbox" name="case2" value="2"><big><strong>°C</strong></big><span style="color: blue"> Celsius</span><br>

			<span style="padding-left:12%"><span style="color: blue">Fahrenheit</span><big><strong> °F</strong></big><input type="checkbox" name="case3" value="3"><span style="padding-left:27%"><input type="checkbox" name="case4" value="4"><big><strong>°F</strong></big><span style="color: blue"> Fahrenheit</span><br>

			<span style="padding-left:16.5%"><span style="color: blue">Kelvin</span><big><strong> K</strong></big><input type="checkbox" name="case5" value="5"><span style="padding-left:27%"><input type="checkbox" name="case6" value="6"><big><strong>K</strong></big><span style="color: blue"> Kelvin</span><br>

			<span style="padding-left:12%"><span style="color: blue">Reaumur</span><big><strong> °Ré</strong></big><input type="checkbox" name="case7" value="7"><span style="padding-left:27%"><input type="checkbox" name="case8" value="8"><big><strong>°Ré</strong></big><span style="color: blue"> Reaumur</span><br>

			<span style="padding-left:14.5%"><span style="color: blue">Newton</span><big><strong> °N</strong></big><input type="checkbox" name="case9" value="9"><span style="padding-left:3%"><input class="convert" type="submit" name="convertir" value="Convertir"><span style="padding-left:4%"><input type="checkbox" name="case10" value="10"><big><strong>°N</strong></big><span style="color: blue">Newton</span><br>

			<span style="padding-left:13%"><span style="color: blue">Rankine</span><big><strong> °Ra</strong></big><input type="checkbox" name="case11" value="11"><span style="padding-left:27%"><input type="checkbox" name="case12" value="12"><big><strong>°Ra</strong></big><span style="color: blue">Rankine</span><br></br>


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