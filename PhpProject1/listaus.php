<?php
require_once 'ylaosa.php';
require_once 'kyselyt.php';
require_once 'avusteet.php';
$otsikko = 'Juomien listaus';


varmista();
$tunnari = $sessio->kayttajan_id;
$lista = $kyselija->listaa_juomat($tunnari);

?>
