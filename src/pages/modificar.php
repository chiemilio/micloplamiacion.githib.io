<?php
session_start();
$cfg = require __DIR__ . '/../../config/app.php';
$loginUrl = $cfg['base_public'] . 'login.php';
if (!isset($_SESSION["usuario"])) {
    header("Location: " . $loginUrl);
    exit;
}
$mensaje = "";
try {
    $pdo = require __DIR__ . '/../../config/database.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stmt = $pdo->prepare("UPDATE EXAMENES SET Asignatura=?, DocenteAsignatura=?, FechaAplicacion=?, HoraAplicacion=?, AulaAplicacion=? WHERE FolioExamen=?");
        $stmt->execute([
            $_POST["asignatura"],
            $_POST["docente"],
            $_POST["fecha"],
            $_POST["hora"],
            $_POST["aula"],
            $_POST["folio"]
        ]);
        $mensaje = "Examen modificado correctamente.";
    }
    $stmt = $pdo->query("SELECT * FROM EXAMENES");
    $examenes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Modificar Examen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once __DIR__ . '/navbar.php'; ?>
    <h1>Modificar Examen</h1>
    <form method="POST">
            <div class="mb-3">
                <label for="folio" class="form-label">Folio:</label>
                <input type="number" class="form-control" id="folio" name="folio">
            </div>
            <div class="mb-3">
                <label for="asignatura" class="form-label">Asignatura:</label>
                <input type="text" class="form-control" id="asignatura" name="asignatura">
            </div>
            <div class="mb-3">
                <label for="docente" class="form-label">Docente:</label>
                <input type="text" class="form-control" id="docente" name="docente">
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha:</label>
                <input type="date" class="form-control" id="fecha" name="fecha">
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora:</label>
                <input type="time" class="form-control" id="hora" name="hora">
            </div>
            <div class="mb-3">
                <label for="aula" class="form-label">Aula:</label>
                <input type="text" class="form-control" id="aula" name="aula">
            </div>
            <button type="submit" class="btn btn-warning w-100">Modificar</button>
        </form>
    <p><?php echo $mensaje; ?></p>
</body>

</html>