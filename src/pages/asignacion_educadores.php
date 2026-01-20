<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Asignación de Educadores - SIIINAFE</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Asignación de Educadores Comunitarios</h1>
    <form action="" method="post">
        <label>Nombre del Educador:</label>
        <input type="text" name="nombre_educador" required>
        <br>
        <label>Localidad:</label>
        <input type="text" name="localidad" required>
        <br>
        <label>Modalidad:</label>
        <select name="modalidad">
            <option value="practica">Práctica</option>
            <option value="itinerante">Itinerante</option>
            <option value="colectivo">Colectivo</option>
        </select>
        <br>
        <button type="submit">Asignar</button>
    </form>
</body>
</html>
