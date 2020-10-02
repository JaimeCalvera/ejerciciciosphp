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
    $n1 = 0;
    $n2 = 1;

    echo "$n1<br>";
    echo "$n2<br>";

    for ($i=2; $i < 10; $i++){
        $resultado = $n1 + $n2;
        echo "$resultado<br>";
        $n1 = $n2;
        $n2 = $resultado;

    }

?>