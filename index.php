<?php
// Creare una variabile con un paragrafo di testo a vostra scelta.
$xParagrafo="Una variabile con un paragrafo.";
// Una parola da censurare viene passata dall’utente tramite parametro GET.
$NAME = $_GET['NAME'];


?>


<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <header></header>
        <main>
            <!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
            <p><?php echo $xParagrafo . " Length = " .strlen($xParagrafo)?></p>
            <!-- Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
           
        </main>
        <footer></footer>
    </body>
</html>