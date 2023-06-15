<!DOCTYPE html>
<?php 
require_once('../src/users.php');
$klanten = new Klanten();
session_start();

if (isset($_POST['submit']))
{
    $voornaam = $_POST['vnaam'];
    $achternaam = $_POST['anaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $email = $_POST['email'];
    $telefoon = $_POST['telefoon'];
    $adres = $_POST['adres'];
    $omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];
    $datum = $_POST['datum'];
    $klant = $klanten->createKlant($voornaam, $achternaam, $omschrijving, $email, $telefoon, $adres, $datum, $prijs);

    // $query = "INSERT INTO klant (`Mail`,`Naam`,`Achternaam`,`Telefoon`,`Adres`,`Omschrijving`,`Tussenvoegsel`,`Prijs`,`Datum`)
    //  VALUES('$email', '$voornaam', '$achternaam', '$telefoon', '$adres', '$omschrijving', '$tussenvoegsel', '$prijs', '$datum')";

    // $query_run = db_getData($query);

    // if ($query_run) {
    //     $_SESSION['status'] = "inserted succesfully";
    //     header("Location: klantToevoegen.php");
    // } else {
    //     $_SESSION['status'] = "data not inserted";
    //     header("Location: klantToevoegen.php");
    // }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klant Toevoeg Pagina</title>
    <link rel="stylesheet" href="./CSS/toevoeg.css">
</head>
<body>
    <div class="container">
    <a  class="boven_knop" href="overzicht.php">overzicht</a>
    <a  class="boven_knop"href="index.php">uitlog</a>
    <table>
        <form action="" method="post">
            <tr>
                <td><input type="text" name="vnaam" placeholder="Voer voornaam in:*" required></td>
            </tr>
            <tr>
                <td><input type="text" name="tussenvoegsel" placeholder="Voer tussenvoegsel in:"></td>
            </tr>
            <tr>
                <td><input type="text" name="anaam" placeholder="Voer achternaam in:*" required></td>
            </tr>
            <tr>
                <td><input type="text" name="email" placeholder="Voer email in:*" required></td>
            </tr>
            <tr>
                <td><input type="text" name="telefoon" placeholder="Voer telefoonnummer in:"></td>
            </tr>
            <tr>
                <td><input type="text" name="adres" placeholder="Voer adres in:*" required></td>
            </tr>
            <tr>
                <td><input type="text" name="omschrijving" placeholder="Voer omschrijving in:*" required></td>
            </tr>
            <tr>
                <td><input type="text" name="prijs" placeholder="Voer prijs in:*" required></td>
            </tr>
            <tr>
                <td><input type="date" name="datum" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </form>
    </table>
</div>
</body>
</html>