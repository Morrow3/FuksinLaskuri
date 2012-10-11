<?php
require 'ylaosa.php';
require 'kyselyt.php';

$kysely = $kyselija->tunnista($_POST['ktunnus'],$_POST['ssana']);
if($kysely)
{
    $sessio->kayttaja_id = $kysely->id;
    header("Location:valikkosivu.php");
}
else
{
    header("Location:kirjautuminen.php");
}
?>
</body>
</html>