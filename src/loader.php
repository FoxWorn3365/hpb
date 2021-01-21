<?php

///////////////////////////////
//      ////    /////   //   //
//  //////        ////      ///
//    ////   //   //////   ////
//  //////        ////      ///
//  ////////    /////   //   //
///////////////////////////////
///////// CODICE FOX //////////
///////////////////////////////
//  Ricordiamo che il codice //
//   Fox si basa su PHP 7.2  //
///////////////////////////////
// Versione: 0.7.2           //
// PHP: 7.2 - 7.4 - 8.1      //
// Creato da Federico Cosma  //
// Licenza: CC 3.0           //
///////////////////////////////


// MKDir
function crea($nome, $permessi) {
   mkdir($nome, $permessi);
   chmod($nome, $peremssi);
}

/FWrite
function scrivi($nome, $contenuto, $formato) {
   $handle=fopen($nome, $formato);
   fwrite($handle, $contenuto);
   fclose($handle);
}

// Lettore File
function leggi($file) {
     file_get_contents($file);
}

// Funzione IF
function se($var1, $segno, $var2) {
    if ($var1 $segno $var2) {
       echo "trovato";
    } else {
       echo "non trovato";
    }
} 

// Variebile Vuota
function vuoto($var) {
    if (empty($var)) {
       echo "trovato";
    } else
       echo "non trovato";
    }
}

// Criptare un testo
function codifica($tex) {
     $criptato=base64_encode($tex);
}

// Decriptare un testo
function decodifica($tex) {
     $criptato=base64_decode($tex);
}

//Comando Shell
function shell($comando) {
     shell.exec($comando);
}

// STR Replace
function sostituisci($carattere1, $carattere2, $testo);
      str_replace($carattere1, $carattere2, $testo;
}

// Redi
function reindirizzamento($url, $tempo) {
    if (empty($tempo)) {
       header("Location: $url");
    } else {
       header("refresh:$tempo;url=$url);
    }
}
 
// CS
function trova($parola, $stringa) {
    if (stripos($stringa, $parola) !== false) {
       echo 'trovato';
    } else {
       echo 'non trovato';
    }
}   

// File Exists
function esiste($file) {
    if (file_exists($file) {
       echo "trovato";
    } else {
       echo "non trovato";
    }
}
?>
