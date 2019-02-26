<?php
if (isset($_POST['convertir']) && isset($_POST['valeur'])) {
	//case2==>Octes
	if (isset($_POST['case17']) && isset($_POST['case2'])) {
		$n1="Yo";$n2="Octets";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.00000000e+24;
	}
	if (isset($_POST['case15']) && isset($_POST['case2'])) {
		$n1="Zo";$n2="Octets";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.00000000e+21;
	}
	if (isset($_POST['case13']) && isset($_POST['case2'])) {
		$n1="Eo";$n2="Octets";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.00000000e+18;
	}
	if (isset($_POST['case11']) && isset($_POST['case2'])) {
		$n1="Po";$n2="Octets";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.00000000e+15;
	}
	if (isset($_POST['case9']) && isset($_POST['case2'])) {
		$n1="To";$n2="Octets";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.00000000e+12;
	}
	if (isset($_POST['case7']) && isset($_POST['case2'])) {
		$n1="Go";$n2="Octets";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.00000000e+9;
	}
	if (isset($_POST['case5']) && isset($_POST['case2'])) {
		$n1="Mo";$n2="Octets";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.00000000e+6;
	}
	if (isset($_POST['case3']) && isset($_POST['case2'])) {
		$n1="Ko";$n2="Octets";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.00000000e+3;
	}
	//case4==>kilooctets
	if (isset($_POST['case1']) && isset($_POST['case4'])) {
		$n1="Octets";$n2="Ko";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.0009765625;
	}
	if (isset($_POST['case5']) && isset($_POST['case4'])) {
		$n1="Mo";$n2="Ko";
		$valeur=$_POST['valeur'];
		$res=$valeur*1024;
	}
	if (isset($_POST['case7']) && isset($_POST['case4'])) {
		$n1="Go";$n2="Ko";
		$valeur=$_POST['valeur'];
		$res=$valeur*1048576;
	}
	if (isset($_POST['case9']) && isset($_POST['case4'])) {
		$n1="To";$n2="Ko";
		$valeur=$_POST['valeur'];
		$res=$valeur*1073741824;
	}
	if (isset($_POST['case11']) && isset($_POST['case4'])) {
		$n1="Po";$n2="Ko";
		$valeur=$_POST['valeur'];
		$res=$valeur*1099511627776;
	}
	if (isset($_POST['case13']) && isset($_POST['case4'])) {
		$n1="Eo";$n2="Ko";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.1258999068426e15;

	}
	if (isset($_POST['case15']) && isset($_POST['case4'])) {
		$n1="Zo";$n2="Ko";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.1529215046068e18;

	}
	if (isset($_POST['case17']) && isset($_POST['case4'])) {
		$n1="Yo";$n2="Ko";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.1805916207174e21;

	}
	//case6=>Mo octets
	if (isset($_POST['case1']) && isset($_POST['case6'])) {
		$n1="Octets";$n2="Mo";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.5367431640625e-7;
	}
	if (isset($_POST['case3']) && isset($_POST['case6'])) {
		$n1="Ko";$n2="Mo";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.0009765625;
	}
	if (isset($_POST['case7']) && isset($_POST['case6'])) {
		$n1="Go";$n2="Mo";
		$valeur=$_POST['valeur'];
		$res=$valeur*1024;
	}
	if (isset($_POST['case9']) && isset($_POST['case6'])) {
		$n1="To";$n2="Mo";
		$valeur=$_POST['valeur'];
		$res=$valeur*1048576;
	}
	if (isset($_POST['case11']) && isset($_POST['case6'])) {
		$n1="Po";$n2="Mo";
		$valeur=$_POST['valeur'];
		$res=$valeur*1073741824;
	}
	if (isset($_POST['case13']) && isset($_POST['case6'])) {
		$n1="Eo";$n2="Mo";
		$valeur=$_POST['valeur'];
		$res=$valeur*1099511627776;

	}
	if (isset($_POST['case15']) && isset($_POST['case6'])) {
		$n1="Zo";$n2="Mo";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.1258999068426e15;

	}
	if (isset($_POST['case17']) && isset($_POST['case6'])) {
		$n1="Yo";$n2="Mo";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.1529215046068e18;

	}
	//case8=>Go octets
	if (isset($_POST['case1']) && isset($_POST['case8'])) {
		$n1="Octets";$n2="Go";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.3132257461548e-10;
	}
	if (isset($_POST['case3']) && isset($_POST['case8'])) {
		$n1="Ko";$n2="Go";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.5367431640625e-7;
	}
	if (isset($_POST['case5']) && isset($_POST['case8'])) {
		$n1="Mo";$n2="Go";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.0009765625;
	}
	if (isset($_POST['case9']) && isset($_POST['case8'])) {
		$n1="To";$n2="Go";
		$valeur=$_POST['valeur'];
		$res=$valeur*1024;
	}
	if (isset($_POST['case11']) && isset($_POST['case8'])) {
		$n1="Po";$n2="Go";
		$valeur=$_POST['valeur'];
		$res=$valeur*1048576;
	}
	if (isset($_POST['case13']) && isset($_POST['case8'])) {
		$n1="Eo";$n2="Go";
		$valeur=$_POST['valeur'];
		$res=$valeur*1073741824;

	}
	if (isset($_POST['case15']) && isset($_POST['case8'])) {
		$n1="Zo";$n2="Go";
		$valeur=$_POST['valeur'];
		$res=$valeur*1099511627776;

	}
	if (isset($_POST['case17']) && isset($_POST['case8'])) {
		$n1="Yo";$n2="Go";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.1258999068426e15;

	}

	//
	if (isset($_POST['case1']) && isset($_POST['case10'])) {
		$n1="Octets";$n2="To";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.0949470177293e-13;
	}
	if (isset($_POST['case3']) && isset($_POST['case10'])) {
		$n1="Ko";$n2="To";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.3132257461548e-10;
	}
	if (isset($_POST['case5']) && isset($_POST['case10'])) {
		$n1="Mo";$n2="To";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.5367431640625e-7;
	}
	if (isset($_POST['case7']) && isset($_POST['case10'])) {
		$n1="Go";$n2="To";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.0009765625;
	}
	if (isset($_POST['case11']) && isset($_POST['case10'])) {
		$n1="Po";$n2="To";
		$valeur=$_POST['valeur'];
		$res=$valeur*1024;
	}
	if (isset($_POST['case13']) && isset($_POST['case10'])) {
		$n1="Eo";$n2="To";
		$valeur=$_POST['valeur'];
		$res=$valeur*1048576;

	}
	if (isset($_POST['case15']) && isset($_POST['case10'])) {
		$n1="Zo";$n2="To";
		$valeur=$_POST['valeur'];
		$res=$valeur*1073741824;

	}
	if (isset($_POST['case17']) && isset($_POST['case10'])) {
		$n1="Yo";$n2="To";
		$valeur=$_POST['valeur'];
		$res=$valeur*1099511627776;

	}

	//

	if (isset($_POST['case1']) && isset($_POST['case12'])) {
		$n1="Octets";$n2="Po";
		$valeur=$_POST['valeur'];
		$res=$valeur*8.8817841970013e-16;
	}
	if (isset($_POST['case3']) && isset($_POST['case12'])) {
		$n1="Ko";$n2="Po";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.0949470177293e-13;
	}
	if (isset($_POST['case5']) && isset($_POST['case12'])) {
		$n1="Mo";$n2="Po";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.3132257461548e-10;
	}
	if (isset($_POST['case7']) && isset($_POST['case12'])) {
		$n1="Go";$n2="Po";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.5367431640625e-7;
	}
	if (isset($_POST['case9']) && isset($_POST['case12'])) {
		$n1="To";$n2="Po";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.0009765625;
	}
	if (isset($_POST['case13']) && isset($_POST['case12'])) {
		$n1="Eo";$n2="Po";
		$valeur=$_POST['valeur'];
		$res=$valeur*1024;

	}
	if (isset($_POST['case15']) && isset($_POST['case12'])) {
		$n1="Zo";$n2="Po";
		$valeur=$_POST['valeur'];
		$res=$valeur*1048576;

	}
	if (isset($_POST['case17']) && isset($_POST['case12'])) {
		$n1="Yo";$n2="Po";
		$valeur=$_POST['valeur'];
		$res=$valeur*1073741824;

	}

	//

	if (isset($_POST['case1']) && isset($_POST['case14'])) {
		$n1="Octets";$n2="Eo";
		$valeur=$_POST['valeur'];
		$res=$valeur*8.673617379884e-19;
	}
	if (isset($_POST['case3']) && isset($_POST['case14'])) {
		$n1="Ko";$n2="Eo";
		$valeur=$_POST['valeur'];
		$res=$valeur*8.8817841970013e-16;
	}
	if (isset($_POST['case5']) && isset($_POST['case14'])) {
		$n1="Mo";$n2="Eo";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.0949470177293e-13;
	}
	if (isset($_POST['case7']) && isset($_POST['case14'])) {
		$n1="Go";$n2="Eo";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.3132257461548e-10;
	}
	if (isset($_POST['case9']) && isset($_POST['case14'])) {
		$n1="To";$n2="Eo";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.5367431640625e-7;
	}
	if (isset($_POST['case11']) && isset($_POST['case14'])) {
		$n1="Po";$n2="Eo";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.0009765625;

	}
	if (isset($_POST['case15']) && isset($_POST['case14'])) {
		$n1="Zo";$n2="Eo";
		$valeur=$_POST['valeur'];
		$res=$valeur*1024;

	}
	if (isset($_POST['case17']) && isset($_POST['case14'])) {
		$n1="Yo";$n2="Eo";
		$valeur=$_POST['valeur'];
		$res=$valeur*1048576;

	}

	//


	if (isset($_POST['case1']) && isset($_POST['case16'])) {
		$n1="Octets";$n2="Zo";
		$valeur=$_POST['valeur'];
		$res=$valeur*8.470329472543e-22;
	}
	if (isset($_POST['case3']) && isset($_POST['case16'])) {
		$n1="Ko";$n2="Zo";
		$valeur=$_POST['valeur'];
		$res=$valeur*8.673617379884e-19;
	}
	if (isset($_POST['case5']) && isset($_POST['case16'])) {
		$n1="Mo";$n2="Zo";
		$valeur=$_POST['valeur'];
		$res=$valeur*8.8817841970013e-16;
	}
	if (isset($_POST['case7']) && isset($_POST['case16'])) {
		$n1="Go";$n2="Zo";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.0949470177293e-13;
	}
	if (isset($_POST['case9']) && isset($_POST['case16'])) {
		$n1="To";$n2="Zo";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.3132257461548e-10;
	}
	if (isset($_POST['case11']) && isset($_POST['case16'])) {
		$n1="Po";$n2="Zo";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.5367431640625e-7;

	}
	if (isset($_POST['case13']) && isset($_POST['case16'])) {
		$n1="Eo";$n2="Zo";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.0009765625;

	}
	if (isset($_POST['case17']) && isset($_POST['case16'])) {
		$n1="Yo";$n2="Zo";
		$valeur=$_POST['valeur'];
		$res=$valeur*1024;

	}

	//


	if (isset($_POST['case1']) && isset($_POST['case18'])) {
		$n1="Octets";$n2="Yo";
		$valeur=$_POST['valeur'];
		$res=$valeur*8.2718061255303e-25;
	}
	if (isset($_POST['case3']) && isset($_POST['case18'])) {
		$n1="Ko";$n2="Yo";
		$valeur=$_POST['valeur'];
		$res=$valeur*8.470329472543e-22;
	}
	if (isset($_POST['case5']) && isset($_POST['case18'])) {
		$n1="Mo";$n2="Yo";
		$valeur=$_POST['valeur'];
		$res=$valeur*8.673617379884e-19;
	}
	if (isset($_POST['case7']) && isset($_POST['case18'])) {
		$n1="Go";$n2="Yo";
		$valeur=$_POST['valeur'];
		$res=$valeur*8.8817841970013e-16;
	}
	if (isset($_POST['case9']) && isset($_POST['case18'])) {
		$n1="To";$n2="Yo";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.0949470177293e-13;
	}
	if (isset($_POST['case11']) && isset($_POST['case18'])) {
		$n1="Po";$n2="Yo";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.3132257461548e-10;

	}
	if (isset($_POST['case13']) && isset($_POST['case18'])) {
		$n1="Eo";$n2="Yo";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.5367431640625e-7;

	}
	if (isset($_POST['case15']) && isset($_POST['case18'])) {
		$n1="Zo";$n2="Yo";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.0009765625 ;

	}



}

