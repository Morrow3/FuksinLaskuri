<?php
require_once 'avusteet.php';
require_once 'kyselyt.php';

varmista();
//Laitetaan tämänhetkinen aika date-muuttujaan.
$date = date('d.m.Y h:i:s', time());
//Asetetaan muuttujat jotta voidaan korvata pilkku hinnassa ($hintsu)
$korvattava  = ',';
$korvaava = '.';
$hintsu = $_POST['hinta'];
//Laitetaan lopputulos alla olevaan muuttujaan.
$oikea_formaatti = str_replace($korvattava, $korvaava, $hintsu);

//Annetaan kyselylle parametrit jotka on saatu uusijuoma.php:n lomakkeesta.
$kysely = $kyselija->lisaa_juoma($sessio->kayttajan_id,$_POST['tyyppi'],$_POST['maara'],$date,$_POST['missa'],
            $oikea_formaatti );
//siirrytään valikkosivulle.
header("Location:valikkosivu.php");
?>
