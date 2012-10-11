<?php
require_once 'kyselyt.php';
require_once 'sessio.php';

function on_sisalla()
{
    global $sessio;
    return isset($sessio->kayttajan_id);
}

function varmista() 
{
    if (!on_sisalla())
    {
        header("Location:kirjautuminen.php");
    }
}

?>
