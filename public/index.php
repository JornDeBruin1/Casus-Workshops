<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pagina</title>
    <link rel="stylesheet" href="./CSS/loginStyle.css">
    <meta name="description" content="Pagina">
</head>
<body>
    <div class="container">
    <form method="post" action="checklogin.php">
       
        <h1>Login</h1>
        <table>
        <tr>
        <td>
            <label for="mail">E-Mail</label>
        </td>
        <td>
            <input type="email" name="mail" placeholder="naam@mail.com" required>
        </td>
        </tr>
        <tr>
            <td> 
                <label for="wachtwoord">Wachtwoord</label>
            </td>
             <td> 
            <input type="password" class="password" name="wachtwoord" placeholder="Wachtwoord" required>
            </td>
      </tr>
        <br>
        <tr>
            <td>
        <input type="submit" name="verzenden" value="verzenden">
            </td>
        </tr>
        </table>
    </form>    
    </div>
</body>
</html>
