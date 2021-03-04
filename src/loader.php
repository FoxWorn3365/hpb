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

// Plugin Loader
function plugin($type, $name) {
	if ($type == "carica") {
		copy("plugins/$name.hpb", "plugins/.temp_$name.php");
		include("plugins/.temp_$name.php");
	} elseif ($type == "attiva") {
		include("plugins/.temp_$name.php");
	} else {
		unlink("plugins/.temp_$name.php");
		die();
	}
}

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

// Uguale
function uguale($var1, $var2) {
	if ($var1 == $var2) {
	     $output="trovato";
	} else {
             $output="non trovato";
	}
}

// Diverso
function diverso($var1, $var2) {
	if ($var1 != $var2) {
		$output="trovato";
	} else {
		$output="non trovato";
	}
}
// Pulisci
function pulisci() {
	$output="";
}

// Scrivi
function stampa($testo) {
	echo $testo;
}

// Random 
function random($min, $max) {
	$output=rand($min, $max);
}

// Invia una Email
function email($to, $from, $subject, $message) {
	       $sender = $from;
               $recipient = $to;
               $message = $curl;
               $headers = 'From:' . $sender;

               mail($recipient, $subject, $message, $headers);
}

// Data
function data() {
	$output=date("d/m/Y");
}

// >> Sessioni <<

// Startare le sessioni
function sessione() {
	session_start();
}

// Definire una sessione
function sessione_definisci($nome, $value) {
	$_SESSION[$nome]=$value;
}

// Recuperare una sessione
function sessione_recupera($nome) {
	$output=$_SESSION["nome"];
}

// Distruggi una sessione
function sessione_distruggi() {
	session_destroy();
}

// IP Found
function ip() {
	$output=$_SERVER["REMOTE_ADDR"];
}

// Stop
function stop() {
	die("Errore");
}

// Var Dump
function mostra_array($array);
        var_dump($array);
}

// Json Decoder
function json_decodificatore($json) {
	$output=json_decode($json);
}

// Json Encoder
function json_codificatore($array) {
	$output=json_encode($vettore);
}
?>
