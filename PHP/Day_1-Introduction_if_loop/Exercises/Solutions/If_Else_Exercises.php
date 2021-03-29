<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.alert {
			color: red;
		}
	</style>
</head>

<body>
	<?php
	echo 'hello';
	?>
	
	<h1>Character Exercise</h1>

	<?php
	$charName = 'Banana Guy';
	$charImg = '<img src="banana.png" width="100px">';
	$characteristics = [
		'atk' => 10,
		'def' => 5,
		'health' => 10
	];

	echo '<h2>' . $charName . '</h2>';
	echo $charImg;
	echo 'Atk points : ' . $characteristics['atk'] . '<br>';
	echo 'Def points : ' . $characteristics['def'] . '<br>';

	if ($characteristics['atk'] > 9 or $characteristics['def'] > 9) {
		echo '<div class="alert">
		<strong>Congratulations !</strong> Your character is ready to fight.</strong>
		</div>';
	} else if ($characteristics['atk'] < 5 or $characteristics['def'] < 5) {
		echo '<div class="alert">
		<strong>Wait !</strong> Your charachter is too weeeakk!
		</div>';
	}
	?>
</body>

</html>