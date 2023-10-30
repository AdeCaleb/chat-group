<?php 

include 'db_connect.php';
session_start();

if(isset($_SESSION['username'])&&isset($_SESSION['password'])){
    $username=$_SESSION['username'];
    $password=password_hash($_SESSION['password'],PASSWORD_DEFAULT);

    $requet = $conn->query("SELECT * FROM user where username='".$username."'");
    $requet=$requet->fetch();
    if($requet){
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        $_SESSION['message']="Ce username existe déjà !";
        header("location:signup.php");
        exit;
    }else{
        $requet = $conn->prepare("INSERT INTO user(username,password) values(?,?)");
        $requet->execute([$username,$password]);
        header("location:login.php");
        exit;
    }

}



?>