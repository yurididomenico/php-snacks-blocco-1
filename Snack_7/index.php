<!-- 
Snack 7
-Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà:
    -Nome
    -Cognome
    -Array contenente i suoi voti scolastici.
Stampare:
    -Nome
    -Cognome
    -Media dei voti di ogni alunno.
 -->
<!-- ----- PHP ------------------------------------------------------------------------------------------------- -->
<?php

    $classe =
    [
        [
            'nome' => 'Totino',
            'cognome' => 'Burrasca',
            'voti' => [4, 6, 3]
        ],

        [
            'nome' => 'Alfonsino',
            'cognome' => 'Mastronni',
            'voti' => [6, 6, 3]
        ],

        [
            'nome' => 'Gigino',
            'cognome' => 'Scaletta',
            'voti' => [4, 6, 8]
        ],

    ]

?>


<!-- ----- HTML ------------------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YDD - Snack 7</title>
</head>
<body>
    <div class="contenitore">
            <?php
                // foreach ($classe as $alunni => $alunno)
                // {
                //     echo "<ul>";
                //         echo "<li>Nome: "."{$alunno["nome"]}"."</li>";
                //         echo "<li>Cognome: "."{$alunno["cognome"]}"."</li>";
                //     echo "</ul>";
                // }

                for($i=0; $i<count($classe); $i++)
                {
                    $mediaVoti = array_sum($classe[$i]['voti']) / count($classe[$i]['voti']);

                    echo $classe[$i]['nome']." - ".$classe[$i]['cognome']."<br>Media: ".$mediaVoti."<br><br>";
                }


            ?>
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

.contenitore ul
{
    padding: 20px
}

</style>