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
				<img src="img/ralogo_monogram.png" alt="10" >
				<p>Roux Academy <br> Art • Media • Design</p>
            <div>
                <h1>Roux Academy 2016 Art Conference</h1>
                <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of lectures by world-renowned art scholars and artists, and seven days and nights of gallery exhibits featuring the best in contemporary art, including painting, sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.</p>
            </div>
		</header>
		

<div class="login">

    <div class="login-screen">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/StyleRegister.css">
    </head>
    <form method="post" action="" name="signin-form">
        
        <div class = "login-form">
        <div class="form-element">
            <label>Username</label>
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Password</label>
            <input type="password" name="password" required />
        </div>
        <button type="submit" name="login" value="login">Log In</button>
        <br><br>
        <label>¿No tienes cuenta? regístrate <a href="register.php">AQUÍ</a> </label>
        </div>
    
        </div>

</div>

<footer>
			<img src="img/ralogo_monogram.png" width="100">
			<p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for three days of lectures by world-renowned art scholars and artists</p>
			<nav>
				<ul>
					<li><a href="">About The Roux Academy</a></li>
					<li>|</li>
					<li><a href="">Privacy Policy</a></li>
					<li>|</li>
					<li><a href="">Visit Our Web Site</a></li>
				</ul>
			</nav>
		</footer>

	
</form>