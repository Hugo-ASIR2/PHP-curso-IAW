<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Hugo" content="Nombre del autor" />
    <title>Data</title>

</head>


<body>

<?php
    $rol = 'Administrador';
    if ($rol == 'Administrador'){

        echo '<h3 style="color:green">Puedes modificar datos</h3>';

        echo '<br>';

        echo '<a href="data.php">DATOS</a>';
    }



    else{
        echo '<h3 style="color:red">Unicamente puedes visualizar los datos</h3>';
        echo '<a href="data.php">DATOS</a>';
    }
?>

</body>





</html>
