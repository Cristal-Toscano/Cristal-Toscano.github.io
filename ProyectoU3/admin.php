<?php
// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada. 
$link = new PDO('mysql:host=localhost;dbname=id17681847_roux', 'id17681847_root', 'Admin@123456789'); // el campo vaciío es para la password. 

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
        <?php foreach ($link->query('SELECT * from info') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
        <tr>
            <td><?php echo $row['nombre'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
            <td><?php echo $row['company'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['comment'] ?></td>
            <td><?php echo $row['quiestion'] ?></td>



            
         </tr>
        <?php
            }
        ?>
        </table>
                <!--<section>
                    <h2>About the event</h2>
                    <p>Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees. It is truly an honor to be a CAC Featured Artist and many past students artists who were featured at CAC have gone on to brilliant careers in art.</p>
                </section>
                <hr>
                <section>
                    <img src="img/Barot_Bellingham_tn.jpg" class="img">
                    <h2>Barot Bellingham</h2>
                    <p>Barot has just finished his final year at The Royal Academy of Painting and Sculpture, where he excelled in glass etching paintings and portraiture. Hailed as one of the most diverse artists of his generation, Barot is equally as skilled with watercolors as he is with oils.</p>
                </section>
                <hr>

                <section>
                    <img src="img/Jonathan_Ferrar_tn.jpg" class="img">
                    <h2>Jonathan G. Ferrar II</h2>
                    <p>Labeled as “The Artist to Watch in 2016” by the London Review, Johnathan has already sold one of the highest priced commissions paid to an art student, ever on record. The piece, entitled Gratitude Resort, a work in oil and mixed media, was sold for $750,000.</p>
                </section>
                <hr>

                <section>
                    <img src="img/Hillary_Goldwynn_tn.jpg" class="img">
                    <h2>Hillary Hewitt Goldwynn-Post</h2>
                    <p>Hillary is a sophomore art sculpture student at New York University, and has already won all the major international prizes for new sculptors, including the Divinity Circle, the International Sculptor’s Medal, and the Academy of Paris Award. Hillary’s CAC exhibit features paintings that contain only water images including waves, deep sea, and river.</p>
                    
                </section>
                <hr>

                <section>
                    <img src="img/Hassum_Harrod_tn.jpg" class="img">
                    <h2>Hassum Harrod</h2>
                    <p>The Art College in New Dehli has sponsored Hassum for his entire undergraduate career at the university, seeing great promise in his contemporary paintings of landscapes - that use equal parts muted and vibrant tones. Hassum will be speaking on “The use and absence of color in modern art”.</p>
                    
                </section>
                <hr>

                <section>
                    <img src="img/Jennifer_Jerome_tn.jpg" class="img">
                    <h2>Jennifer_Jerome</h2>
                    <p>A native of New Orleans, much of Jennifer’s work has centered around abstract images that depict flooding and rebuilding, having grown up as a teenager in the post-flood years. Despite the sadness of devastation and lives lost.</p>
                    
                </section>
                <hr>

                <section>
                    <img src="img/LaVonne_LaRue_tn.jpg" class="img">
                    <h2>LaVonne L. LaRue</h2>
                    <p>LaVonne’s giant-sized paintings all around Chicago tell the story of love, nature, and conservation - themes that are central to her heart. LaVonne will share her love and skill of graffiti art on Monday’s schedule, as she starts the painting of a 20-foot high wall in the Rousseau Room of Hotel Contempo in front of a standing-room only audience in Art in Unexpected Places.</p>
                    
                </section>
                <hr>

                <section>
                    <img src="img/Constance_Smith_tn.jpg" class="img">
                    <h2>Constance Olivia Smith</h2>
                    <p>Constance received the Fullerton-Brighton-Norwell Award for Modern Art for her mixed-media image of a tree of life, with jewel-adorned branches depicting the arms of humanity, and precious gemstone-decorated leaves representing the spouting buds of togetherness.</p>
                    
                </section>
                <hr>

                <section>
                    <img src="img/Riley_Rewington_tn.jpg" class="img">
                    <h2>Riley Rudolph Rewington</h2>
                    <p>A first-year student at the Roux Academy of Art, Media, and Design, Riley is already changing the face of modern art at the university. Riley’s exquisite abstract pieces have no intention of ever being understood, but instead beg the viewer to dream, create, pretend, and envision with their mind’s eye. Riley will be speaking on the “Art of Abstract” during Thursday’s schedule.</p>
                    
                </section>
                <hr>

                <section>
                    <img src="img/Xhou_Ta_tn.jpg" class="img">
                    <h2>Xhou Ta</h2>
                    <p>A senior at the China International Art University, Xhou has become well-known for his miniature sculptures, often the size of a rice granule, that are displayed by rear projection of microscope images on canvas. Xhou will discuss the art and science behind his incredibly detailed works of art.</p>
                    
                </section>-->
                <hr>
                
            </main>

            
        </div>
        <footer>
            <img src="img/ralogo_monogram.png" alt="10">
            <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for three days of lectures by world-renowned art scholars and artists.</p>
            <div class="footer">
                <ul>
                   
                    <li><a href="indexAdmin.html">Visit our web site</a></li>
                </ul>
            </div>
        </footer>
    </div>

</html>