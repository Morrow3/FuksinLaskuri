<?php
include_once 'ylaosa.php';
require_once 'avusteet.php';
$otsikko = 'Valikkosivu';

varmista();
?>

   <body>
        <div>
            <h1>Valikko</h1>
            <a href="uloskirjaus.php">Kirjaudu ulos</a>
            <h2>Valitse toiminto:</h2>
        </div>
        <p>Uuden juoman lisääminen:</p>
        <a href="uusijuoma.php">Paina tästä!</a>
        <br>
        <p>Juomien listaaminen:</p>
        <a href="listaus.php">Paina tästä!</a>
    </body>
</html>
