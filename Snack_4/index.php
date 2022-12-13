<!--
Snack 4
Creare un array con 15 numeri casuali
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->
<!-- ----- PHP ------------------------------------------------------------------------------------------------- -->
<?php

    // $arrayNumeriCasuali = ['1', '2'];
    // echo $arrayNumeriCasuali[1];


    $arrayNumeriCasuali = [];

    while(count($arrayNumeriCasuali) < 15)
    {
        $numero = rand(1, 20);

        if(!in_array($numero, $arrayNumeriCasuali))
        {
            $arrayNumeriCasuali[] = $numero;
        }
    }


    for($i=0; $i<15; $i++)
    {
        echo $arrayNumeriCasuali[$i]."<br>";
    }
    

?>


<!-- ----- HTML ------------------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YDD - Snack 4</title>
</head>
<body>
    <div class="contenitore">
        <?php
        
            // var_dump($arrayNumeriCasuali);
        
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



</style>