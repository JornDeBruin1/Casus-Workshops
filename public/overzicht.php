<?php
//overzicht pagina casus
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>overzicht</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Overzicht van werk </h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd text-center">
                            <tr class="bg-dark text-white">
                                <td>Id</td>
                                <td>Users id</td>
                                <td>Soort</td>
                                <td>Datum</td>
                            </tr>
                            <!-- <tr>
                                <?php while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <td><?php echo $row['id']; ?> </td>
                                <td><?php echo $row['users']; ?> </td>
                                <td><?php echo $row['Soort']; ?> </td>
                                <td><?php echo $row['Datum']; ?> </td>

                            </tr> -->
                            <?php } ?>





                        </table>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>