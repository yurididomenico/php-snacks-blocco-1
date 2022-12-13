<!--
Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
-Suddividerlo in tanti paragrafi.
-Ogni punto un nuovo paragrafo.
-->
<!-- ----- PHP ------------------------------------------------------------------------------------------------- -->
<?php

$paragrafoLungo =
"
 Il ragazzo si zittì un secondo per poi ruggire con ferocia draconica.
 Farsik prese il pugnale e velocemente incise la schiena del ragazzo.
 Emirond e Farion lo tenevano fermo contro l’albero. Keron reggeva la corda con tutta la forza che aveva.
 Cit.
"
?>


<!-- ----- HTML ------------------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YDD - Snack 5</title>
</head>
<body>
    <div class="contenitore">
        <p>
            <?php echo $paragrafoLungo ?>
        </p>

        <?php
        
        $paragrafiSpezzati = explode(".", $paragrafoLungo);

        for($i=0; $i<count($paragrafiSpezzati); $i++)
        {
            echo "<p>".$paragrafiSpezzati[$i]."</p>";
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

.contenitore p
{
    font-size: 1.2rem;
    padding: 20px 0;
}


</style>