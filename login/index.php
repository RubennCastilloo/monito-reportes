<?php 
    session_start();
    if(isset($_GET['cerrar_sesion'])) {
        //   echo "Si, presionaste en cerrar";
        $_SESSION = array ();
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style.css">
    <title>Iniciar Sesion</title>
</head>
<body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="../images/logo.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="usuarioLogin" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" id="passwordLogin" class="form-control" placeholder="Password" required>
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" id="loginBtn">Entrar</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div><!-- /container -->

    <script src="../js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>
</html>