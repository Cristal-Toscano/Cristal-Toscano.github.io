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
	<link rel="stylesheet" type="text/css" href="css/StyleRegister.css">
</head>
<body>
	<div class="contenido">
		<header>
			
	</header>
		<nav>
			<ul>
				<li><a href="indexAdmin.html">HOME</a></li>
                <li><a href="artist.php">ARTIST</a></li>
                <li><a href="scheduleAdmin.html">SCHEDULE</a></li>
                <li><a href="venueAdmin.html">VENUE</a></li>
                <li><a href="admin.php">ASISTENTES</a></li>
                <li><a href="index.php">LOGOUT</a></li>
			</ul>
			
		</nav>
        
	 <div class="principal">
        <main>
            <div class="registro">
            <div>
                <h2>Register</h2>
                <p>To attend the Roux Academy 2016 Contemporary Art Conference, please complete the information below.</p>
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
            

           <button type="submit" name="registerArtist" value="registerArtist">Send</button>
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
