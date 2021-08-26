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
    #Creare un array di array.
    #Ogni array figlio avrà come chiave una data in questo formato:
    #DD/MM/YYYY (ad es 31/01/2007) e come valore un array di post associati
    #a quella data.
    #Stampare ogni data con i relativi post.
    #Qui l’array di esempio:
    #https://www.codepile.net/pile/R2K5d68z

    $posts2021 = [

        '20/01/2021' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '11/02/2021' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '20/03/2021' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    #------------
    var_dump($posts2021);
    #--------
   
        for($x=0; $x < count($posts2021); $x++) {
            for($i = 0; $i < count($posts2021[$i]); $i++){
                echo $posts2021 [$x][$i]['title'];
            }
        #$info[$i]["title"];
        #$info[$i]["author"];
        #$info[$i]["text"];
        }
    };
    #DA RIVEDERE-------
    ?>
</body>
</html>