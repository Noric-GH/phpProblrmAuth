<?php
require_once('db.php');
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$repatpass = $_POST['repatpass'];

if(empty($login) || empty($email) || empty($pass) ||empty($repatpass)){
    echo "zapolnite vse polya";
}else{
    if($pass != $repatpass){
        echo "poroli ne sovpodayut !";
    }else{
        $sql = "INSERT INTO `users` (login, email, pass) Values ('$login', '$email', '$pass')";

        if($conn -> query($sql) === TRUE){
            echo "успешная регистрация";
            header ('Location: user.php');
        }else{
            echo "ошибка регистрации:" . $conn->error;
        }
    }
}
