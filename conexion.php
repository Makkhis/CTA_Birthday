<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conexion con la db</title>
    </head>

    <body>
        <?php
        $enlace = mysql_connect("localhost","root","","db");

        if(!$enlace){
            die("No pudo conectarse". mysqli_error());
        }
        echo "Conexion exitosa"
        mysqli_close($enlace);
        ?>
    </body>

</html>