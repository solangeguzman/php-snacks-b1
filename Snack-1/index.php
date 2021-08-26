<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     #Creiamo una struttura dati che rappresenta le partite di basket
     #di un’ipotetica tappa del calendario.
     #Ogni array interno conterrà le seguenti informazioni:
     #una squadra di casa
     #una squadra ospite
     #punti fatti dalla squadra di casa
     #punti fatti dalla squadra ospite
     #Stampiamo a schermo tutte le partite con questo schema:
     #Olimpia Milano - Cantù | 55-60

     
     $partite = [

        [
           "casa" => "olimpiadi Milano",
           "ospite" => "Cantù",
           "casaPunti" => 55,
           "ospitePunti" => 60,
        ],

        [
            "casa" => "Virtus",
            "ospite" => "Bologna",
            "casaPunti" => 40,
            "ospitePunti" => 30,
        ],

        [
            "casa" => "olimpiadi Milano",
            "ospite" => "Cantù",
            "casaPunti" => 55,
            "ospitePunti" => 60,
        ],
    ];
    // olimpia Milano - Cantù | 55-60

    for($i=0; $i < count($partite); $i++){
        //$string=$partite[$i]['casa']} . ' - ' ...
        echo "{$partite[$i] ['casa']} - {$partite[$i] ['ospite']} | {$partite[$i] ['casaPunti']} - {$partite[$i] ['ospitePunti']}";
        
    }
    ?>
</body>
</html>