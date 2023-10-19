<!DOCTYPE html>
<html>
<body>

 

<h2>Data</h2>

 

<?php
    if(isset($_POST['role'])) {
        if($_POST['role'] == 'Administrador') {
            echo "<p>Autorización para modificar datos</p>";
            echo '<a href="data.php">Data</a>';
        } elseif($_POST['role'] == 'Usuario') {
            echo "<p>Solo visualización de datos</p>";
        }
    }
?>

 

</body>
</html>