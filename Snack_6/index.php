<!-- 
Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
 -->
<!-- ----- PHP ------------------------------------------------------------------------------------------------- -->
<?php

$db = 
[
    'teachers' => 
    [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],


    'pm' => 
    [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
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
    <title>YDD - Snack 6</title>
</head>
<body>
    <div class="contenitore">
        <div class="box insegnanti">
            <?php
            
                // echo count($db);
                foreach ($db as $categorie)
                {
                    // var_dump($categorie);
                    foreach ($categorie as $elementi)
                    {
                        foreach ($elementi as $figli)
                        {
                            var_dump($figli);
                        }
                    }

                    echo "<br>";                    
                }

                
            
            ?>
        </div>

        <div class="box pm">

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

.contenitore
{
    display: flex;
}

.box
{
    border: 2px solid black;
    padding: 30px;
    flex-grow: 1;
}

.insegnanti
{
    background-color: grey;
}

.pm
{
    background-color: green;
}

</style>