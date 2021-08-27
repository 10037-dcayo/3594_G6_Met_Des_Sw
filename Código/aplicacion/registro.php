<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<?php require_once "scripts.php"; ?>

</head>
<body style="background-color: gray">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-danger">
				<div class="panel panel-heading">Registro de usuario</div>
				<div class="panel panel-body">
					<form id="frmRegistro">
						<label>Username</label>
					<input type="text" class="form-control input-sm" id="username" name="">
					<label>Password</label>
					<input type="text" class="form-control input-sm" id="password" name="">
					<label>Nombre</label>
					<input type="text" class="form-control input-sm" id="name" name="">
					<label>Rol</label>
					<input type="text" class="form-control input-sm" id="rol" name="">
					<p></p>
					<span class="btn btn-primary" id="registrarNuevo">Registrar</span>
					</form>
					<div style="text-align: right;">
						<a href="index.php" class="btn btn-default">Login</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#username').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}else if($('#name').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#rol').val()==""){
				alertify.alert("Debes agregar el rol");
				return false;
			}

			cadena="username=" + $('#username').val() +
					"&password=" + $('#password').val() +
					"&name=" + $('#name').val() + 
					"&rol=" + $('#rol').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.alert("Agregado con exito");
							}else{
								alertify.alert("Fallo al agregar");
							}
						}
					});
		});
	});
</script>

