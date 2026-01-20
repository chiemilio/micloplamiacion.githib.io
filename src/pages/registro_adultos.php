<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Adultos - SIIINAFE</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Registro de Adultos</h1>
    <form action="" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label>Fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required>
        <br>
        <label>Centro de Trabajo (L + clave):</label>
        <input type="text" name="cct" required>
        <br>
        <label>Documento probatorio:</label>
        <select name="documento">
            <option value="ine">Credencial de elector</option>
            <option value="otro">Otro</option>
        </select>
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
