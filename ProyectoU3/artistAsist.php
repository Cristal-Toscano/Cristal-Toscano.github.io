<?php
$link = new PDO('mysql:host=localhost;dbname=id17917205_roux', 'id17917205_root', 'Hol&123456789'); 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Artist</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenido">
        <header>
        <img src="img/Picsart_22-02-09_20-57-46-487.png" alt="5" >
        <nav>
            <ul>
                <li><a href="home.html">INICIO</a></li>
                <li><a href="artistAsist.php">AÑADIR MUNICIPIO</a></li>
                <li><a href="schedule.html">MUNICIPIOS</a></li>
                <li><a href="venue.html">CONOCENOS</a></li>
                <li><a href="registerInfo.php">CONOCENOS COMEN</a></li>
                <li><a href="index.php">LOGOUT</a></li>
            </ul>
        </nav>
         
        </header> 
        <div class="principal">
            <main>

        <table class="table table-striped">
    
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>imagen</th>
            
        </tr>
        </thead>
        <?php foreach ($link->query('SELECT * from artistas') as $row){ ?> 
        <tr>
            <td><?php echo $row['nombre'] ?></td>
            <td><?php echo $row['descripcion'] ?></td>
            <td><img width="100" src="data:image/jpg;base64,<?php echo  base64_encode($row['imagen']); ?>"></td>
         </tr>
        <?php
            }
        ?>
        </table> 

            </main>

            <aside>

            </aside>
        </div>
        <footer>
        
    
        </footer>
    </div>

</html>