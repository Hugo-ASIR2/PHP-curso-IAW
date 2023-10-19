<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
</head>
<body>
<?php
$password = "contrasena_correcta";

if (isset($_POST['password'])) {
    if ($_POST['password'] == $password) {
        echo "<p>Acceso autorizado.</p>";
        echo "<a href='resultado-login.php'>Ir a resultado-login</a>";
    } else {
        echo "<p>Acceso denegado.</p>";
    }
}
?>

<form method="POST" action="inicio.php">
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Iniciar sesión">
</form>
</body>
</html>