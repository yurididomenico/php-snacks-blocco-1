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

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $eta = $_GET['eta'];
    $controllo = [false, false , true];

    // controllo nome
    if(strlen($_GET['nome']) > 3)
    {
        echo "Nome: OK ";
        $controllo[0] = true;
    }
    else
    {
        echo "Nome: KO ";
        $controllo[0] = false;
    }

    //controllo mail
    if(strpos($_GET['email'], "@") != false && strpos($_GET['email'], ".") != false)
    {
        echo "Email: OK ";
        $controllo[1] = true;
    }
    else
    {
        echo "Email: KO ";
        $controllo[1] = false;
    }

    //controllo età
    if(is_numeric($_GET['eta']))
    {
        echo "Età: OK ";
        $controllo[2] = true;
    }
    else
    {
        echo "Età: KO ";
        $controllo[2] = false;
    }

    
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
                <li><input type="text" placeholder="Nome..." name="nome"></li>
                <li><input type="text" placeholder="Email..." name="email"></li>
                <li><input type="text" placeholder="Età..." name="eta"></li>
                <li><button>Invia</button></li>
            </ul>
            <!-- <input type="email">
            <input type="number"> -->
        </form>

        <hr>

        <div class="risultato">
            <?php
            
                if($controllo[0] == true && $controllo[1] == true && $controllo[2] == true)
                {
                    echo "Accesso Consentito!";
                }
                else
                {
                    echo "Accesso Negato!";
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

.contenitore li
{
    padding: 10px 0;
}

.contenitore li input,
.contenitore .risultato
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

.contenitore hr
{
    margin: 20px 0;
}

.contenitore .risultato
{
    background-color: white;
    display: inline-block;
    border: 2px solid black;

}


</style>