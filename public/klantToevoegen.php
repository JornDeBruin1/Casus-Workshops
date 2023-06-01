<!DOCTYPE html>
<?php 
require_once('../src/db.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klant Toevoeg Pagina</title>
</head>
<body>
    <table>
        <form>
            <tr>
                <td><input type="text" name="vnaam" placeholder="Voer voornaam in:" required></td>
            </tr>
            <tr>
                <td><input type="text" name="tussenvoegsel" placeholder="Voer tussenvoegsel in:" required></td>
            </tr>
            <tr>
                <td><input type="text" name="anaam" placeholder="Voer achternaam in:" required></td>
            </tr>
            <tr>
                <td><input type="text" name="email_telefoon" placeholder="Voer email of telefoonnummer in:" required></td>
            </tr>
            <tr>
                <td><input type="text" name="adres" placeholder="Voer adres in:" required></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </form>
    </table>
</body>
</html>