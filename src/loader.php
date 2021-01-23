<?php

///////////////////////////////////
//   ///   ////      ///      // //
//   ///   ////  //   //  //   ////
//   ///   ////      ///      /////
//         ////   //////    ///////
//   ///   ////   //////      /////
//   ///   ////   //////  //   ////
//   ///   ////   //////      /////
///////////////////////////////////
// >Hypertext Preprocessor Based //
///////////////////////////////////
//          Codice HPB           //
///////////////////////////////////
// Creato da: Federico Cosma     //
// Licenza: CC BY 3.0            //
// Loader: PHP 7.4               //
// Versione: 0.7.1               //
///////////////////////////////////

// MKDir
function crea($nome, $permessi) {
   mkdir($nome, $permessi);
   chmod($nome, $permessi);
}

// FWrite
function scrivi($nome, $contenuto, $formato) {
   $handle=fopen($nome, $formato);
   fwrite($handle, $contenuto);
   fclose($handle);
}

// Lettore File
function leggi($file) {
     file_get_contents($file);
}

// Variabile Vuota
function vuoto($var) {
    if (empty($var)) {
       echo "trovato";
    } else {
       echo "non trovato";
    }
}

// Criptare un testo
function codifica($tex) {
     echo base64_encode($tex);
}

// Decriptare un testo
function decodifica($tex) {
     echo base64_decode($tex);
}

//Comando Shell
function shell($comando) {
     shell.exec($comando);
}

// STR Replace
function sostituisci($carattere1, $carattere2, $testo) {
      str_replace($carattere1, $carattere2, $testo);
}

// Redi
function reindirizzamento($url, $tempo) {
   if (empty($tempo)) {
      header("Location: $url");
   } else {
      header("refresh:$tempo;url=$url");
   }
}


// File Exists
function esiste($file) {
    if (file_exists($file)) {
       echo "trovato";
    } else {
       echo "non trovato";
    }
}

// Post
function form($nome) {
    echo $_POST[$nome];
}

// Get
function url($nome) {
    echo $_GET[$nome];
}
?>
