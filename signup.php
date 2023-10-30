<?php

    session_start();
    if(isset($_POST['submit'])&&isset($_POST['username'])&&isset($_POST['password'])){
        $_SESSION['username']=htmlentities($_POST['username']);
        $_SESSION['password']=htmlentities($_POST['password']);

        header("location:vsignupdb.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESEAUX SOCIAUX</title>
  <link rel="stylesheet" href="main.css">
</head>


<style>
    form{
        display:grid;
    }

    input{
        margin-top:10px;
        border: solid 2px rgb(22, 21, 21);
        padding:5px;
        background:rgb(22, 21, 21);
    }

    input[type="submit"]{
        cursor: pointer;
    }

    input[type="submit"]:hover{
        background:rgb(52, 52, 61);
        
    }

    main{

        display:flex;
        align-items:center;
        justify-content:center;
        height:100vh;
        

    }


    @media  and (max-width:745px) {
        
        main{
            height:80vh;
        }
    }


</style>

<body>

  <main>

    <form action="" method="POST">
        <h4 style="text-align:center">Sign up</h4>
        <code id="message" style="color:red"><?php if(isset($_SESSION['message'])){$message=$_SESSION['message']; echo $message ;} ?></code>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Sign up">
        <code>vous avez déjà de compte ? <a href="login.php">Login</a></code>
    </form>

  </main>
  <script>
   let input = document.querySelectorAll("input");
   var form = document.querySelector("form");
   let message = document.querySelector("#message");

    form.addEventListener("submit",(e)=>{
        if(input[0].value.length==0||input[1].value.length==0){
            e.preventDefault();
            message.innerText="Veillez remplir les champs vides";
        }else{
            message.innerText="";
        }
    })


  </script>

</body>

</html>