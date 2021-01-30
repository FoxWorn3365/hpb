<?php
include("loader.php");
?>
<!DOCTYPE html>
<html>
 <header>
  <title>HPB - Test</title>
 </header>
 <body>
  <br><br><br>
  <h1>HPB - Invia e verifica un codice tramite Email</h1>
  <br><br>
  <br>
   <form method="POST" action="verifica.php">
        Inserisci la tua Email:<br>
        <input type="text" name="email"><br><br>
        <input type="submit" value="Verifica!">
   </form>
 </body>
</html>
