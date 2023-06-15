<!DOCTYPE html>
<?php 
require_once('../src/users.php');
require_once('../public/server.php');
$klanten = new Klanten();
// session_start();

$voornaam = '';
$achternaam = '';
$tussenvoegsel = '';
$omschrijving = '';
$email = '';
$telefoon = '';
$adres = '';
$datum = '';
$prijs = '';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;

    $klant = $klanten->getKlantById($id);

    if ($klant != null) {
        $voornaam = $klant['Naam'];
        $achternaam = $klant['Achternaam'];
        $tussenvoegsel = $klant['Tussenvoegsel'];
        $email = $klant['Mail'];
        $telefoon = $klant['Telefoon'];
        $adres = $klant['Adres'];
        $omschrijving = $klant['Omschrijving'];
        $prijs = $klant['Prijs'];
        $datum = $klant['Datum'];

    }
}
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
    header('location: overzicht.php');

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
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <tr>
                    <td><input type="text" name="vnaam" placeholder="Voer voornaam in:" required
                            value="<?php echo $voornaam; ?>">
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="tussenvoegsel" placeholder="Voer tussenvoegsel in:"
                            value="<?php echo $tussenvoegsel ?>"></td>
                </tr>
                <tr>
                    <td><input type=" text" name="anaam" placeholder="Voer achternaam in:" required
                            value="<?php echo $achternaam ?>"></td>
                </tr>
                <tr>
                    <td><input type=" text" name="email" placeholder="Voer email in:" required
                            value="<?php echo $email ?>"></td>
                </tr>
                <tr>
                    <td><input type=" text" name="telefoon" placeholder="Voer telefoonnummer in:"
                            value="<?php echo $telefoon ?>">
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="adres" placeholder="Voer adres in:" required
                            value="<?php echo $adres ?>">
                    </td>
                </tr>
                <tr>
                    <td><input type=" text" name="omschrijving" placeholder="Voer omschrijving in:" required
                            value="<?php echo $omschrijving ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="prijs" placeholder="Voer prijs in:" required
                            value="<?php echo $prijs ?>">
                    </td>
                </tr>
                <tr>
                    <td><input type="date" name="datum" required value="<?php echo $datum ?>"></td>
                </tr>
            <tr>
                <!-- <td><input type="submit" name="submit" value="submit"></td> -->
                <?php if (isset($update) && $update) : ?>
                    <button class=" btn" type="submit" name="update" style="background: #556B2F;">Update</button>
                    <?php else : ?>
                    <button class="btn" type="submit" name="submit">Opslaan</button>
                    <?php header('location: overzicht.php'); ?>
                    <?php endif ?>
            </tr>
        </form>
    </table>
</div>
</body>
</html>