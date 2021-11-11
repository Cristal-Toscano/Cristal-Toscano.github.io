<?php
if(isset($_POST["registerArtist"])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($check !== false){
        $imagen = $_FILES['imagen']['tmp_name'];
        $imgContent = addslashes(file_get_contents($imagen));

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'id17681847_root';
        $dbPassword = 'Admin@123456789';
        $dbName     = 'id17681847_roux';

        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        
        
        //Insert image content into database
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
			<img src="img/ralogo_monogram.png" alt="10" >
				<p>Roux Academy <br> Art • Media • Design</p>
            <div>
                <h1>Roux Academy 2016 Art Conference</h1>
                <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of lectures by world-renowned art scholars and artists, and seven days and nights of gallery exhibits featuring the best in contemporary art, including painting, sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.</p>
            </div>
	</header>
		<nav>
			<ul>
				<li><a class="rojo" href="indexAdmin.html">HOME</a></li>
                <li><a class="rojo" href="artist.php">ARTIST</a></li>
                <li><a class="rojo" href="scheduleAdmin.html">SCHEDULE</a></li>
                <li><a class="rojo" href="venueAdmin.html">VENUE</a></li>
                <li><a class="rojo" href="admin.php">ASISTENTES</a></li>
                <li><a class="rojo" href="index.php">LOGOUT</a></li>
			</ul>
			<img src="img/art01.jpg" style="width: 1000px">
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
                    <h1>Featured Artists</h1>
                    <p>Each year, nine individuals are honored as Featured Artists - each being granted his or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees.</p>
                    <div class="artistas">
                        <img src="img/Barot_Bellingham_tn.jpg">
                        <img src="img/Constance_Smith_tn.jpg">
                        <img src="img/Hassum_Harrod_tn.jpg">
                        <img src="img/Hillary_Goldwynn_tn.jpg">
                        <img src="img/Jennifer_Jerome_tn.jpg">
                        <img src="img/Jonathan_Ferrar_tn.jpg">
                        <img src="img/LaVonne_LaRue_tn.jpg">
                        <img src="img/Riley_Rewington_tn.jpg">
                        <img src="img/Xhou_Ta_tn.jpg">

                    </div>
                </section>
        </aside>

        </div>

        <footer>
            <img src="img/ralogo_monogram.png" alt="10">
            <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for three days of lectures by world-renowned art scholars and artists.</p>
            <div class="footer">
                <ul>
                    <li><a href="about.html">About the roux academy</a></li>
                    <li>|</li>
                    <li><a href="policy.html">Privacy policy</a></li>
                    <li>|</li>
                    <li><a href="index.html">Visit our web site</a></li>
                </ul>
            </div>
        </footer>
    </div>

</body>
