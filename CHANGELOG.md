# CHANGELOG

## Unreleased
- Centralizada la configuración de base de datos en `config/database.php` (usa variables de entorno o valores locales por defecto).
- Añadido `.env.example` con variables de ejemplo para la BD.
- Reemplazadas instanciaciones directas de `PDO` en páginas por `require` a `config/database.php`.
- Movidas imágenes existentes (`logo.jpeg`, `grafica.png`) a `public/assets/img/` y añadidos placeholders SVG para imágenes faltantes.
- Creada estructura `public/assets/{img,css,js}` y ficheros mínimos `styles.css` y `scripts.js`.
- Implementado hashing de contraseñas en `src/pages/registro.php` y `password_verify` en `public/login.php` con migración automática para contraseñas en texto plano.
- README y documentación inicial añadida.
