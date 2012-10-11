<?php
$otsikko = 'Haku kannasta..';
require 'ylaosa.php';
require 'kyselyt.php';

?>
<body>
<?php
    echo '<p>Sivu listaa käyttäjät. Admineille tarkoitettu.</p>';
    $kyselija->listaa_kayttajat();
?>
</body>
</html>