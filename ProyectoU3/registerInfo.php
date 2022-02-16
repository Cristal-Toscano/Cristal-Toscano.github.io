<?php

include('config.php');
session_start();

if (isset($_POST['registerInfo'])) {

    $comment = $_POST['comment'];

    
        $query = $connection->prepare("INSERT INTO info(comment) VALUES (:comment)");
        $query->bindParam("comment", $comment, PDO::PARAM_STR);
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
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
		<header>
        <img src="img/Picsart_22-02-09_20-57-46-487.png" alt="5" >
        <nav>
	        <ul>
            <li><a href="home.html">INICIO</a></li>
            <li><a href="schedule.html">MUNICIPIOS</a></li>
            <li><a href="artist.php">RECOMENDACIONES</a></li>
            <li><a href="registerInfo.php">CONOCENOS</a></li>
            <li><a href="index.php">SALIR</a></li>
	        </ul>
	
        </nav>        
			
	</header>
    <div class="contenido">
	 <div class="principalc">
        <main>
            <h3>¿QUIENES SOMOS?</h3>
            <p></p>
            <h3>¿DE DONDE SE OBTIENE LA INFORMACIÓN UTILIZADA?</h3>
            <p></p>

        </main>

            <aside>
                  <div class="registro">
               <div>
                   <h2>Register</h2>
               </div>
                 <form method="post" action="" name="signin-form">
                    <div>
                        <h3>Personal Info</h3>
                    </div>
                    <div>
                        <label>Comment</label>
                        <textarea name="comment"></textarea>
                    </div>
                 
                    <button type="submit" name="registerInfo" value="registerInfo">ENVIAR</button>
                 </form>
             
            </aside>

        </div>

        <footer>
            
        </footer>
    </div>

</body>
