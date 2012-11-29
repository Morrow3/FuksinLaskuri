<?php
require 'ylaosa.php';
require_once 'avusteet.php';
require_once 'kyselyt.php';


$kysely = $kyselija->tunnista($_POST['ktunnus'],$_POST['ssana']);
if($kysely)
{
    $sessio->kayttajan_id = $kysely->id;
    header("Location:valikkosivu.php");
}
else
{
    die("Väärä salasana tai käyttäjätunnus.".
            "<br>"."<a href='kirjautuminen.php'>Takaisin</a>");

}
?>
</body>
</html>