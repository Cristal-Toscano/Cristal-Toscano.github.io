<?php 

	EliminarArtista($_GET['id']);

	function EliminarArtista($id){
		$conexion = new mysqli("localhost","id17917205_root", "Hol&123456789","id17917205_roux");

		$sentencia="DELETE FROM artistas WHERE id = '".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar");

		header('Location: artist.php');
	}
 ?>

