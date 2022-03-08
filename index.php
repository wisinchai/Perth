<?php session_start();
    echo "winzrd";
    if(!isset($_SESSION['usename'])){
        $_SESSION['msg']="You must log in fist";
        header('location: login.php');
    }
    if(iset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylessheet" href="style.css">

</head>
<body>
    <div class="header">
        <h2>Home page</h2>
    </div>
    <div class="content">
        <?phpif(isset($_SESSION['username']));?>
        <p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
        <p><a href="index.php?logout=1" style="color:red;">Logout</a></p>
    </div>
</body>
</html>