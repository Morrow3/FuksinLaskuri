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
    
    //Tietokantakysely, jolla tunnistetaan käyttäjä.
    public function tunnista($tunnus,$ssana)
    {
        $kysely = $this->valmistele("SELECT id FROM kayttajat WHERE ktunnus = ? AND ssana = ?");
        if($kysely->execute(array($tunnus,$ssana)))
        {
            return $kysely->fetchObject();
        }
        else
        {
            
            return null;
        }
    }


    //Listaa käyttäjät id-numeron mukaan.
    public function listaa_kayttajat()
    {
        $kysely = $this->valmistele("SELECT * FROM kayttajat");
        $kysely->execute();

        echo "<table border>";
        echo "<tr>";
        echo "<th> Käyttäjätunnus </th>";
        echo "<th> Sähköpostios. </th>";
        echo "</tr>";
        while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["ktunnus"] . "</td>";
        echo "<td>" . $rivi["sposti"] . "</td>";
        echo "</tr>"; 
        }
        echo "</table>";
    }
    
    //Lisää uuden käyttäjän
    public function lisaa_kayttaja($ktunnus, $ssana, $sposti)
    {
        $kysely = $this->valmistele("INSERT INTO kayttajat (ktunnus,ssana,sposti) VALUES(:ktunnus,:ssana,:sposti)");
        $kysely->execute(array(':ktunnus'=>$ktunnus, ':ssana'=>$ssana, ':sposti'=>$sposti));
        
    }
    //Lisää uuden juoman
    public function lisaa_juoma($kayttaja_id, $tyyppi, $maara, $monelta, $missa, $hinta)
    {
        $kysely = $this->valmistele("INSERT INTO juomat (kayttaja_id, juoman_tyyppi, juoman_maara, milloin_juotu, missa_juotu, juoman_hinta)
            VALUES (:kayttaja_id,:juoman_tyyppi, :juoman_maara, :milloin_juotu, :missa_juotu, :juoman_hinta)");
        $kysely->execute(array(':kayttaja_id'=>$kayttaja_id,':juoman_tyyppi'=>$tyyppi,
            ':juoman_maara'=>$maara, ':milloin_juotu'=>$monelta , ':missa_juotu'=>$missa, ':juoman_hinta'=>$hinta ));
    }
    
    public function poista_juoma($kayttaja_id, $juoman_id)
    {
        $kysely = $this->valmistele("DELETE FROM juomat WHERE id = ? and kayttaja_id = ?");
        $kysely->execute(array($juoman_id, $kayttaja_id));
    }
            
    //Listaa juodut juomat id-numeron perusteella.
    public function listaa_juomat($tunnus)
    {
        $kysely = $this->valmistele("SELECT * FROM juomat WHERE kayttaja_id = ?");
        $kysely->execute(array($tunnus));
        
        echo "<table border>";
        echo "<tr>";
        echo "<th> käyttäjä nro. </th>";
        echo "<th> Juoman tyyppi </th>";
        echo "<th> Juoman määrä </th>";
        echo "<th> Milloin juotu </th>";
        echo "<th> Missä juotu </th>";
        echo "<th> Hinta </th>";
        echo "<th> Poista </th>";
        echo "</tr>";
        while ($rivi = $kysely->fetch()) {
            $id = $rivi['id'];
        echo "<tr>";
        echo "<td>" . $rivi["kayttaja_id"] . "</td>";
        echo "<td>" . $rivi["juoman_tyyppi"] . "</td>";
        echo "<td>" . $rivi["juoman_maara"] . "</td>";
        echo "<td>" . $rivi["milloin_juotu"] . "</td>";
        echo "<td>" . $rivi["missa_juotu"] . "</td>";
        echo "<td>" . $rivi["juoman_hinta"] . "</td>";
        echo "<td>" . "<a href='poistajuoma.php?id=".$id."'>[poista]</a></td>";
        echo "</tr>"; 
        }
        echo "</table>";
    }
}



//Luo uuden Kyselyn kts. __construct.
$kyselija = new Kyselyt($pdo);
?>
