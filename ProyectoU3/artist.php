<?php 
$link = new PDO('mysql:host=localhost;dbname=id17917205_roux', 'id17917205_root', 'Hol&123456789'); 


?>





<!DOCTYPE html>
<html>
<head>
    <title>Artist</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
        <div class="principal">
            <main>

        
        <?php foreach ($link->query('SELECT id, nombre, descripcion, imagen from artistas') as $row){ ?> 
            <section>
                    
                    <img class="img" width="100" src="data:image/jpg;base64,<?php echo  base64_encode($row['imagen']); ?>">
                    <h2><?php echo $row['nombre']?></h2>
                    <p><?php echo $row['descripcion']?></p>
            </section>

            
            <?php 
                echo "<td><a href='cargar.php?id=".$row['id']."'> <button type='button' class= 'btn btn-primary'>Modificar</button></a></td>";
                echo "<td><a href='eliminar.php?id=".$row['id']."'> <button type='button' class= 'btn btn-danger'>Eliminar</button></a></td>";
             ?>
            
        <?php
            }
        ?>
        
    
                <a href="newartist.php">Nuevo artista</a>
            </main>

            <aside>
            



            </aside>
        </div>
        <footer>
          
          
        </footer>
    </div>

</html>