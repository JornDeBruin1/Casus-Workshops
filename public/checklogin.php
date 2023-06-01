<?php
session_start();
require("../src/db.php");


if(isset($_POST['verzenden']))
{
$db = new DB(); 

$sql = "SELECT * FROM admin WHERE Email='" .$_POST['mail'] . "'and Wachtwoord='" . $_POST['wachtwoord']  . "'";

 $result = $db->query($sql);
 
 if ($result->num_rows > 0)
 {
    $row = $result->fetch_array();
    $_SESSION['admin'] = $row;
    echo "Welkom ". $_SESSION["admin"]["Voornaam"] . " " . $_SESSION["admin"]["Achternaam"];
    header("location: main.php");
 }
 else
 {
    echo "FOUT";

    echo "<a href=\"login.php\"Opnieuw inloggen?</a>";
 }
}
?>