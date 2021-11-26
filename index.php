<?php
// Creare una variabile con un paragrafo di testo a vostra scelta.
$xParagrafo="Una variabile con un paragrafo.";
// Una parola da censurare viene passata dall’utente tramite parametro GET.
$name = $GET["variabile"];
?>


<!DOCTYPE html>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
<title>PHP</title>
    </head>
    <body>
        <header></header>
        <main>
            <!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
            <p><?php echo $xParagrafo . " Length = " .strlen($xParagrafo)?></p>
            <!-- Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
            <p><?php echo substr_replace($GET["variabile"] , "***", 0) . " Length = " . strlen(substr_replace($GET["variabile"] , "***", 0)) ?></p>
        </main>
        <footer></footer>
    </body>
</html>