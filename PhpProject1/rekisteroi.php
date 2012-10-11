
<?php
require 'kyselyt.php';

$tunnus = pg_escape_string($_POST['ktunnus']);
$salasana = pg_escape_string($_POST['ssana']);
$sahoposti = pg_escape_string($_POST['email']);

$kyselija->lisaa_kayttaja($tunnus,$salasana,$sahoposti);
header("Location:valikkosivu.php");
?>
