
<?php
require 'kyselyt.php';


$kyselija->lisaa_kayttaja($_POST['ktunnus'],$_POST['ssana'],$_POST['sposti']);
header("Location:valikkosivu.php");
?>
