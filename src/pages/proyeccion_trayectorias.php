<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyección de Trayectorias - SIIINAFE</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Proyección de Trayectorias</h1>
    <form action="" method="post">
        <label>Entidad:</label>
        <input type="text" name="entidad" required>
        <br>
        <label>Municipio:</label>
        <input type="text" name="municipio" required>
        <br>
        <label>Localidad:</label>
        <input type="text" name="localidad" required>
        <br>
        <label>Nivel educativo:</label>
        <select name="nivel">
            <option value="preescolar">Preescolar</option>
            <option value="primaria">Primaria</option>
            <option value="secundaria">Secundaria</option>
            <option value="adultos">Adultos</option>
        </select>
        <br>
        <label>Trayectoria completa:</label>
        <input type="checkbox" name="trayectoria_completa">
        <br>
        <button type="submit">Registrar Proyección</button>
    </form>
</body>
</html>
