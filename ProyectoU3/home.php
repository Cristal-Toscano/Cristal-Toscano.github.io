<?php

include('config.php');
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['password']) && $result['rol']==1) {
            $_SESSION['user_id'] = $result['id'];
            header('Location: registerInfo.php');
        } if(password_verify($password, $result['password']) && $result['rol']==0){
            $_SESSION['user_id'] = $result['id'];
            header('Location: artist.php');
       } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }


    }
}

?>
<link rel="stylesheet" type="text/css" href="css/style.css">

<header>
		
            
		</header>
		

<div class="login">

    <div class="login-screen">
    <head>
    <header>
    <header>
        <img src="img/Picsart_22-02-09_20-57-46-487.png" alt="5" >
        <title>BIENVENIDO A TURIS-TAM</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/StyleRegister.css">
    </head>
    <form method="post" action="" name="signin-form">
        
        <div class = "login-form">
        <div class="form-element">
            <label>USUARIO</label>
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>CONTRASEÑA</label>
            <input type="password" name="password" required />
        </div>
        <button type="submit" name="login" value="login">ENTRAR</button>
        <br><br>
        <label>¿No tienes cuenta?<a href="register.php"> REGISTRATE AQUÍ</a> </label>
        </div>
    
        </div>

</div>

<footer>
	
		</footer>

	
</form>