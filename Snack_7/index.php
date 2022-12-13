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
        0 =>
        [
            'nome' => 'Totino',
            'cognome' => 'Burrasca',
            'voti' =>
            [
                'italiano' => 4,
                'storia' => 6,
                'informatica' => 3
            ]
        ],

        1 =>
        [
            'nome' => 'Alfonsino',
            'cognome' => 'Mastronni',
            'voti' =>
            [
                'italiano' => 3,
                'storia' => 4,
                'informatica' => 6
            ]
        ],

        2 =>
        [
            'nome' => 'Gigino',
            'cognome' => 'Scaletta',
            'voti' =>
            [
                'italiano' => 4,
                'storia' => 6,
                'informatica' => 3
            ]
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
                foreach ($classe as $alunni => $alunno)
                {
                    echo "<ul>";
                        echo "<li>Nome: "."{$alunno["nome"]}"."</li>";
                        echo "<li>Cognome: "."{$alunno["cognome"]}"."</li>";

                    echo "</ul>";
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