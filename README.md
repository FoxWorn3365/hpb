# HPB
Con **HPB** si potrà imparare il codice lato server in pochissimo tempo!
**HPB** è un codice in *Italiano* per siti web a lato server basato su PHP 7.4

## Installazione
Per installare **HPB** basterà installare PHP 7.4 seguento [questo tutorial](https://www.cloudbooklet.com/install-php-7-4-on-debian-10/)<br>
Ora procediamo a recuperare il file dell'installazione con `wget https://raw.githubusercontent.com/FoxWorn3365/codice-fox/main/src/install.sh`<br>
Ora eseguiamo il file con `sh install.sh`<br>
Ricordo che il file `loader.php` verrà installato nella stessa directory dove è eseguito il file `install.sh`

## Chiamare HPB ad una pagina
Per chiamare il Codice Fox in una pagina php basterà mettere
```php
<?php
// Supponiamo che siamo nella cartella /var/www/ciao e che il Codice Fox sia in /var/www/cfox/
include("../cfox/loader.php");
$lettura = function leggi("ciao");

echo "Dentro il file ciao c'è scritto $lettura";
?>
```


## Sinstassi di HPB
Codice Fox possiede una sintassi particolare sottoforma di **funzioni**
Per chiamare una funzionalità basterà fare 
```php
leggi("ciao");`
```

## Assistenza
Potrai richiedere supporto per il Codice Fox in qualsiasi momento contattando **FoxWorn3365#6736** su Discord oppure **@FoxWorn3365** su Telegram

## I Vantaggi di HPB
Codice Fox possiede tutte le funzionalità (o almeno quasi tutte) sottoforma di funzioni in italiano.
Ne ricordiamo qualcuna:
```
- leggi
- scrivi
- vuoto
- crea
```

## Consulta la nostra Wiki
Consulta ora la nostra wiki che trovi nel menu del reposity di Codice Fox
