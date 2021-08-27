<?php 


	session_start();
	require_once "conexion.php";

	$conexion=conexion();

		$username=$_POST['username'];
		$password=sha1($_POST['password']);

		$sql="SELECT * from users where username='$username' and password='$password'";
		$result=mysqli_query($conexion,$sql);

		if(mysqli_num_rows($result) > 0){
			$_SESSION['user']=$username;
			echo 1;
		}else{
			echo 0;
		}
 ?>