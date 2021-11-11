<?php 

$consulta = ConsultarArtista($_GET['id']);

function ConsultarArtista($id){
    $conexion = new mysqli("localhost","id17917205_root", "Hol&123456789","id17917205_roux");
    $sentencia = "SELECT * FROM artistas WHERE  id = '".$id."' ";
    $resultado = $conexion->query($sentencia) or die ("Error al consultar al artista");
    $row=$resultado->fetch_assoc();
    
    return[
        $row['id'],
        $row['nombre'],
        $row['descripcion'],
        $row['imagen'],
    ];
}


 ?>

 <?php
$link = new PDO('mysql:host=localhost;dbname=id17681847_roux', 'id17681847_root', 'Admin@123456789'); 


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
				<li><a href="indexAdmin.html">HOME</a></li>
                <li><a href="artist.php">ARTIST</a></li>
                <li><a href="scheduleAdmin.html">SCHEDULE</a></li>
                <li><a href="venueAdmin.html">VENUE</a></li>
                <li><a href="asistentes.php">ASISTENTES</a></li>
                <li><a href="index.php">LOGOUT</a></li>
			</ul>
		</nav>
        <img src="img/art01.jpg" style="width: 1000px">
	 <div class="principal">
        <main>
            <div class="registro">
            <div>
                <h2>Modificar</h2>
                <p>To attend the Roux Academy 2016 Contemporary Art Conference, please complete the information below.</p>
            </div>
    <form action="modificar.php" enctype="multipart/form-data" method="post" name="signin-form">
            <input type="hidden" name="id" value="<?php echo $consulta['0'] ?>">
            <div>
                <h3>Artist Info</h3>
                <label>Nombre* </label>
                <input type="text" name="nombre" value="<?php echo $consulta['1'] ?>" required>
            </div>

            <div>
                <label>Descripción del artista</label>
                <input type="text" name="descripcion" value="<?php echo $consulta['2'] ?>">
            </div>
            <br>
            <div>
                <label>Imagen actual: </label>
                <?php foreach ($link->query('SELECT id, nombre, descripcion, imagen from artistas') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
                    <img class="img" width="100" src="data:image/jpg;base64,<?php echo  base64_encode($row['imagen']); ?>">
                    <?php
                        }
                    ?>
            </div>
            
            <br>
            <br>
           <button type="submit" >Modify</button>
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
                <ul class="fin">
                    <li><a href="about.html">About the roux academy |</a></li>
                    <li><a href="policy.html"> Privacy policy |</a></li>
                    <li><a href="index.html"> Visit our web site</a></li>
                </ul>
            </div>
        </footer>
    </div>

</body>
