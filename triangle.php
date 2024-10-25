
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Generador de Triángulos</title>
</head>
<body>
<form method="post" action="">
<label for="altura">Ingresa la altura del triángulo:</label>
<input type="number" id="altura" name="altura" required min="0">
<input type="submit" value="Generar">
</form>
 
    <?php if ($altura > 0): ?>
<h2>Triángulo de altura <?php echo $altura; ?>:</h2>
<?php echo $triangleGenerator->generateTriangle($altura); ?>
<?php endif; ?>
</body>
</html>