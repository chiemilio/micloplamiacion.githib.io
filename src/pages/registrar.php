<?php
session_start();
$cfg = require __DIR__ . '/../../config/app.php';
$loginUrl = $cfg['base_public'] . 'login.php';
if (!isset($_SESSION["usuario"])) {
    header("Location: " . $loginUrl);
    exit;
}
?>
<?php include_once __DIR__ . '/navbar.php'; ?>
<?php
$mensaje = "";
// Inicializar variables para mantener valores si hay error
$idusuario = $asignatura = $docente = $fecha = $hora = $aula = $tipo = $observaciones = '';
$duracion = 0;
$alertType = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $pdo = require __DIR__ . '/../../config/database.php';

        // Recolectar y sanitizar
        $idusuario = trim($_POST["idusuario"] ?? '');
        $asignatura = trim($_POST["asignatura"] ?? '');
        $docente = trim($_POST["docente"] ?? '');
        $fecha = $_POST["fecha"] ?? '';
        $hora = $_POST["hora"] ?? '';
        $aula = trim($_POST["aula"] ?? '');
        $tipo = $_POST["tipo"] ?? 'Parcial';
        $duracion = intval($_POST["duracion"] ?? 0);
        $observaciones = trim($_POST["observaciones"] ?? '');

        // Validación básica
        $errores = [];
        if ($idusuario === '') $errores[] = "El ID de usuario es obligatorio.";
        if ($asignatura === '') $errores[] = "La asignatura es obligatoria.";
        if ($fecha === '') $errores[] = "La fecha de aplicación es obligatoria.";
        if ($duracion < 0) $errores[] = "La duración no puede ser negativa.";

        if (count($errores) === 0) {
            $stmt = $pdo->prepare("INSERT INTO EXAMENES (IDUsuario, Asignatura, DocenteAsignatura, FechaAplicacion, HoraAplicacion, AulaAplicacion, TipoExamen, Duracion, Observaciones) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$idusuario, $asignatura, $docente, $fecha, $hora, $aula, $tipo, $duracion, $observaciones]);
            $mensaje = "Examen registrado correctamente.";
            $alertType = 'success';
            // reset form values
            $idusuario = $asignatura = $docente = $fecha = $hora = $aula = $tipo = $observaciones = '';
            $duracion = 0;
        } else {
            $mensaje = implode("<br>", $errores);
            $alertType = 'danger';
        }

    } catch (PDOException $e) {
        $mensaje = "Error: " . $e->getMessage();
        $alertType = 'danger';
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registrar Examen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once __DIR__ . '/navbar.php'; ?>
    <h1>Registrar Examen</h1>
    <div class="container d-flex justify-content-center">
        <?php if (!empty($mensaje)): ?>
            <div class="alert alert-<?php echo $alertType ?: 'info'; ?> w-100" role="alert" style="max-width:900px;">
                <?php echo $mensaje; ?>
            </div>
        <?php endif; ?>
        <form method="POST" class="w-100" style="max-width:900px;">
            <div class="row g-3">
                <div class="col-lg-4 col-md-6 col-12">
                    <label for="idusuario" class="form-label">ID Usuario:</label>
                    <input type="text" class="form-control" id="idusuario" name="idusuario" value="<?php echo htmlspecialchars($idusuario); ?>" aria-label="ID Usuario" required>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <label for="asignatura" class="form-label">Asignatura:</label>
                    <input type="text" class="form-control" id="asignatura" name="asignatura" value="<?php echo htmlspecialchars($asignatura); ?>" aria-label="Asignatura" required>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <label for="docente" class="form-label">Docente Asignatura:</label>
                    <input type="text" class="form-control" id="docente" name="docente" value="<?php echo htmlspecialchars($docente); ?>" aria-label="Docente">
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <label for="fecha" class="form-label">Fecha Aplicación:</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo htmlspecialchars($fecha); ?>" aria-label="Fecha" required>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <label for="hora" class="form-label">Hora Aplicación:</label>
                    <input type="time" class="form-control" id="hora" name="hora" value="<?php echo htmlspecialchars($hora); ?>" aria-label="Hora">
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <label for="aula" class="form-label">Aula Aplicación:</label>
                    <input type="text" class="form-control" id="aula" name="aula" value="<?php echo htmlspecialchars($aula); ?>" aria-label="Aula">
                </div>
            </div>

            <div class="row g-3 mt-2">
                <div class="col-md-4 col-12">
                    <label for="tipo" class="form-label">Tipo de examen:</label>
                    <select id="tipo" name="tipo" class="form-select" aria-label="Tipo de examen">
                        <option value="Parcial" <?php echo ($tipo === 'Parcial') ? 'selected' : ''; ?>>Parcial</option>
                        <option value="Final" <?php echo ($tipo === 'Final') ? 'selected' : ''; ?>>Final</option>
                        <option value="Recuperacion" <?php echo ($tipo === 'Recuperacion') ? 'selected' : ''; ?>>Recuperación</option>
                    </select>
                </div>
                <div class="col-md-4 col-12">
                    <label for="duracion" class="form-label">Duración (min):</label>
                    <input type="number" min="0" class="form-control" id="duracion" name="duracion" value="<?php echo htmlspecialchars($duracion); ?>" aria-label="Duración en minutos">
                </div>
                <div class="col-md-4 col-12">
                    <label for="observaciones" class="form-label">Observaciones:</label>
                    <input type="text" class="form-control" id="observaciones" name="observaciones" value="<?php echo htmlspecialchars($observaciones); ?>" aria-label="Observaciones">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <button type="submit" class="btn btn-success w-100">Registrar</button>
                </div>
            </div>
        </form>
    </div>
    <p></p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>
</body>

</html>