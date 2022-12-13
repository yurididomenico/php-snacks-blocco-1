<!--
Snack 2
-Passare come parametri GET:
    -name
    -mail
    -age
-Verificare se:
    -name sia più lungo di 3 caratteri
    -mail contenga un punto e una chiocciola
    -age sia un numero.
-Controllare e stampare:
    -“Accesso riuscito” se l'if risulta true
    -"Accesso negato” se l'if risulta false

-->
<!-- ----- PHP ------------------------------------------------------------------------------------------------- -->
<?php

   
?>


<!-- ----- HTML ------------------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YDD - Snack 2</title>
</head>
<body>
    <div class="contenitore">
        <form action="" method="GET">
            <ul>
                <li><input type="text" placeholder="Nome..."></li>
                <li><input type="text" placeholder="Email..."></li>
                <li><input type="text" placeholder="Età..."></li>
                <li><button>Invia</button></li>
            </ul>
            
            <!-- <input type="email">
            <input type="number"> -->

            
        </form>
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

.contenitore li
{
    padding: 10px 0;
}

.contenitore li input
{
    padding: 10px 15px;
    border-radius: 20px;
    font-size: 1.2rem;
}

.contenitore li button
{
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 1.2rem;
}

.contenitore li button:hover
{
    cursor: pointer;
}


</style>