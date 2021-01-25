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
echo "Benvenuto nell'installer di HPB per Debian! Per continuare l'installazione completa (PHP-7.4) premere [y], invece usa [Ctrl + C] per annullare l'installazione completa"
echo ""
echo "Se hai già installato PHP 7.4 o superiori usa l'installer normale che trovi su https://github.com/FoxWorn3365/hpb/blob/main/src/install.sh"
echo ""
echo "Iniziare l'installazione? [y/ctrl + c]"
read RISPOSTA

sudo apt update
sudo apt upgrade -y && sudo reboot
sudo apt -y install lsb-release apt-transport-https ca-certificates 
sudo wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/php.list
sudo apt update
sudo apt -y install php7.4
wget https://raw.githubusercontent.com/FoxWorn3365/hpb/main/src/loader.php

echo "Fatto! HPB è stato installato correttamente su questa cartella insieme a PHP-7.4"
