<?php
require_once('../src/db.php');
require_once('../src/users.php');
session_start();
$klant = new Klanten();
$db = new DB();

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $klant = $klanten->getKlantById($id);

    if ($klant != null) {
        $voornaam = $_POST['vnaam'];
        $achternaam = $_POST['anaam'];
        $tussenvoegsel = $_POST['tussenvoegsel'];
        $email = $_POST['email'];
        $telefoon = $_POST['telefoon'];
        $adres = $_POST['adres'];
        $omschrijving = $_POST['omschrijving'];
        $prijs = $_POST['prijs'];
        $datum = $_POST['datum'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="./CSS/overzichtCss.css" rel="stylesheet">
    <title>overzicht</title>
    <link rel="stylesheet" href="./CSS/overzichtStyle.css">
</head>

<body>

    <div class="container">

        <a class="boven_knop" href="index.php"> uitlog</a>
        <a class="boven_knop" href="klantToevoegen.php">klant formulier </a>

        <div class="row">
            <div class="col">
                <div class="card mt-6">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Overzicht van werk </h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd text-center">
                            <tr class="bg-dark text-white">
                                <td>Id</td>
                                <td>Voornaam</td>
                                <td>achternaam</td>
                                <td>Omschrijving</td>
                                <td>mail</td>
                                <td>telefoon nummer</td>
                                <td>adres</td>
                                <td>datum</td>
                                <td>prijs</td>

                            </tr>
                            <tr>
                                <?php $allKlanten = $klant->getAllKlanten();
                                foreach ($allKlanten as $klanten) { ?>

                                    <td><?php echo $klanten['id']; ?> </td>
                                    <td><?php echo $klanten['Naam']; ?> </td>
                                    <td><?php echo $klanten['Achternaam'] ?></td>
                                    <td><?php echo $klanten['Omschrijving']; ?> </td>
                                    <td><?php echo $klanten['Mail']; ?> </td>
                                    <td><?php echo $klanten['Telefoon']; ?></td>
                                    <td><?php echo $klanten['Adres']; ?></td>
                                    <td><?php echo $klanten['Datum']; ?></td>
                                    <td><?php echo $klanten['Prijs']; ?></td>
                                    <td><a href=" klantToevoegen.php?edit=<?php echo $klanten['id']; ?>" class="edit_btn">
                                            edit</a></td>
                                    <td>
                                        <a href="server.php?del=<?php echo $klanten['id']; ?>" class="del_btn">delete</a>
                                    </td>
                            </tr>
                        <?php } ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>