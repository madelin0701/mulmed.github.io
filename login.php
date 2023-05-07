<?php
require './connection.php';
if (isset($_POST['LoginButton'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    if (!empty($_POST['name'])&&!empty($_POST['password'])) {
        $login=simpleCrud::login($name, $password);
    }else {
        echo "Please, all the fields are required!";
    }
     
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login form</title>
</head>
<style>
    .form form{
        width: 230px;
        height: 240px;
    }
</style>

<body>
    <div class="main">
        <div class="content">
            <div class="form">
                <form action="" method="post">
                    <div class="inputBox">
                    <input type="text" name="name" placeholder="Enter your name">
                    <input type="password" name="password" id="" placeholder="Enter your password">
                    </div>

                    <div class="login">
                        <a href="./index.php">Don't have any account? Sign up</a>
                    </div>
                <div class="submitButton">
                <input type="submit" value="Login" name="LoginButton">
                </div>
</div>
</div>
</div>
</form>

</body>
</html>