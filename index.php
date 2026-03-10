<?php
// Configuración de variables
$nombreEstudiante = "José Alejandro Quezada"; // REEMPLAZA ESTO CON TU NOMBRE
$rutaImagenIA = "Imagen.webp"; // Asegúrate de que la imagen generada tenga este nombre
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primera Aplicación PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f9;
            padding: 50px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            display: inline-block;
        }
        h1 { color: #333; }
        img {
            max-width: 400px;
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1><?php echo "Hola mundo, soy " . $nombreEstudiante; ?></h1>
        
        <p>Esta es una imagen generada con Inteligencia Artificial:</p>
        
        <img src="<?php echo $rutaImagenIA; ?>" alt="Imagen generada por IA">
    </div>

</body>
</html>