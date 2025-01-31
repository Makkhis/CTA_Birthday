<?php
include 'conexion.php';

// Obtener la fecha actual en formato MM-DD
$fechaHoy = date('m-d');

// Buscar el usuario que cumple años hoy
$sql = "SELECT name FROM user WHERE DATE_FORMAT(cumpleanios, '%m-%d') = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $fechaHoy);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombreCumple = $row['name'];
} else {
    $nombreCumple = "[Nombre]";
}
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title>Felicitación de Cumpleaños</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🎉 ¡Feliz Cumpleaños, <span class="nombre-cumpleanero"><?php echo htmlspecialchars($nombreCumple); ?></span>! 🎉</h1>
        <img src="https://tlr.stripocdn.email/content/guids/CABINET_b54797fc68edcecf4f6b2835e7bcba32/images/36321522405737710.gif" alt="Regalo" title="Regalo" width="300">
        <p>Hoy es un día especial para ti, y queremos que sepas cuánto valoramos tu presencia en nuestro equipo. ¡Disfruta tu día al máximo! 🎂</p>
        <p style="color:#666;font-size:14px; font-style:italic;">Saludos cordiales, <br>El equipo de Run App</p>
        
        <div class="surprise">
            <h2>🎁 ¡Sorpresa! 🎁</h2>
            <h3>Cupón válido para unos tacos con el maya 🌮</h3>
        </div>
        
        <footer>
            <p>&copy; 2025 CTA</p>
            <p>Recibes este correo porque formas parte de nuestro equipo y queremos celebrar contigo. 🎉</p>
        </footer>
    </div>
</body>
</html>

