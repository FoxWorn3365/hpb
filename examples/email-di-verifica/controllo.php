<?php
include("loader.php");

sessione();

sessione_recupera("codice");

$codice=$output;

pulisci();

$code=$_POST["codice"];

uguale($code, $codice);

$risposta=$output;

pulisci();

if ($risposta == "trovato") {
   // Dopo questo commento bisogna inserire quello che bisogna fare se la funzione uguale è vera
   stampa("");
} else {
   // Dopo questo commento bisogna inserire quello che bisogna fare se la funzione uguale è falsa
   reindirizzamento("verifica.php?errore=codice");
   stop();
}

ip();

$ip=$output;

pulisci();

data();

$data=$output;

pulisci();

$stringa="Utente (IP): $ip  Verificato da: HPB System il: $data";
scrivi("verificati.txt", $stringa, "a+");

reindirizzamento("verificato.php");

?>
