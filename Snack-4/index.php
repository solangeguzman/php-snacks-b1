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
    #Creare un array contenente qualche alunno di un’ipotetica classe.
    #Ogni alunno avrà i seguenti dati:
    #nome
    #cognome
    #un array contenente i suoi voti scolastici
    #Stampare nome, cognome e la media dei voti di ogni alunno.

    $student = [
        [ "nome" => "Marco","cognome" => "figarow","voti" => [3,4,5,10,9]],
        ["nome" => "Anastasia","cognome" => "moscow","voti" => [10,10,10,10,9]],
        [ "nome" => "Frank","cognome" => "buonimo","voti" => [9,9,9,9,7]]
    ];
    
    var_dump($student);
    
    for ($x=0; $x < count($student) ; $x++) { ?>
      <div>
        <?= $student[$x]['nome']?>
        <?= $student[$x]['cognome']?>
        <?= 'Media Voti: ' . $media = array_sum($student[$x]['voti'])/count($student[$x]['voti']) ?>
        <hr>
      </div>
      <br>
    <?php } 
    ?>
</body>
</html>