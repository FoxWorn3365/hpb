#!/bin/sh

echo "///////////////////////////////
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
///////////////////////////////"

echo ""
echo "Programma di Installazione di Codice Fox"
echo ""
echo "Proseguento l'installazione si dovrebbe scaricare il file di Codice Fox nella directory dove Ã¨ presente questo script. Per terminare l'installazione usare [n] oppure [Ctrl + C]"
echo "Bene, proseguire con l'installazione? [Y/n]"
read RISPOSTA

wget https://raw.githubusercontent.com/FoxWorn3365/codice-fox/main/src/loader.php

echo ""
echo "----------"
echo ">>> Grazie per aver installato Codice Fox! <<<"
echo "Wiki: https://github.com/FoxWorn3365/codice-fox/wiki"
echo "----------"
