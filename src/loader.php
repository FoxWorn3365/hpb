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
    $output=file_get_contents($file);
}

// Variabile Vuota
function vuoto($var) {
    if (empty($var)) {
        $output="trovato";
    } else {
        $output="non trovato";
    }
}

// Criptare un testo
function codifica($tex) {
    $output=base64_encode($tex);
}

// Decriptare un testo
function decodifica($tex) {
    $output=base64_decode($tex);
}

//Comando Shell
function shell($comando) {
    shell.exec($comando);
}

// STR Replace
function sostituisci($carattere1, $carattere2, $testo) {
    $output=str_replace($carattere1, $carattere2, $testo);
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
        $output="trovato";
    } else {
        $output="non trovato";
    }
}

// Equals
function uguale($var1, $var2) {
	if ($var1 == $var2) {
	     $output="trovato";
	} else {
             $output="non trovato";
	}
}

function diverso($var1, $var2) {
	if ($var1 != $var2) {
		$output="trovato";
	} else {
		$output="non trovato";
	}
}

function pulisci() {
	$output="";
}

// Scrivi
function stampa($testo) {
	echo $testo;
}
?>
