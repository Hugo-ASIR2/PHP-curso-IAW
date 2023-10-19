<!DOCTYPE html>
<html>
<body>

 

<h2>Inicio</h2>

 

<?php
    $password = ""; // Define your password here

 

    if(isset($_POST['password']) && $_POST['password'] == $password) {
        echo '<a href="resultado-login.php">Resultado Login</a>';
    } else {
        echo "Acceso denegado";
    }
?>

 

<form method="post" action="">
<input type="password" name="password">
<input type="submit" value="Submit">
</form>

 

</body>
</html>