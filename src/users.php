<?php
require_once('../src/db.php');

class Klanten
{
    private $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function getAllKlanten()
    {
        $query = "SELECT * FROM klant;";
        $result = $this->db->query($query);
        $klant = array();
        while ($row = $result->fetch_assoc()) {
            $klant[] = $row;
        }
        return $klant;
    }

    public function getKlantById($id)
    {
        $query = "SELECT * FROM `klant` WHERE `id`='$id'";
        $result = $this->db->query($query);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public function getKlantByEmail($email)
    {
        $query = "SELECT * FROM `klant` WHERE `email`='$email'";
        $result = $this->db->query($query);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public function createKlant($voornaam, $achternaam, $omschrijving, $email, $telefoon, $adres, $datum, $prijs)
    {
        $query = "INSERT INTO klant (`Mail`,`Naam`,`Achternaam`,`Telefoon`,`Adres`,`Omschrijving`,`Prijs`,`Datum`)
     VALUES('$email', '$voornaam', '$achternaam', '$telefoon', '$adres', '$omschrijving', '$prijs', '$datum')";
        $this->db->query($query);
    }

    public function updateKlant($id, $voornaam, $achternaam, $omschrijving, $email, $telefoon, $adres, $datum, $prijs)
    {
        $query = "UPDATE `klant` SET `Naam`='$voornaam',`Achternaam`='$achternaam',`Mail`='$email',`Telefoon`='$telefoon', `Adres`='$adres', `Omschrijving` = '$omschrijving', `Prijs` = '$prijs', `Datum` = '$datum'  WHERE `id` = $id";
        $this->db->query($query);
    }

    public function deleteKlant($id)
    {
        $query = "DELETE FROM `klant` WHERE `id`=$id;";
        $this->db->query($query);
    }
}
