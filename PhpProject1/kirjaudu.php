<?php
require 'ylaosa.php';
require 'kyselyt.php';

$kysely = $kyselija->tunnista($_POST['ktunnus'],$_POST['ssana']);
if($kysely)
{
    $sessio->kayttajan_id = $kysely->id;
    header("Location:valikkosivu.php?kayttaja=" . $sessio->kayttajan_id);
}
else
{
    header("Location:kirjautuminen.php");
}
?>
</body>
</html>