<?php
require './connection.php';
if (isset($_POST['signButton'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $level=$_POST['level'];
    $password=$_POST['password'];
    if (!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['level'])&&!empty($_POST['password'])){
    $insert=simpleCrud::insert($name, $email, $level, $password);
    }else {
        echo "<script>alert('Please, all fields are required!');</script>";
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
    <title>Sign up form</title>
</head>
<body>
    <divc class="main">
        <div class="content">
            <div class="form">
                <form action="" method="post">
                    <div class="inputBox">
                    <input type="text" name="name" placeholder="Enter your name">
                    <input type="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="inputBox">
                    <select name="level" id="">
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                    
                    </select>
                    <input type="password" name="password" placeholder="Enter your password">
                    </div>

                    <div class="login">
                        <a href="./login.php">Do you have any account? Sign in</a>
                    </div>
                <div class="submitButton">
                <input type="submit" value="Submit" name="signButton">
                </div>

</body>
</html>