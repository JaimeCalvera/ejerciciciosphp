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
    $players = array(
        'Jugador Base' => 'Base',
        'Jugador Pivot' => 'Pivot',
        'Jugador Ala-pivot' => 'Ala-pivot',
        'Jugador Ala-pivot2' => 'Ala-pivot',
        'Jugador Alero' => 'Alero',


    );
    foreach($players as $player => $position){
        echo "El ".$player." es ".$position.'<br/>';
    };

?>