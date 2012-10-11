<?php
require_once 'ylaosa.php';
require_once 'kyselyt.php';
require_once 'avusteet.php';


//$sessio->kayttajan_id = $_GET['kayttaja'];
varmista();
$tunnari = $_GET['kayttaja'];
$lista = $kyselija->listaa_juomat($tunnari);

?>
