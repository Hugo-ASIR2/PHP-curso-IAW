!DOCTYPE html>
<html>
<body>

 

<h2>Resultado Login</h2>

 

<?php
    $role = ""; // Define the role here

 

    if(isset($_POST['role'])) {
        if($_POST['role'] == 'Administrador') {
            echo '<a href="data.php">Data</a>';
            echo "<p>Autorizado para modificar datos</p>";
        } elseif($_POST['role'] == 'Usuario') {
            echo '<a href="data.php">Data</a>';
            echo "<p>Solo visualización de datos</p>";
        } else {
            echo "Acceso denegado a datos";
        }
    }
?>

 

<form method="post" action="">
<input type="text" name="role">
<input type="submit" value="Submit">
</form>

 

</body>
</html>