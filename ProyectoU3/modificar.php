<?php 
	
	
       	ModificarArtista($_POST['id'], $_POST['nombre'], $_POST['descripcion']);

 		function ModificarArtista($id, $nombre, $descripcion)
		{
			$conexion = new mysqli("localhost","id17681847_root", "Admin@123456789","id17681847_roux");
		    echo $sentencia = "UPDATE artistas SET  nombre = '".$nombre."', descripcion = '".$descripcion."' WHERE id = '".$id."' ";

			$conexion->query($sentencia) or die ("Error al actualizar");

			header('Location: artist.php');
		}
		
	
 ?>
