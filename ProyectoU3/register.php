<?php

include('config.php');
session_start();

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }

    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL, rol) VALUES (:username,:password_hash,:email,:rol)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("rol", $rol, PDO::PARAM_STR);

        $result = $query->execute();

        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}

?>

<header>
				<img src="img/ralogo_monogram.png" alt="10" >
				<p>Roux Academy <br> Art • Media • Design</p>
            <div>
                <h1>Roux Academy 2016 Art Conference</h1>
                <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of lectures by world-renowned art scholars and artists, and seven days and nights of gallery exhibits featuring the best in contemporary art, including painting, sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.</p>
            </div>
		</header>
		

<div class="register">


    <div class="register-screen">

        <head>
            <title>Register</title>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="css/style.css">
        </head>
        <form method="post" action="" name="signup-form">
            <div class="register-form">
            <div class="form-element">
                <label>Username</label>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
            </div>
            <div class="form-element">
                <label>Email</label>
                <input type="email" name="email" required />
            </div>
            <div class="form-element">
                <label>Password</label>
            
                <input type="password" name="password" required />
            </div>

            <div>
                <label>Tipo de usuario:</label>
                <br>
                <select name="rol" id="rol">
                    <option>Chose...</option>
                    <option value="0">Administrador</option>
                    <option value="1">Asistente</option>
                </select>
            </div>

            <button type="submit" name="register" value="register">Register</button>

            <br><br><br>

            <a href="../Proyecto_final/">Inicie sesión</a>
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