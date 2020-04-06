<?php 

	$conexion=mysqli_connect('localhost','root','','grupoit');

?>
<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
	<div class="col-md-15 text-center">	
		<h2 class="bg-primary">Relacion de Sim Telcel</h2>
	</div>	
<br>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>EMPRESA</th>	
				<th>IMEI</th>	
				<th>SIM</th>	
				<th>ALIAS</th>	
				<th>CUENTA</th>	
				<th>LINEA</th>	
			</tr>
		</thead>	
		<?php 
		$sql="SELECT * from telcel";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
			<tr scope="col">
				<th><?php echo $mostrar['id'] ?></th>
				<td><?php echo $mostrar['empresa'] ?></td>
				<td><?php echo $mostrar['imei'] ?></td>
				<td><?php echo $mostrar['sim'] ?></td>
				<td><?php echo $mostrar['alias'] ?></td>
				<td><?php echo $mostrar['cuenta'] ?></td>
				<td><?php echo $mostrar['linea'] ?></td>
				<td><a class="btn btn-primary" href="#" role="button">Eliminar</a></td> 
			</tr>
	<?php 
		}
	?>
	</table>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>  

    <?php
		echo '<script type="text/javascript">alert("Consulta solicitada");</script>';
	?>
	<a class="btn btn-primary" href="../../index.html" role="button"> Regresar al menu</a>
	<input type="image" src="" name="Submit" value="">
    <a class="btn btn-primary" role="button" href="javascript:window.print()"> Imprimir </a>
</body>
</html>