<?php
$otsikko = 'Juomien listaus';
require_once 'ylaosa.php';
require_once 'kyselyt.php';
require_once 'avusteet.php';


echo "<a href='valikkosivu.php'>Palaa takaisin</a>";
varmista();
$tunnari = $sessio->kayttajan_id;
$lista = $kyselija->listaa_juomat($tunnari);

?>
</body>
</html>