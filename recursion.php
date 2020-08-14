<?php 
    function printN($n) {
        if($n==0) {
            return;
        } else {
            echo $n."<br>";
            printN($n-1);
        }
    }

    function addTilHundred($n) {
        if($n==100) {
            echo $n."<br>";
            return;
        } else {
            echo $n."<br>";
            addTilHundred($n+1);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursion</title>
</head>
<body>
    <h2><u>Recursion</u></h2>
    <h3><?= addTilHundred(50); ?></h3>
</body>
</html>