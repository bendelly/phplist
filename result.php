<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" initial-scale=1"/>
	<link type="text/css" rel="stylesheet" href="reset.css">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Page Title</title>
</head>
<body>

	<?php
		$utvonal = array(
		array(
			"start" => "Budapest",
			"cel" => "Székesfehérvár",
			"km" => "66"
		),
		array(
			"start" => "Budapest",
			"cel" => "Veszprém",
			"km" => "110"
		),
		array(
			"start" => "Budapest",
			"cel" => "Győr",
			"km" => "124"
		),
		array(
			"start" => "Veszprém",
			"cel" => "Székesfehérvár",
			"km" => "44"
		),
		array(
			"start" => "Veszprém",
			"cel" => "Győr",
			"km" => "78"
		),
		array(
			"start" => "Székesfehérvár",
			"cel" => "Győr",
			"km" => "85"
		)

		);

		$indul = $_POST['start'];
		$erkezik = $_POST['cel'];
		$kedvezmeny = $_POST['kedvezmeny'];
		$kmdij = 18; // 18 forint kilometerenkent
		$kiegeszito = 175;

		if($indul == $erkezik){
			echo "Ugyanaz a cél és az indulás, válassza ki az útirányt helyesen!";
		}else{
			foreach($utvonal as $value){
				if((($value['start'] == $indul) && ($value['cel'] == $erkezik)) || (($value['cel'] == $indul) && ($value['start'] == $erkezik)) ){
					$km = $value['km'];
					$viteldij = $km * $kmdij;
				}
			}
			$total = $viteldij * $kedvezmeny * $kiegeszito;
			echo 'Indulás:' . $indul . '<br/>';
			echo 'Érkezés:' . $erkezik . '<br/>';
			echo 'Viteldíj: </b>' . $total . '</b> Ft';
		}
	?>

</body>
</html>