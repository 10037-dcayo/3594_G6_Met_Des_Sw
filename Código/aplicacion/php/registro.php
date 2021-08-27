<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$username=$_POST['username'];
		$password=$_POST['password'];
		$nombre=$_POST['username'];
		$rol=$_POST['rol'];

		if(buscaRepetido($username,$password,$conexion)==1){
			echo 2;
		}else{
			$sql="INSERT into users (username,password,nombre,rol)
				values ('$username','$password','$nombre','$rol')";
			echo $result=mysqli_query($conexion,$sql);
		}


		function buscaRepetido($user,$pass,$conexion){
			//$p=sha1($pass);
			$sql="SELECT * from users
				where username='$user' and password='$pass'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}

 ?>