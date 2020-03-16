<?php 

	$conexion=mysqli_connect('localhost','root','','grupoit');
		$delete="DELETE FROM vodafone WHERE id='id' ";

		if(mysqli_query($conexion,$delete)){
			echo "Registro eliminado con exito. ";
		}else{
			echo "ERROR: No se pudo eliminar el registro"; 

		}
	$conexion->close();		
 ?>