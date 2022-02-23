<?php
if(isset($_POST["registerArtist"])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($check !== false){
        $imagen = $_FILES['imagen']['tmp_name'];
        $imgContent = addslashes(file_get_contents($imagen))
        $dbHost     = 'localhost';
        $dbUsername = 'id17917205_root';
        $dbPassword = 'Hol&123456789';
        $dbName     = 'id17917205_roux';
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        $insert = $db->query("INSERT into artistas (nombre, descripcion, imagen) VALUES ('$nombre','$descripcion','$imgContent')");
        if($insert){
            echo "Artista registrado exitosamente.";
        }else{
            echo "Intentelo de nuevo";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>

<head>
	<title>Register Artist</title>
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
	 <div class="principalartista">
        <main>
            <div class="registro">
            <div>
                <h2>REGISTRA UN NUEVO LUGAR</h2>
            </div>
        <form method="post" enctype="multipart/form-data" action="" name="signin-form">
            <div>
                <h3>Artist Info</h3>
                <label>Nombre* </label>
                <input type="text" name="nombre" required>
            </div>

            <div>
                <label>Descripción del artista</label>
                <input type="text" name="descripcion">
            </div>

            <div>
                <label>Imagen</label>
                <input type="file" name="imagen" required>
            </div>
            

           <button type="submit" name="registerArtist" value="registerArtist">ENVIAR</button>
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
