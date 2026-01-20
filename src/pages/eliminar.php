<?php
session_start();
$cfg = require __DIR__ . '/../../config/app.php';
$loginUrl = $cfg['base_public'] . 'login.php';
if (!isset($_SESSION["usuario"])) {
    header("Location: " . $loginUrl);
    exit;
}
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
    $pdo = require __DIR__ . '/../../config/database.php';
        $stmt = $pdo->prepare("DELETE FROM EXAMENES WHERE FolioExamen = ?");
        $stmt->execute([$_POST["folio"]]);
        $mensaje = "Examen eliminado correctamente.";
    } catch (PDOException $e) {
        $mensaje = "Error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Eliminar Examen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once __DIR__ . '/navbar.php'; ?>
    <main class="container">
        <br/><br/><br/><br/>
        <h1>Eliminar Examen</h1>
        <form method="POST" class="mt-3">
            <div class="mb-3">
                <label for="folio" class="form-label">Folio del examen a eliminar:</label>
                <input type="number" class="form-control" id="folio" name="folio" aria-label="folio">
            </div>
            <button type="submit" class="btn btn-danger w-100">Eliminar</button>
        </form>
        <p><?php echo $mensaje; ?></p>
    </main>
</body>

</html>