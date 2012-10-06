<?php
include_once 'ylaosa.php';
?>

    <body>
        <div>
            <h1>Rekisteröinti</h1>
            <p>Syötä alla oleviin kenttiin tietosi, niin sinulle luodaan
            oikeudet käyttää ohjelmaa...</p>
        </div>
        <form action="rekisteroi.php" method="POST">
            <label for="ktunnus">Käyttäjätunnus:</label>
            <input type="text" name="ktunnus" id="ktunnus"/>
            <br>
            <label for="ssana">Salasana:</label>
            <input type="password" name ="ssana" id="ssana"/>
            <br>
            <label for="email">Sähköposti:</label>
            <input type="text" name="email" id="email"/>
            <br>
            <input type="submit" name="Submit" value="Submit"/>
        </form>
        <a href="valikkosivu.php">Väliaikainen linkki..</a>
    </body>
</html>