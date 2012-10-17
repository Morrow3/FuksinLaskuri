<?php
require 'yhteys.php';

class Kyselyt 
{
    private $_pdo;
    
    public function __construct($pdo) 
    {
        $this->_pdo = $pdo;
    }

    private function valmistele($dblause)
    {
        return $this->_pdo->prepare($dblause);
    }
    
    public function tunnista($tunnus,$ssana)
    {
        $kysely = $this->valmistele("SELECT id FROM kayttajat WHERE ktunnus = ? AND ssana = ?");
        if($kysely->execute(array($tunnus,$ssana)))
        {
            return $kysely->fetchObject();
        }
        else
        {
            echo 'VIRHE!';
            return null;
        }
    }


    public function listaa_kayttajat()
    {
        $kysely = $this->valmistele("SELECT * FROM kayttajat");
        $kysely->execute();

        echo "<table border>";
        while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["ktunnus"] . "</td>";
        echo "<td>" . $rivi["sposti"] . "</td>";
        echo "</tr>"; 
        }
        echo "</table>";
    }
    
    public function lisaa_kayttaja($ktunnus, $ssana, $sposti)
    {
        $kysely = $this->valmistele("INSERT INTO kayttajat (ktunnus,ssana,sposti) VALUES(:ktunnus,:ssana,:sposti)");
        $kysely->execute(array(':ktunnus'=>$ktunnus, ':ssana'=>$ssana, ':sposti'=>$sposti));
        
    }
    
    public function lisaa_juoma($kayttaja_id, $tyyppi, $maara, $missa, $hinta)
    {
        $kysely = $this->valmistele("INSERT INTO juomat (kayttaja_id, juoman_tyyppi, juoman_maara, missa_juotu, juoman_hinta)
            VALUES (:kayttaja_id,:juoman_tyyppi,:juoman_maara, :missa_juotu, :juoman_hinta)");
        $kysely->execute(array(':kayttaja_id'=>$kayttaja_id,':juoman_tyyppi'=>$tyyppi,
            ':juoman_maara'=>$maara, ':missa_juotu'=>$missa, ':juoman_hinta'=>$hinta ));
    }
    
    public function listaa_juomat($tunnus)
    {
        $kysely = $this->valmistele("SELECT * FROM juomat WHERE kayttaja_id = ?");
        $kysely->execute(array($tunnus));
 
        echo "<table border>";
        while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["kayttaja_id"] . "</td>";
        echo "<td>" . $rivi["juoman_tyyppi"] . "</td>";
        echo "<td>" . $rivi["juoman_maara"] . "</td>";
        echo "<td>" . $rivi["missa_juotu"] . "</td>";
        echo "<td>" . $rivi["juoman_hinta"] . "</td>";
        echo "</tr>"; 
        }
        echo "</table>";
    }
}




$kyselija = new Kyselyt($pdo);
?>
