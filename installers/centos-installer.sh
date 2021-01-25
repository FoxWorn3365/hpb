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
echo "Benvenuto nell'installer di HPB per CentOs! Per continuare l'installazione completa (PHP-7.4) premere [y], invece usa [Ctrl + C] per annullare l'installazione completa"
echo ""
echo "Se hai già installato PHP 7.4 o superiori usa l'installer normale che trovi su https://github.com/FoxWorn3365/hpb/blob/main/src/install.sh"
echo ""
echo "Iniziare l'installazione? [y/ctrl + c]"
read RISPOSTA

sudo yum -y install https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
sudo yum -y install https://rpms.remirepo.net/enterprise/remi-release-7.rpm
sudo yum -y install yum-utils
sudo yum-config-manager --enable remi-php74
sudo yum install php  php-cli php-fpm php-mysqlnd php-zip php-devel php-gd php-mcrypt php-mbstring php-curl php-xml php-pear php-bcmath php-json
wget https://raw.githubusercontent.com/FoxWorn3365/hpb/main/src/loader.php

echo "Fatto! HPB è stato installato correttamente su questa cartella insieme a PHP-7.4"
