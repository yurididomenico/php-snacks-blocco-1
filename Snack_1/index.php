<!--
//Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
-Ogni array avrà:
    -una squadra di casa e una squadra ospite
    -punti fatti dalla squadra di casa e punti fatti dalla squadra ospite
-Stampiamo a schermo tutte le partite con questo schema.

Esempio:
Olimpia Milano - Cantù | 55-60 

-->
<!-- ----- PHP ------------------------------------------------------------------------------------------------- -->
<?php

    $array = 
    [
        [
            "squadraCasa" => "Licantropi",
            "puntiSquadraCasa" => 20,
            "squadraOspite" => "Vampiri",
            "puntiSquadraOspite" => 30,
        ],

        [
            "squadraCasa" => "Maghi",
            "puntiSquadraCasa" => 43,
            "squadraOspite" => "Babbani",
            "puntiSquadraOspite" => 15,
        ],

        [
            "squadraCasa" => "Ladri",
            "puntiSquadraCasa" => 23,
            "squadraOspite" => "Poliziotti",
            "puntiSquadraOspite" => 34,
        ]
    ];

?>


<!-- ----- HTML ------------------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YDD - Snack 1</title>
</head>
<body>
    <div class="contenitore">
        <ul>
            <?php            
                for($i=0; $i<count($array); $i++)
                {
                    echo "<li>";
                        echo $array[$i]["squadraCasa"]." ";
                        echo $array[$i]["puntiSquadraCasa"]."<br>";

                        echo $array[$i]["squadraOspite"]." ";
                        echo $array[$i]["puntiSquadraOspite"]."<br>";
                    echo "</li>";
                }
            ?>
        </ul>
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

.contenitore ul li
{
    padding: 10px 0;
}

</style>