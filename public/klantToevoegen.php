<!DOCTYPE html>
<?php 
// require_once('../src/databaseFunctions.php');
// session_start();

// if (isset($_POST['submit']))
// {
//     $voornaam = $_POST['vnaam'];
//     $achternaam = $_POST['anaam'];
//     $tussenvoegsel = $_POST['tussenvoegsel'];
//     $email = $_POST['email'];
//     $telefoon = $_POST['telefoon'];
//     $adres = $_POST['adres'];
//     $omschrijving = $_POST['omschrijving'];
//     $prijs = $_POST['prijs'];
//     $datum = $_POST['datum'];

//     $query = "INSERT INTO klant (`Mail`,`Voornaam`,`Achternaam`,`Telefoon`,`Adres`,`Omschrijving`,`Datum`,`Tussenvoegsel`,`Prijs`)
//      VALUES('$email', '$voornaam', '$achternaam', '$telefoon', '$adres', '$omschrijving', '$datum', '$tussenvoegsel', '$prijs')";

//     $query_run = db_getData($query);

//     if ($query_run) {
//         $_SESSION['status'] = "inserted succesfully";
//         header("Location: klantToevoegen.php");
//     } else {
//         $_SESSION['status'] = "data not inserted";
//         header("Location: klantToevoegen.php");
//     }
// }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klant Toevoeg Pagina</title>
</head>
<body>
    <a href="main.php">main</a>
    <a href="overzicht.php">overzicht</a>
    <a href="index.php">uitlog</a>
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
                <td><input type="text" name="adres" placeholder="Voer adres in:*"></td>
            </tr>
            <tr>
                <td><input type="text" name="omschrijving" placeholder="Voer omschrijving in:"></td>
            </tr>
            <tr>
                <td><input type="text" name="prijs" placeholder="Voer prijs in:"></td>
            </tr>
            <tr>
                <td><input type="date" name="datum"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </form>
    </table>
</body>
</html>