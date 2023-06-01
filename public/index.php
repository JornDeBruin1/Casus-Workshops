<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="container">
    <form method="post" action="checklogin.php">
       
        <h1>Login</h1>
        <table>
        <tr>
        <td>
            <label>E-Mail</label>
        </td>
        <td>
            <input type="email" name="mail" required>
        </td>
        </tr>
        <tr>
            <td> 
                <label>Wachtwoord</label>
            </td>
             <td> 
            <input type="password" class="password" name="wachtwoord" required>
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
