<?php
// Barra de navegación Bootstrap 5 reutilizable
// Asegura que la sesión esté iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Usar configuración central para rutas base (más robusto)
$cfg = require __DIR__ . '/../../config/app.php';
$prefix_public = $cfg['base_public'];
$prefix_src = $cfg['base_src'];

$current = basename($_SERVER['SCRIPT_NAME'] ?? '');
if (!function_exists('active')) {
    function active($name) {
        global $current;
        return ($current === $name) ? 'active' : '';
    }
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo $prefix_public; ?>index.php">CONAFE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <?php if (!isset($_SESSION["usuario"])): ?>
          <li class="nav-item"><a class="nav-link <?php echo active('index.php'); ?>" href="<?php echo $prefix_public; ?>index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link <?php echo active('registro.php'); ?>" href="<?php echo $prefix_src; ?>registro.php">Registrarse</a></li>
          <li class="nav-item"><a class="nav-link <?php echo active('login.php'); ?>" href="<?php echo $prefix_public; ?>login.php">Iniciar sesión</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link <?php echo active('index.php'); ?>" href="<?php echo $prefix_public; ?>index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link <?php echo active('consultar.php'); ?>" href="<?php echo $prefix_src; ?>consultar.php">Consultar</a></li>
          <?php if (isset($_SESSION["usuario"]) && isset($_SESSION["usuario"]["TipoUsuario"]) && $_SESSION["usuario"]["TipoUsuario"] === "CE"): ?>
            <li class="nav-item"><a class="nav-link <?php echo active('registrar.php'); ?>" href="<?php echo $prefix_src; ?>registrar.php">Registrar</a></li>
            <li class="nav-item"><a class="nav-link <?php echo active('modificar.php'); ?>" href="<?php echo $prefix_src; ?>modificar.php">Modificar</a></li>
            <li class="nav-item"><a class="nav-link <?php echo active('eliminar.php'); ?>" href="<?php echo $prefix_src; ?>eliminar.php">Eliminar</a></li>
          <?php elseif (isset($_SESSION["usuario"]) && isset($_SESSION["usuario"]["TipoUsuario"]) && $_SESSION["usuario"]["TipoUsuario"] === "ES"): ?>
            <li class="nav-item"><a class="nav-link <?php echo active('registro.php'); ?>" href="<?php echo $prefix_src; ?>registro.php">Registrar</a></li>
            <li class="nav-item"><a class="nav-link <?php echo active('login.php'); ?>" href="<?php echo $prefix_public; ?>login.php">Inicio de sesión</a></li>
          <?php endif; ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo $prefix_public; ?>logout.php">Salir</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>