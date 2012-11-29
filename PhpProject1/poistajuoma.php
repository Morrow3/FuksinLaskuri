<?php
require_once 'avusteet.php';
require_once 'kyselyt.php';

varmista();

    try
    {
    $kysely = $kyselija->poista_juoma($sessio->kayttajan_id, $_GET['id']);
    header("Location:listaus.php");
    }
 catch (Exception $x)
 {
     echo $x->getMessage();
 }
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
