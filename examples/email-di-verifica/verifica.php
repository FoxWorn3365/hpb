<?php
include("loader.php");

sessione();

random(1001, 9999);

$email=$_POST["email"];

$stringa="Il tuo codice di verifica &egrave; $output";

$codice=$output;

pulisci();

$oggetto="Verifica della Email";

// A: $email, DA: test@gmail.com, OGGETTO: $oggetto, TESTO: $testo
email($email, "test@gmail.com", $oggetto, $stringa);

sessione_definisci("codice", $codice);

?>
<!DOCTYPE html>
<html>
 <header>
  <title>Verifica la tua email con HPB</title>
 </header>
 <body>
  <br><br><br>
  <h1>Ti abbiamo inviato una email</h1>
  <br>
  <h3>Per verificare la tua email inserisci qui sotto il codice a 4 cifre che ti abbiamo inviato</h3>
  <h6>Ricorda di controllare lo SPAM</h6>
  <br>
   <form method="POST" action="controllo.php">
         Inserisci il codice:<br>
         <input type="number" namr="codice"><br><br>
         <input type="submit" value="Verifica!">
   </form>
 </body>
</html>
