<?php
// require e include servono a importare codice da altri file
// require stoppa l'esecuzione se non trova il file
// include invece lancia un warning ma prosegue nell'esecuzione del file

require 'classA.php';
include 'classB.php';

use Pacchetto\Image;
use Stanza2\Image as Image2;

$image = new Image;

$image->capture();

$imagecapture = new Image2;

$imagecapture->shoot();

// per usare una classe in un altro file lo devo importare
// se la classe non si trova nello stesso namespace del codice in cui voglio usarla devo importarla con
//! use Namespace\NomeClasse;