<?php
class simpleCrud
{
    public static function conection()
    {
        try{
            $con=new PDO("mysql:host=localhost;dbname=simplecrud", 'root', '');
            return $con;
        } catch (PDOException $error1) {
            echo $error1->getMessage();
        } catch (Exception $error2){
            echo $error2->getMessage();
        }
    }
    public static function insert($name, $email, $level, $password)
    {
        $insert = simpleCrud::conection()->prepare("INSERT INTO users(name,email,level,password) VALUES(:n, :e, :l, :p)");
        $insert->bindValue(':n', $name);
        $insert->bindValue(':e', $email);
        $insert->bindValue(':l', $level);
        $insert->bindValue(':p', $password);
        $insert->execute();
if ($insert) {
    echo "<script>alert('Registered!');</script>";
}else{
    echo "<script>alert('Not registered!');</script>";
}
}
public static function login($name,$password){
    $login=simpleCrud::conection()->prepare("SELECT level FROM users WHERE name=:n and password=:p");
    $login->bindValue(':n',$name);
    $login->bindValue(':p', $password);
    $login->execute();
    if ($login->rowCount()>0) {
        $fetch=$login->fetch(PDO::FETCH_ASSOC);
        session_start();
        if ($fetch) {
            switch ($fetch['level']){
            case '1':
                $_SESSION['level']=1;
                header('location:admin/index.php');
                break;

            case '2':
                $_SESSION['level']=2;
                header('location:user/index.html');
                    break;
        }
    }
}else {
    echo "<script>alert('User not registered!');</script>";
}
    }

}
?>