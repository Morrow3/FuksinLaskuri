<?php
require_once 'avusteet.php';
require_once 'kyselyt.php';

//varmista();

$kysely = $kyselija->lisaa_juoma($sessio->kayttajan_id,$_POST['tyyppi'],$_POST['maara'],$_POST['missa'],
            $_POST['hinta']);

header("Location:valikkosivu.php");
?>
