
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="myJS.js"></script> 
    <link rel="stylesheet" href="../myStyle/mystyle.css">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="../controllers/loginController.php" method="post">
        <table>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
        </table>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>
