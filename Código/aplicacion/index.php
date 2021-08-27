<?php
//arreglo con mensajes que puede recibir
$messages = [
    "1" => "Sus credenciales son incorrectas",
    "2" => "No ha Iniciado Sesión"
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Registro de Notas</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">

</head>
<body>
<div class="header">
        <h1 class="animate__animated animate__backInLeft">Unidad Educativa "Marqués Selva Alegre"</h1>
</div>
<div class="body">
    <div class="panel-login">
            <h1 class="animate__animated animate__backInLeft">Inicio de Sesión</h1>
            <form method="post" class="form" action="login_post.php">
                <label>Usuario</label><br>
                <input type="text" placeholder="Ingrese su usuario" name="username">
                <br>
                <label>Contraseña</label><br>
                <input type="password" placeholder="Ingrese su contraseña" name="password">
                <br><br>
                <input type="submit" value="Ingresar">
            </form>
        <?php
        if(isset($_GET['err']) && is_numeric($_GET['err']) && $_GET['err'] > 0 && $_GET['err'] < 3 )
            echo '<span class="error">'.$messages[$_GET['err']].'</span>';
        ?>
        </div>
</div>

<footer>
    <p>Derechos reservados &copy; 2021</p>
</footer>

</body>

</html>
