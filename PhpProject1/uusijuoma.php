<?php
include_once 'ylaosa.php';
require_once 'avusteet.php';
$otsikko="Lisää juoma";
varmista();

?>
   <body>
        <div>
            <h1>Lisää juoma</h1>
            <a href="valikkosivu.php">Palaa takaisin</a>
            <p>Voit lisätä uuden juoman täyttämällä alla olevan lomakkeen.
            Ainoa pakollinen tieto on juodun juoman laatu.</p>
        </div>
        <form action="lisaajuoma.php" method="POST">
            <label>Juoman tyyppi:</label>
            <input type="radio" name="tyyppi" value="shotti"/>Shotti
            <input type="radio" name="tyyppi" value ="tuoppi"/>Tuoppi
            <input type="radio" name="tyyppi" value="viini"/>Viini
            <input type="radio" name="tyyppi" value="likööri"/>Likööri tai väkevä viini<br />
            
            <label>Missä:</label>
            <input type="text" name="missa"/>
            <br />

            <label>Hinta:</label>
            <input type="text" name="hinta"/>
            <br />
            
            <label>Määrä:</label>
            <input type="number" name="maara"/>
            <br />
            
            <input type="submit" name="Submit"/>
            
        </form>
    </body>
</html>
