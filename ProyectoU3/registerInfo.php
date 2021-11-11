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
			<img src="img/ralogo_monogram.png" alt="10" >
				<p>Roux Academy <br> Art • Media • Design</p>
            <div>
                <h1>Roux Academy 2016 Art Conference</h1>
                <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of lectures by world-renowned art scholars and artists, and seven days and nights of gallery exhibits featuring the best in contemporary art, including painting, sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.</p>
            </div>
	</header>
		<nav>
			<ul>
				<li><a class="rojo" href="home.html">HOME</a></li>
                <li><a class="rojo" href="artistAsist.php">ARTIST</a></li>
                <li><a class="rojo" href="schedule.html">SCHEDULE</a></li>
                <li><a class="rojo" href="venue.html">VENUE</a></li>
                <li><a class="rojo" href="registerInfo.php">REGISTER</a></li>
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
