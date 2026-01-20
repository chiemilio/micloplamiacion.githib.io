<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Embarazadas - SIIINAFE</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Registro de Embarazadas</h1>
    <form action="" method="post">
        <label>Nombre (si es embarazada, se generará automáticamente):</label>
        <input type="text" name="nombre" placeholder="Nonato 2500001" required>
        <br>
        <label>¿Es mujer embarazada?</label>
        <input type="checkbox" name="embarazada">
        <br>
        <label>Centro de Trabajo:</label>
        <input type="text" name="cct" required>
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
