<?php
include_once"ylaosa.php";
?>
   <body>
        <div>
            <h1>Fuksin Juomalaskuri</h1>
            <a href="rekisterointi.html">Luo uusi tunnus</a>
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
        <a href="valikkosivu.php">Tästä valikkosivulle... (väliaikainen linkki)</a>
        
    </body>
</html>
