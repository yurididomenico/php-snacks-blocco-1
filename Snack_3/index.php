<!--
Snack 3
Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato:
    -DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.

Stampare ogni data con i relativi post.



Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

-->
<!-- ----- PHP ------------------------------------------------------------------------------------------------- -->
<?php

    $posts = 
    [

        '10-01-2019' => 
        [
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

        '10-02-2019' => 
        [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],

        '15-05-2019' => 
        [
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


       
    
    


?>


<!-- ----- HTML ------------------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YDD - Snack 3</title>
</head>
<body>
    <div class="contenitore">
        <h3>Vettore: </h3>
        <div>
            <?php
            
            // echo key($posts);

            // foreach(array_keys($posts) as $key){
            //     echo "<div>";

            //     echo $key;
                
            //     echo "</div>";
            // }

            // Stampa ogni data con i relativi post
            foreach ($posts as $date => $datePosts)
            {
                echo "<h3>".$date."<br></h3>";
            
                foreach ($datePosts as $post) 
                {
                    echo "<p>" . $post["title"] . "</p><br>";
                    echo "<p>" . $post["author"] . "</p><br>";
                    echo "<p>" . $post["text"] . "</p><br><br>";
                }

                echo "<br>";
            }
            

            
                
            
            ?>
        </div>
    </div>
</body>
</html>


<!-- ----- STILE ------------------------------------------------------------------------------------------------- -->
<style>

*
{
padding: 0;
margin: 0;
box-sizing: border-box;
color: inherit;
text-decoration: none;
list-style-type: none;
transition-duration: 200ms;
}

body
{
    background-color: #c6c6c6;
    padding: 50px;
}

.contenitore div
{
    padding: 10px 20px;
}


</style>