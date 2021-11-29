<?php
// Creare una variabile con un paragrafo di testo a vostra scelta.
$xParagrafo="Una variabile con un paragrafo.Una variabile con un paragrafo.";
// Una parola da censurare viene passata dall’utente tramite parametro GET.
$wordToDelete = $_GET["word"];
// dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
$xNewParagrafo = str_replace($wordToDelete , "***" , $xParagrafo);
$lengthNewParagraph = strlen($xNewParagrafo);
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
            <!-- Stampare di nuovo il paragrafo e la sua lunghezza-->
            <p><?php 
            echo $xNewParagrafo . " Lenght = " . $lengthNewParagraph ?></p>
        </main>
        <footer></footer>
    </body>
</html>