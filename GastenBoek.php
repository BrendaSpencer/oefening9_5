<?php
//GastenBoek.php
require_once('Bericht.php');
require_once('DBConfig.php');

class GastenBoek {
    

    public function getBerichten() : array {
        $berichten = array();

        $dbh = new PDO(DBConfig::$DB_Conn,DBConfig::$DB_User, DBConfig::$DB_Password);

        $sql = "select * from gastenboek order by date desc";

        $resultSet = $dbh->query($sql);

        foreach($resultSet as $rij){
            $bericht = new Bericht($rij['id'],$rij['auteur'], $rij['boodschap'],$rij['datum']);
            array_push($berichten, $bericht);
        }
        $dbh = null;
        return $berichten;
    }

    public function nieuwBericht(string $auteur,string $bericht){
        $dbh = new PDO(DBConfig::$DB_Conn, DBConfig::$DB_User,DBConfig::$DB_Password);
        $sql = "insert into gastenboek(auteur, boodschap, datum) values (:auteur , :boodschap, :datum)";
        $stmt = $dbh->prepare($sql);
        $datum = date("Y-m-d H:i:s");
        $stmt->bindValue(":auteur", $auteur);
        $stmt->bindValue(":boodschap", $bericht);
        $stmt->bindValue(":datum", $datum);
        $stmt->execute();

    }

}