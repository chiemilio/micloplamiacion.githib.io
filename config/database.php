<?php
// Configuración de base de datos centralizada
// Lee variables de entorno si están disponibles, si no usa valores locales por defecto
$host = getenv('DB_HOST') ?: 'sql311.infinityfree.com';
$db   = getenv('DB_NAME') ?: 'if0_39852454_conafe_db';
$user = getenv('DB_USER') ?: 'if0_39852454';
$pass = getenv('DB_PASS') ?: 'D30UcrTSOknt8';
$charset = 'utf8mb4';
$dsn = "mysql:host={$host};dbname={$db};charset={$charset}";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    // Mensaje mínimo para no exponer credenciales en producción
    die('Fallo de conexión a la base de datos: ' . $e->getMessage());
}

return $pdo;
