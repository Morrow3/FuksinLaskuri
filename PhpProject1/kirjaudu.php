<?php
require 'ylaosa.php';
require 'kyselyt.php';

$kysely = $kyselija->tunnista($_POST['ktunnus'],$_POST['ssana']);
if($kysely)
{
    header("Location:valikkosivu.php");
}
else
{
    header("Location:kirjautuminen.php");
}
?>
</body>
</html>