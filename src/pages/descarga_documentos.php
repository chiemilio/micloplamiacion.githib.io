<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Descarga de Documentos - SIIINAFE</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Descarga de Documentos</h1>
    <form action="" method="post">
        <label>Entidad:</label>
        <input type="text" name="entidad" required>
        <br>
        <label>CURP:</label>
        <input type="text" name="curp">
        <br>
        <label>No. Control:</label>
        <input type="text" name="no_control">
        <br>
        <label>CCT:</label>
        <input type="text" name="cct">
        <br>
        <label>Ciclo Escolar:</label>
        <input type="text" name="ciclo_escolar" required>
        <br>
        <label>Documento a emitir:</label>
        <select name="documento" required>
            <option value="constancia_inscripcion">Constancia de Inscripción</option>
            <option value="constancia_estudios">Constancia de Estudios</option>
            <option value="constancia_baja">Constancia de Baja</option>
            <option value="constancia_traslado">Constancia de Traslado</option>
            <option value="buena_conducta">Carta de Buena Conducta</option>
            <option value="boleta_preescolar">Boleta de Evaluación Preescolar</option>
            <option value="boleta_primaria">Boleta de Evaluación Primaria</option>
            <option value="boleta_secundaria">Boleta Evaluación Secundaria</option>
            <option value="certificado_preescolar">Certificado de Terminación Preescolar</option>
            <option value="certificado_primaria">Certificado de Terminación Primaria</option>
            <option value="certificado_secundaria">Certificado de Terminación Secundaria</option>
        </select>
        <br>
        <button type="submit">Buscar y Descargar</button>
    </form>
</body>
</html>
