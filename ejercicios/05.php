<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    $n=169;

    for($i = 1; $i < $n; $i++){
        if($n % $i == 0){
            echo " El numero ". $i. " es divisor de ". $n."<br>";
        }
    }


?>