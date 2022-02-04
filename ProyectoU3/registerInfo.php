<?php

include('config.php');
session_start();

if (isset($_POST['registerInfo'])) {

    $nombre = $_POST['nombre'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $quiestion = $_POST['quiestion'];

    
        $query = $connection->prepare("INSERT INTO info(nombre,company,email,comment,quiestion) VALUES (:nombre,:company,:email,:comment,:quiestion)");
        $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
        $query->bindParam("company", $company, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("comment", $comment, PDO::PARAM_STR);
        $query->bindParam("quiestion", $quiestion, PDO::PARAM_STR);
        $result = $query->execute();

        if ($result) {
            echo '<p class="success">Registro exitoso!</p>';
        } else {
            echo '<p class="error">Algo salió mal!</p>';
        }
    
}

?>

<head>
	<title>Register</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/StyleRegister.css">
</head>
<body>
	<div class="contenido">
		<header>
			
	</header>
		<nav>
			<ul>
				<li><a href="home.html">HOME</a></li>
                <li><a href="artistAsist.php">ARTIST</a></li>
                <li><a href="schedule.html">SCHEDULE</a></li>
                <li><a href="venue.html">VENUE</a></li>
                <li><a href="registerInfo.php">REGISTER</a></li>
                <li><a href="index.php">LOGOUT</a></li>
			</ul>
			
		</nav>
        <img src="img/art01.jpg" style="width: 1000px">
	 <div class="principal">
        <main>
            <div class="registro">
            <div>
                <h2>Register</h2>
                <p>To attend the Roux Academy 2016 Contemporary Art Conference, please complete the information below.</p>
            </div>
    <form method="post" action="" name="signin-form">
            <div>
                <h3>Personal Info</h3>
                <label>Nombre* </label>
                <input type="text" name="nombre" required>
            </div>

            <div>
                <label>Company Name</label>
                <input type="text" name="company">
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            
            <div>
                <label>Request Type</label>
                <br>
                <input type="radio" name="seleccion" value="Question">Question
                <br>
                <input type="radio" name="seleccion" value="Comment">Comment
            </div>

            <div>
                <label>Comment</label>
                <textarea name="comment"></textarea>
            </div>

            <div>
                <input type="checkbox" name="pasatiempos" value="Correr">Subscribe to our mailing list?
            </div>

            <div>
                <label>How did you hear about us?</label>
                <br>
                <select name="quiestion" id="quiestion">
                    <option>Chose...</option>
                    <option value="friend">A friend</option>
                    <option value="facebook">Facebook</option>
                    <option value="twitter">Twitter</option>
                </select>
            </div>
            </div>



           <button type="submit" name="registerInfo" value="registerInfo">Send</button>
        </form>
        </main>

        <aside>
             <section>
                  
                </section>
        </aside>

        </div>

        <footer>
            
        </footer>
    </div>

</body>
