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
}



$kyselija = new Kyselyt($pdo);
?>
