<?php
if (isset($_POST['convertir']) && isset($_POST['valeur'])) {
	//case2==>Octes
	if (isset($_POST['case19']) && isset($_POST['case2'])) {
		$n1="mille marin";$n2="Km";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.852;

	}
	if (isset($_POST['case17']) && isset($_POST['case2'])) {
		$n1="yard";$n2="Km";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.0009144;
	}
	if (isset($_POST['case15']) && isset($_POST['case2'])) {
		$n1="foot";$n2="Km";
		$valeur=$_POST['valeur'];
		$res=$valeur* 0.0003048;
	}
	if (isset($_POST['case13']) && isset($_POST['case2'])) {
		$n1="inch";$n2="Km";
		$valeur=$_POST['valeur'];
		$res=$valeur*2.54e-5;
	}
	if (isset($_POST['case11']) && isset($_POST['case2'])) {
		$n1="mille";$n2="Km";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.609344;
	}
	if (isset($_POST['case9']) && isset($_POST['case2'])) {
		$n1="mm";$n2="Km";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.0e-6;
	}
	if (isset($_POST['case7']) && isset($_POST['case2'])) {
		$n1="cm";$n2="Km";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.0e-5;
	}
	if (isset($_POST['case5']) && isset($_POST['case2'])) {
		$n1="dm";$n2="Km";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.0001;
	}
	if (isset($_POST['case3']) && isset($_POST['case2'])) {
		$n1="mètre";$n2="Octets";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.001;
	}
	//case4==>kilooctets
	if (isset($_POST['case1']) && isset($_POST['case4'])) {
		$n1="Km";$n2="mètre";
		$valeur=$_POST['valeur'];
		$res=$valeur*1000;
	}
	if (isset($_POST['case5']) && isset($_POST['case4'])) {
		$n1="dm";$n2="mètre";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.1;
	}
	if (isset($_POST['case7']) && isset($_POST['case4'])) {
		$n1="cm";$n2="mètre";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.01;
	}
	if (isset($_POST['case9']) && isset($_POST['case4'])) {
		$n1="mm";$n2="mètre";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.001;
	}
	if (isset($_POST['case11']) && isset($_POST['case4'])) {
		$n1="mille";$n2="mètre";
		$valeur=$_POST['valeur'];
		$res=$valeur*1609.344;
	}
	if (isset($_POST['case13']) && isset($_POST['case4'])) {
		$n1="inch";$n2="mètre";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.0254;

	}
	if (isset($_POST['case15']) && isset($_POST['case4'])) {
		$n1="foot";$n2="mètre";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.3048;

	}
	if (isset($_POST['case17']) && isset($_POST['case4'])) {
		$n1="Yard";$n2="mètre";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.9144;

	}
	if (isset($_POST['case19']) && isset($_POST['case4'])) {
		$n1="mille marin";$n2="mètre";
		$valeur=$_POST['valeur'];
		$res=$valeur*1852;

	}

	//case6=>Mo octets
	if (isset($_POST['case1']) && isset($_POST['case6'])) {
		$n1="Km";$n2="dm";
		$valeur=$_POST['valeur'];
		$res=$valeur*10000;
	}
	if (isset($_POST['case3']) && isset($_POST['case6'])) {
		$n1="mètre";$n2="dm";
		$valeur=$_POST['valeur'];
		$res=$valeur*10;
	}
	if (isset($_POST['case7']) && isset($_POST['case6'])) {
		$n1="cm";$n2="dm";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.1;
	}
	if (isset($_POST['case9']) && isset($_POST['case6'])) {
		$n1="mm";$n2="dm";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.01;
	}
	if (isset($_POST['case11']) && isset($_POST['case6'])) {
		$n1="mille";$n2="dm";
		$valeur=$_POST['valeur'];
		$res=$valeur*16093.44;
	}
	if (isset($_POST['case13']) && isset($_POST['case6'])) {
		$n1="inch";$n2="dm";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.254;

	}
	if (isset($_POST['case15']) && isset($_POST['case6'])) {
		$n1="foot";$n2="dm";
		$valeur=$_POST['valeur'];
		$res=$valeur*3.048;

	}
	if (isset($_POST['case17']) && isset($_POST['case6'])) {
		$n1="yard";$n2="dm";
		$valeur=$_POST['valeur'];
		$res=$valeur*9.144;

	}
	if (isset($_POST['case19']) && isset($_POST['case4'])) {
		$n1="mille marin";$n2="dm";
		$valeur=$_POST['valeur'];
		$res=$valeur*18520;

	}
	//case8=>Go octets
	if (isset($_POST['case1']) && isset($_POST['case8'])) {
		$n1="Km";$n2="cm";
		$valeur=$_POST['valeur'];
		$res=$valeur*100000;
	}
	if (isset($_POST['case3']) && isset($_POST['case8'])) {
		$n1="mètre";$n2="cm";
		$valeur=$_POST['valeur'];
		$res=$valeur*100;
	}
	if (isset($_POST['case5']) && isset($_POST['case8'])) {
		$n1="dm";$n2="cm";
		$valeur=$_POST['valeur'];
		$res=$valeur*10;
	}
	if (isset($_POST['case9']) && isset($_POST['case8'])) {
		$n1="mm";$n2="cm";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.1;
	}
	if (isset($_POST['case11']) && isset($_POST['case8'])) {
		$n1="mille";$n2="cm";
		$valeur=$_POST['valeur'];
		$res=$valeur*160934.4;
	}
	if (isset($_POST['case13']) && isset($_POST['case8'])) {
		$n1="inch";$n2="cm";
		$valeur=$_POST['valeur'];
		$res=$valeur*2.54;

	}
	if (isset($_POST['case15']) && isset($_POST['case8'])) {
		$n1="foot";$n2="cm";
		$valeur=$_POST['valeur'];
		$res=$valeur*30.48;

	}
	if (isset($_POST['case17']) && isset($_POST['case8'])) {
		$n1="Yard";$n2="cm";
		$valeur=$_POST['valeur'];
		$res=$valeur*91.44;

	}
	if (isset($_POST['case19']) && isset($_POST['case4'])) {
		$n1="mille marin";$n2="cm";
		$valeur=$_POST['valeur'];
		$res=$valeur*185200;

	}

	//
	if (isset($_POST['case1']) && isset($_POST['case10'])) {
		$n1="km";$n2="mm";
		$valeur=$_POST['valeur'];
		$res=$valeur*1000000;
	}
	if (isset($_POST['case3']) && isset($_POST['case10'])) {
		$n1="mètre";$n2="mm";
		$valeur=$_POST['valeur'];
		$res=$valeur*1000 ;
	}
	if (isset($_POST['case5']) && isset($_POST['case10'])) {
		$n1="dm";$n2="mm";
		$valeur=$_POST['valeur'];
		$res=$valeur*100;
	}
	if (isset($_POST['case7']) && isset($_POST['case10'])) {
		$n1="cm";$n2="mm";
		$valeur=$_POST['valeur'];
		$res=$valeur*10;
	}
	if (isset($_POST['case11']) && isset($_POST['case10'])) {
		$n1="mille";$n2="mm";
		$valeur=$_POST['valeur'];
		$res=$valeur*1609344;
	}
	if (isset($_POST['case13']) && isset($_POST['case10'])) {
		$n1="inch";$n2="mm";
		$valeur=$_POST['valeur'];
		$res=$valeur*25.4;

	}
	if (isset($_POST['case15']) && isset($_POST['case10'])) {
		$n1="foot";$n2="mm";
		$valeur=$_POST['valeur'];
		$res=$valeur*304.8;

	}
	if (isset($_POST['case17']) && isset($_POST['case10'])) {
		$n1="Yard";$n2="mm";
		$valeur=$_POST['valeur'];
		$res=$valeur*914.4;

	}
	if (isset($_POST['case19']) && isset($_POST['case4'])) {
		$n1="mille marin";$n2="mm";
		$valeur=$_POST['valeur'];
		$res=$valeur*1852000;

	}

	//

	if (isset($_POST['case1']) && isset($_POST['case12'])) {
		$n1="Km";$n2="mille";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.62137119223733;
	}
	if (isset($_POST['case3']) && isset($_POST['case12'])) {
		$n1="mètre";$n2="mille";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.00062137119223733;
	}
	if (isset($_POST['case5']) && isset($_POST['case12'])) {
		$n1="dm";$n2="mille";
		$valeur=$_POST['valeur'];
		$res=$valeur*6.2137119223733e-5;
	}
	if (isset($_POST['case7']) && isset($_POST['case12'])) {
		$n1="cm";$n2="mille";
		$valeur=$_POST['valeur'];
		$res=$valeur*6.2137119223733e-6;
	}
	if (isset($_POST['case9']) && isset($_POST['case12'])) {
		$n1="mm";$n2="mille";
		$valeur=$_POST['valeur'];
		$res=$valeur*6.2137119223733e-7;
	}
	if (isset($_POST['case13']) && isset($_POST['case12'])) {
		$n1="inch";$n2="mille";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.5782828282828e-5;

	}
	if (isset($_POST['case15']) && isset($_POST['case12'])) {
		$n1="foot";$n2="mille";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.00018939393939394;

	}
	if (isset($_POST['case17']) && isset($_POST['case12'])) {
		$n1="Yard";$n2="mille";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.00056818181818181;

	}
	if (isset($_POST['case19']) && isset($_POST['case12'])) {
		$n1="mille marin";$n2="mille";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.1507794480235;

	}

	//

	if (isset($_POST['case1']) && isset($_POST['case14'])) {
		$n1="km";$n2="inch";
		$valeur=$_POST['valeur'];
		$res=$valeur*39370.078740157;
	}
	if (isset($_POST['case3']) && isset($_POST['case14'])) {
		$n1="mètre";$n2="inch";
		$valeur=$_POST['valeur'];
		$res=$valeur*39.370078740157;
	}
	if (isset($_POST['case5']) && isset($_POST['case14'])) {
		$n1="dm";$n2="inch";
		$valeur=$_POST['valeur'];
		$res=$valeur*3.9370078740157;
	}
	if (isset($_POST['case7']) && isset($_POST['case14'])) {
		$n1="cm";$n2="inch";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.39370078740157;
	}
	if (isset($_POST['case9']) && isset($_POST['case14'])) {
		$n1="mm";$n2="inch";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.039370078740157;
	}
	if (isset($_POST['case11']) && isset($_POST['case14'])) {
		$n1="mille";$n2="inchs";
		$valeur=$_POST['valeur'];
		$res=$valeur*63360;

	}
	if (isset($_POST['case15']) && isset($_POST['case14'])) {
		$n1="foot";$n2="inchs";
		$valeur=$_POST['valeur'];
		$res=$valeur*12;

	}
	if (isset($_POST['case17']) && isset($_POST['case14'])) {
		$n1="Yard";$n2="inchs";
		$valeur=$_POST['valeur'];
		$res=$valeur*36;

	}
	if (isset($_POST['case19']) && isset($_POST['case14'])) {
		$n1="mille marin";$n2="inchs";
		$valeur=$_POST['valeur'];
		$res=$valeur*72913.385826772;
	}

	//


	if (isset($_POST['case1']) && isset($_POST['case16'])) {
		$n1="km";$n2="foot";
		$valeur=$_POST['valeur'];
		$res=$valeur*3280.8398950131 ;
	}
	if (isset($_POST['case3']) && isset($_POST['case16'])) {
		$n1="mètre";$n2="foot";
		$valeur=$_POST['valeur'];
		$res=$valeur*3.2808398950131;
	}
	if (isset($_POST['case5']) && isset($_POST['case16'])) {
		$n1="dm";$n2="foot";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.32808398950131;
	}
	if (isset($_POST['case7']) && isset($_POST['case16'])) {
		$n1="cm";$n2="foot";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.032808398950131;
	}
	if (isset($_POST['case9']) && isset($_POST['case16'])) {
		$n1="mm";$n2="foots";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.0032808398950131;
	}
	if (isset($_POST['case11']) && isset($_POST['case16'])) {
		$n1="mille";$n2="foots";
		$valeur=$_POST['valeur'];
		$res=$valeur*5280;

	}
	if (isset($_POST['case13']) && isset($_POST['case16'])) {
		$n1="inch";$n2="foots";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.083333333333333;

	}
	if (isset($_POST['case17']) && isset($_POST['case16'])) {
		$n1="Yard";$n2="foots";
		$valeur=$_POST['valeur'];
		$res=$valeur*3;

	}
	if (isset($_POST['case19']) && isset($_POST['case16'])) {
		$n1="mille marin";$n2="foots";
		$valeur=$_POST['valeur'];
		$res=$valeur*6076.1154855643;

	}

	//


	if (isset($_POST['case1']) && isset($_POST['case18'])) {
		$n1="km";$n2="yards";
		$valeur=$_POST['valeur'];
		$res=$valeur*1093.6132983377;
	}
	if (isset($_POST['case3']) && isset($_POST['case18'])) {
		$n1="mètre";$n2="yards";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.0936132983377;
	}
	if (isset($_POST['case5']) && isset($_POST['case18'])) {
		$n1="dm";$n2="yards";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.10936132983377;
	}
	if (isset($_POST['case7']) && isset($_POST['case18'])) {
		$n1="cm";$n2="yards";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.010936132983377;
	}
	if (isset($_POST['case9']) && isset($_POST['case18'])) {
		$n1="mm";$n2="yards";
		$valeur=$_POST['valeur'];
		$res=$valeur* 0.0010936132983377;
	}
	if (isset($_POST['case11']) && isset($_POST['case18'])) {
		$n1="mille";$n2="yards";
		$valeur=$_POST['valeur'];
		$res=$valeur*1760;

	}
	if (isset($_POST['case13']) && isset($_POST['case18'])) {
		$n1="inchs";$n2="yards";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.027777777777778;

	}
	if (isset($_POST['case15']) && isset($_POST['case18'])) {
		$n1="foots";$n2="yards";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.33333333333334 ;

	}
	if (isset($_POST['case19']) && isset($_POST['case18'])) {
		$n1="mille marin";$n2="yards";
		$valeur=$_POST['valeur'];
		$res=$valeur*2025.3718285214 ;

	}
	//

	if (isset($_POST['case1']) && isset($_POST['case20'])) {
		$n1="km";$n2="mille marin";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.53995680345572;
	}
	if (isset($_POST['case3']) && isset($_POST['case20'])) {
		$n1="mètre";$n2="mille marin";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.00053995680345572;
	}
	if (isset($_POST['case5']) && isset($_POST['case20'])) {
		$n1="dm";$n2="mille marin";
		$valeur=$_POST['valeur'];
		$res=$valeur*5.3995680345572e-5;
	}
	if (isset($_POST['case7']) && isset($_POST['case20'])) {
		$n1="cm";$n2="mille marin";
		$valeur=$_POST['valeur'];
		$res=$valeur*5.3995680345572e-6;
	}
	if (isset($_POST['case9']) && isset($_POST['case20'])) {
		$n1="mm";$n2="mille marin";
		$valeur=$_POST['valeur'];
		$res=$valeur*5.3995680345572e-7;
	}
	if (isset($_POST['case11']) && isset($_POST['case20'])) {
		$n1="mille";$n2="mille marin";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.86897624190065;

	}
	if (isset($_POST['case13']) && isset($_POST['case20'])) {
		$n1="inchs";$n2="mille marins";
		$valeur=$_POST['valeur'];
		$res=$valeur*1.3714902807775e-5;

	}
	if (isset($_POST['case15']) && isset($_POST['case20'])) {
		$n1="foots";$n2="milles marin";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.00016457883369331 ;

	}
	if (isset($_POST['case19']) && isset($_POST['case20'])) {
		$n1="mille marin";$n2="milles marins";
		$valeur=$_POST['valeur'];
		$res=$valeur*0.00049373650107991 ;

	}



}