?>


<!DOCTYPE html>
<html>
<link href='css/style.css' rel='stylesheet'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
	<title>Convertisseur de Data Byte</title>
</head>
<body>
<h1>Convertisseur</h1>
<div class="cadre">
	<form method="POST" action="#">
	<p><strong>Comment convertir <span style="color: #5f9ea0">databyte</span> ?</strong></p>
	<p>Insérez une valeur et sélectionnez <span style="color: #87cefa">l'unité de databyte</span> (de départ puis d'arrivée) <span style="color: #87cefa">( Exemple : gigabyte en megabyte )</span><br>
Vous pouvez choisir le nombre de chiffres significatifs.</p><br>
	<a href="temperature.php"><img src="images/temperature.png""></a><span style="padding-left:6%">
	<a href="volume.php"><img src="images/volume.png""></a><span style="padding-left:6%">
	<a href="distance.php"><img src="images/distance.png""></a><span style="padding-left:6%">
	<a href="#"><img src="images/byte-select.png""></a><br>
	<a href="#">Temperature</a><span style="padding-left:18%">
	<a href="#">Volume</a><span style="padding-left:16%">
	<a href="#">Distance</a><span style="padding-left:16%">
	<a href="#">Data Byte</a><span style="padding-left:16%"><br></br>
		<div>
			<span style="padding-left:35%">Enterez une valeur<br>
			<span style="padding-left:35%"><input type="text" name="valeur"><br>
			<span style="padding-left:20%"><input class="inp" type="text" name="res" value="<?php if (isset($res) && (isset($n1)) && (isset($n2))) {
				echo "$valeur $n1 = $res $n2";
			} ?>"><br>

			<span style="padding-left:20%"><span style="color: blue">octer</span><big><strong>O</strong></big><input type="checkbox" name="case1" value="1"><span style="padding-left:27%"><input type="checkbox" name="case2" value="2"><big><strong>O</strong></big><span style="color: blue">octer</span><br>

			<span style="padding-left:15.5%"><span style="color: blue">kiloocter</span><big><strong>Ko</strong></big><input type="checkbox" name="case3" value="3"><span style="padding-left:27%"><input type="checkbox" name="case4" value="4"><big><strong>Ko</strong></big><span style="color: blue">kiloocter</span><br>

			<span style="padding-left:14%"><span style="color: blue">megaocter</span><big><strong>Mo</strong></big><input type="checkbox" name="case5" value="5"><span style="padding-left:27%"><input type="checkbox" name="case6" value="6"><big><strong>Mo</strong></big><span style="color: blue">megaocter</span><br>

			<span style="padding-left:15.5%"><span style="color: blue">gigaocter</span><big><strong>Go</strong></big><input type="checkbox" name="case7" value="7"><span style="padding-left:27%"><input type="checkbox" name="case8" value="8"><big><strong>Go</strong></big><span style="color: blue">gigaocter</span><br>

			<span style="padding-left:16%"><span style="color: blue">teraocter</span><big><strong>To</strong></big><input type="checkbox" name="case9" value="9"><span style="padding-left:3%"><input class="convert" type="submit" name="convertir" value="Convertir"><span style="padding-left:4%"><input type="checkbox" name="case10" value="10"><big><strong>To</strong></big><span style="color: blue">teraocter</span><br>

			<span style="padding-left:16%"><span style="color: blue">petaocter</span><big><strong>Po</strong></big><input type="checkbox" name="case11" value="11"><span style="padding-left:27%"><input type="checkbox" name="case12" value="12"><big><strong>Po</strong></big><span style="color: blue">petaocter</span><br>

			<span style="padding-left:16.5%"><span style="color: blue">exaocter</span><big><strong>Eo</strong></big><input type="checkbox" name="case13" value="13"><span style="padding-left:27%"><input type="checkbox" name="case14" value="14"><big><strong>Eo</strong></big><span style="color: blue">exaocter</span><br>

			<span style="padding-left:16%"><span style="color: blue">zettaocter</span><big><strong>Zo</strong></big><input type="checkbox" name="case15" value="15"><span style="padding-left:27%"><input type="checkbox" name="case16" value="16"><big><strong>Zo</strong></big><span style="color: blue">zettaocter</span><br>

			<span style="padding-left:16%"><span style="color: blue">yottaocter</span><big><strong>Yo</strong></big><input type="checkbox" name="case17" value="17"><span style="padding-left:27%"><input type="checkbox" name="case18" value="18"><big><strong>Yo</strong></big><span style="color: blue">yottaocter</span><br></br>


	<a href="#"><img src="images/weight.png"></a><span style="padding-left:6%">
	<a href="#"><img src="images/area.png"></a><span style="padding-left:6%">
	<a href="#"><img src="images/speed.png"></a><span style="padding-left:6%">
	<a href="time.php"><img src="images/time.png"></a><br>
	<span style="padding-left:7%"><a href="#">Poids</a><span style="padding-left:18%">
	<a href="#">Superficie</a><span style="padding-left:16%">
	<a href="#">Vitesse</a><span style="padding-left:16%">
	<a href="#">Temps</a><span style="padding-left:16%">
		</div>
</body>
</html>