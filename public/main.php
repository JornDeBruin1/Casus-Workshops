 
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="./css/main.css">
</head>
<body>   
<div class="container">
<div class="welkom">
<?php
    session_start();
      if (isset($_POST['verzenden'])) 
      {   
          $name = $_POST['mail'];  
           $password = $_POST['wachtwoord'];  
            $db->query("INSERT INTO info (name, address) VALUES ('$name', '$address')");    
            $_SESSION['message'] = "Address saved";    
            header('location: index.php');  
      } 
?> 

</div>
      <table>
            <tr>
                  <td>
      <form action="overzicht.php">
            <input type="submit" name="overzicht" value="Overzicht">
                  </td>
      </tr>
      </form>
            <tr>
                  <td>
      <form action="klantToevoegen.php">
            <input type="submit" name="klant" value="Klant toevoegen">
                        </td>
            </tr>
      </form>
            <tr>
                  <td>
      <form action="index.php">
            <input type="submit" name="login" value="uitloggen">
                  </td>
            </tr>
      </form>
</table>
</div>
</body>
</html>
