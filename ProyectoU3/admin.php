<?php
$link = new PDO('mysql:host=localhost;dbname=id17917205_roux', 'id17917205_root', 'Hol&123456789'); 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Artist</title>
    <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styleArtist.css">
</head>
<body>
    <div class="contenido">
        <header>
            

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
        <img class="banner" src="img/art01.jpg" style="width: 1000px">
        <div class="principal">
            <main>


                <table class="table table-striped">
    
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Compañia</th>
            <th>Email</th>
            <th>Comentario</th>
            <th>Medio</th>
            
        </tr>
        </thead>
        <?php foreach ($link->query('SELECT * from info') as $row){ ?> 
        <tr>
            <td><?php echo $row['nombre'] ?></td>
            <td><?php echo $row['company'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['comment'] ?></td>
            <td><?php echo $row['quiestion'] ?></td>



            
         </tr>
        <?php
            }
        ?>
        </table>
               
                <hr>
                
            </main>

            
        </div>
        <footer>
           
           
        </footer>
    </div>

</html>