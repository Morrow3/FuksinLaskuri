<?php
include_once 'ylaosa.php';
?>
    <body>
        <div>
            <h1>Poista tunnus</h1>
            <p>Jos haluat poistaa tunnuksesi, syötä salasanasi alla olevaan kenttään
            ja paina Submit. Et voi perua tapahtumaa.</p>
        </div>
        <form action="poistaktunnus.php" method="POST">
            <label>Salasana:</label>
            <input type="password" name="ssana"/>
            <br />
            <input type="button" name="submit" value="Lähetä"/>
        </form>
    </body>
</html>