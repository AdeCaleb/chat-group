<?php 

include 'db_connect.php';
session_start();

if(isset($_SESSION['username'])&&isset($_SESSION['password'])){
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];

    $requet = $conn->query("SELECT * FROM user where username='".$username."'");
    $requet=$requet->fetch();
    if($requet){
        $pass_db = $requet['password'];
        $pass=password_verify($password,$pass_db);
        if($pass){
            header("location:net.php");
            exit;
        }else{
            unset($_SESSION['password']);
            $_SESSION['message']="Mot de passe incorrect !";
            header("location:login.php");
            exit;
        }
    }else{
        unset($_SESSION['unsername']);
        $_SESSION['message']="Veillez créer un compte";
        header("location:signup.php");
        exit;
    }

}



?>