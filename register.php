<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylessheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2> Register</h2>
    </div>

    <form action = "register_db.php" method="post">
        <div class = "input-group">
            <label for= "username"> Username</label>
            <input type="text" name="username">
        </div>
        <div class = "input-group">
            <label for= "email"> Email</label>
            <input type="email" name="email">
        </div>
        <div class = "input-group">
            <label for= "password_1"> Password</label>
            <input type="password" name="password_1">
        </div>
        <div class = "input-group">
            <label for= "Password_2"> Confirm Password</label>
            <input type="password" name="Passwrod_2">
        </div>
        <div class = "input-group">
            <button type="submit" name="reg_user" class="btn">Register</button>
        </div>
        <p>Aready a member?<a href = "login.php">Sign in</a></p>
    </form>
</body>
</html>