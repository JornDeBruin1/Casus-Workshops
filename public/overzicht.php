<?php
require_once('../src/db.php');
require_once('../src/users.php');
// $query = "SELECT *  FROM  klant";
$klant = new Klanten();
$db = new DB();
// $result = $db->query($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="./CSS/overzichtCss.css" rel="stylesheet">
    <title>overzicht</title>

</head>

<body>

    <div class="container">

        <a href="index.php"> uitlog</a>
        <a href="klantToevoegen.php">klanten formulier </a>

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
                                foreach ($allKlanten as $Klanten) { ?>

                                <td><?php echo $Klanten['id']; ?> </td>
                                <td><?php echo $Klanten['Naam']; ?> </td>
                                <td><?php echo $Klanten['Achternaam'] ?></td>
                                <td><?php echo $Klanten['Omschrijving']; ?> </td>
                                <td><?php echo $Klanten['Mail']; ?> </td>
                                <td><?php echo $Klanten['Telefoon']; ?></td>
                                <td><?php echo $Klanten['Adres']; ?></td>
                                <td><?php echo $Klanten['Datum']; ?></td>
                                <td><?php echo $Klanten['Prijs']; ?></td>

                                <td><a href="klantToevoegen.php?edit=<?php echo $klant['id']; ?>"
                                        class="edit_btn">edit</a></td>
                                <td><a href="server.php?del=<?php echo $klant['id'];  ?>" class="del_btn">Delete</a>
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