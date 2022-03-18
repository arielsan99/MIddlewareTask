<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<?php
session_start();
	require("principal.php");

	$username=$_POST['user'];
	$pass=$_POST['pass'];

	$sql = $conexion->query("SELECT * FROM users WHERE usuario ='$username' and contra ='$pass'");
	$num = 1;

	$query = "SELECT * FROM `users` WHERE usuario ='$username' and contra ='$pass'";
	$resultado = $conexion->query($query);
	$salida ="";
	if($resultado->num_rows > 0){

		$salida.="<table class='tabla_datos'>
					<thead>
						<tr>
							<td>cedula</td>
							<td>Usuario</td>
							<td>Contraseña</td>
						</tr>
					</thead>
					<tbody>";

		while($fila = $resultado->fetch_assoc()){
			$salida.="<tr>
					<td>".$fila['cedula']."</td>
					<td>".$fila['usuario']."</td>
					<td>".$fila['contra']."</td>
			</tr>";
		}

		$salida.="</tbody></table>";

		echo $salida;
		echo password_hash("123", PASSWORD_DEFAULT);
		$hash = password_hash("123", PASSWORD_DEFAULT);

		if (password_verify('123', $hash)) {
			echo 'Password is valid!';
		} else {
			echo 'Invalid password.';
		}
		echo '<script>alert("ESTE USUARIO EXISTE EN LA DB SLAVE ")</script> ';
	}else{
		$num = 2;
		//echo '<script>alert("ESTE USUARIO NO EXISTE")</script> ';

	}



	if(intval($num) == 2){
		echo '<script>alert("ESTE USUARIO NO EXISTE")</script> ';

		echo "<script>location.href='Login.php'</script>";
	}


?>
