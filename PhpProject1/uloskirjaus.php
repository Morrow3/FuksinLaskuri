<?php
require_once 'avusteet.php';

unset($sessio->kayttajan_id);
header("Location:kirjautuminen.php");
?>
