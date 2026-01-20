<?php
session_start();
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
    $pdo = require __DIR__ . '/../config/database.php';

        $id = $_POST["idusuario"];
        $password = $_POST["password"];

        $stmt = $pdo->prepare("SELECT * FROM USUARIOS WHERE IDUsuario = ?");
        $stmt->execute([$id]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$usuario) {
            $mensaje = "Usuario no registrado.";
        } elseif (password_verify($password, $usuario["Password"])) {
            // Contraseña segura almacenada
            $_SESSION["usuario"] = $usuario;
            $mensaje = "¡Bienvenido " . $usuario["Nombre"] . " " . $usuario["ApellidoPaterno"] . " " . $usuario["ApellidoMaterno"] . "! Has ingresado como " . $usuario["TipoUsuario"] . ".";
        } elseif ($usuario["Password"] === $password) {
            // Caso legado (contraseña almacenada en texto plano): re-hash y actualizar
            $newHash = password_hash($password, PASSWORD_DEFAULT);
            $update = $pdo->prepare("UPDATE USUARIOS SET Password = ? WHERE IDUsuario = ?");
            $update->execute([$newHash, $id]);
            $usuario["Password"] = $newHash;
            $_SESSION["usuario"] = $usuario;
            $mensaje = "¡Bienvenido " . $usuario["Nombre"] . " " . $usuario["ApellidoPaterno"] . " " . $usuario["ApellidoMaterno"] . "! Has ingresado como " . $usuario["TipoUsuario"] . ".";
        } else {
            $mensaje = "Contraseña incorrecta.";
        }
    } catch (PDOException $e) {
        $mensaje = "Error en la base de datos: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>

    <?php include __DIR__ . '/../src/pages/navbar.php'; ?>

    <div class="container mt-5 pt-3">
        <h1>Inicio de sesión</h1>
        <?php if (!isset($_SESSION["usuario"])): ?>
            <form method="POST" action="" class="mt-4 p-4 border rounded bg-light" style="max-width: 400px; margin:auto;">
                <div class="mb-3">
                    <label for="idusuario" class="form-label">ID Usuario:</label>
                    <input type="text" class="form-control" id="idusuario" name="idusuario" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
            </form>
        <?php endif; ?>
        <p><?php echo $mensaje; ?></p>
    </div>

</body>
</html>
