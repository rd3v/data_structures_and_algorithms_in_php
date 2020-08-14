<?php 

function reOrdered(array $data) {	
	for ($i=0; $i < count($data); $i++) { 
		for ($j=0; $j < count($data); $j++) { 
			if ($data[$i] < $data[$j]) {
				$temp = $data[$i];
				$data[$i] = $data[$j];
				$data[$j] = $temp;
			}
		}	
	}
	return $data;
}

function displayData(array $data) {
	for ($i=0; $i < count($data); $i++) { 
		echo $data[$i]." ";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bubble Sort</title>
</head>
<body>
	<?php
		$data = [4,1,93,6,3,8,0,-7];
		$count = count($data);
	?>
	<p>Data Sebelum di Urutkan :</p>
	<h3><?= displayData($data); ?></h3>

	<p>Data Setelah di Urutkan :</p>
	<h3>
		<?php 
			$reOrdered = reOrdered($data);
			displayData($reOrdered);
		?>
	</h3>
</body>
</html>