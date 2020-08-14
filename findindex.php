<?php
	class Algorithm {
		
		public static function getIndex($arr,$element) {
			for ($i=0; $i < count($arr); $i++) { 
				if ($element == $arr[$i]) {
					return "Index of key <u>".$element."</u> is <u>".$i."</u>";
				}
			}
		}		

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Algorithm and Data Structures</title>
</head>
<body>	

<h2>Linear Search - Find Index</h2>
<?php $arr = [4,31,16,50,92]; ?>
<h3><?= Algorithm::getIndex($arr,31) ?></h3>
</body>
</html>
