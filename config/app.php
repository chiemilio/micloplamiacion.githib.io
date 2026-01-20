<?php
// Configuración mínima de rutas base para la aplicación.
// Intenta calcular la ruta del proyecto basada en SCRIPT_NAME.
$script = $_SERVER['SCRIPT_NAME'] ?? '';
$segments = explode('/', trim($script, '/'));
$project = $segments[0] ?? '';
// Si no detecta correctamente, usa una alternativa (ruta relativa a public)
$basePublic = $project ? '/' . $project . '/public/' : '/public/';
$baseSrc = $project ? '/' . $project . '/src/pages/' : '/src/pages/';

return [
    'base_public' => $basePublic,
    'base_src' => $baseSrc,
];
