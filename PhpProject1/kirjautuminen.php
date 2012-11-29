<?php
$otsikko = 'Kirjautuminen';
include "ylaosa.php";
require "kyselyt.php";
?>
   <body>
        <div>
            <h1>Fuksin Juomalaskuri</h1>
            <a href="rekisteroituminen.php">Luo uusi tunnus</a>
            <h2>Kirjautuminen</h2>
        </div>
        <form action="kirjaudu.php" method="POST">
            <label for="ktunnus">Käyttäjänimi:</label> 
            <input type="text" name="ktunnus" id="ktunnus"/>
            <br>
            <label for="ssana">Salasana:</label>
            <input type="password" name ="ssana" id="ssana"/>
            <br>
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>
