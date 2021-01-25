#!/bin/sh

echo "///////////////////////////////////
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
///////////////////////////////////"

echo ""
echo "Benvenuto nell'installer di HPB per Ubuntu! Per continuare l'installazione completa (PHP-7.4) premere [y], invece usa [Ctrl + C] per annullare l'installazione completa"
echo ""
echo "Se hai già installato PHP 7.4 o superiori usa l'installer normale che trovi su https://github.com/FoxWorn3365/hpb/blob/main/src/install.sh"
echo ""
echo "Iniziare l'installazione? [y/ctrl + c]"
read RISPOSTA


sudo apt-get update
sudo apt -y install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update

sudo apt -y install php7.4

wget https://raw.githubusercontent.com/FoxWorn3365/hpb/main/src/loader.php


echo "Fatto! HPB è stato installato correttamente su questa cartella insieme a PHP-7.4"