?>


<!DOCTYPE html>
<html>
<link href='css/style.css' rel='stylesheet'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
	<title>Convertisseur de Distance</title>
</head>
<body>
<h1>Convertisseur</h1>
<div class="cadre">
	<form method="POST" action="#">
	<p><strong>Comment convertir <span style="color: #5f9ea0">une distance</span> ?</strong></p>
	<p>Insérez une valeur et sélectionnez <span style="color: #87cefa">l'unité de distance</span> (de départ puis d'arrivée) <span style="color: #87cefa">( Exemple : km en mille )</span><br>
Vous pouvez choisir le nombre de chiffres significatifs.</p><br>
	<a href="temperature.php"><img src="images/temperature.png""></a><span style="padding-left:6%">
	<a href="volume.php"><img src="images/volume.png""></a><span style="padding-left:6%">
	<a href="#"><img src="images/distance-select.png""></a><span style="padding-left:6%">
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

			<span style="padding-left:15%"><span style="color: blue">kilomètre</span><big><strong>Km</strong></big><input type="checkbox" name="case1" value="1"><span style="padding-left:27%"><input type="checkbox" name="case2" value="2"><big><strong>Km</strong></big><span style="color: blue">kilomètre</span><br>

			<span style="padding-left:20%"><span style="color: blue">mètre</span><big><strong>m</strong></big><input type="checkbox" name="case3" value="3"><span style="padding-left:27%"><input type="checkbox" name="case4" value="4"><big><strong>m</strong></big><span style="color: blue">mètre</span><br>

			<span style="padding-left:15%"><span style="color: blue">décimètre</span><big><strong>dm</strong></big><input type="checkbox" name="case5" value="5"><span style="padding-left:27%"><input type="checkbox" name="case6" value="6"><big><strong>dm</strong></big><span style="color: blue">décimètre</span><br>

			<span style="padding-left:14.5%"><span style="color: blue">centimètre</span><big><strong>cm</strong></big><input type="checkbox" name="case7" value="7"><span style="padding-left:27%"><input type="checkbox" name="case8" value="8"><big><strong>cm</strong></big><span style="color: blue">centimètre</span><br>

			<span style="padding-left:13.5%"><span style="color: blue">millimètre</span><big><strong>mm</strong></big><input type="checkbox" name="case9" value="9"><span style="padding-left:3%"><input class="convert" type="submit" name="convertir" value="Convertir"><span style="padding-left:4%"><input type="checkbox" name="case10" value="10"><big><strong>mm</strong></big><span style="color: blue">millimètre</span><br>

			<span style="padding-left:20%"><span style="color: blue">mille</span><big><strong>mi</strong></big><input type="checkbox" name="case11" value="11"><span style="padding-left:27%"><input type="checkbox" name="case12" value="12"><big><strong>mi</strong></big><span style="color: blue">mille</span><br>

			<span style="padding-left:21%"><span style="color: blue">inch</span><big><strong>in</strong></big><input type="checkbox" name="case13" value="13"><span style="padding-left:27%"><input type="checkbox" name="case14" value="14"><big><strong>in</strong></big><span style="color: blue">inch</span><br>

			<span style="padding-left:22%"><span style="color: blue">foot</span><big><strong>ft</strong></big><input type="checkbox" name="case15" value="15"><span style="padding-left:27%"><input type="checkbox" name="case16" value="16"><big><strong>ft</strong></big><span style="color: blue">foot</span><br>

			<span style="padding-left:20.5%"><span style="color: blue">yard</span><big><strong>yd</strong></big><input type="checkbox" name="case17" value="17"><span style="padding-left:27%"><input type="checkbox" name="case18" value="18"><big><strong>yd</strong></big><span style="color: blue">yard</span><br>

			<span style="padding-left:3.5%"><span style="color: blue">mille marin</span><big><strong>mille marin</strong></big><input type="checkbox" name="case19" value="19"><span style="padding-left:27%"><input type="checkbox" name="case20" value="20"><big><strong>mille marin</strong></big><span style="color: blue">mille marin</span><br></br>


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