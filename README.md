# ConafeLogin - Notas de desarrollo

Acciones realizadas hasta ahora:

- Centralizar DB: `config/database.php` (usa variables de entorno: DB_HOST, DB_NAME, DB_USER, DB_PASS).
- Estructura de assets pública en `public/assets/` con `img`, `css`, `js`.
- Se agregaron placeholders SVG para imágenes faltantes. Reemplazos realizados en `public/index.php`.
- Seguridad: ahora las contraseñas se guardan con `password_hash` y el login usa `password_verify` (se re-hash automáticamente en primer login cuando la contraseña estaba en texto plano).

Siguientes pasos recomendados (pendientes):
- Revisar todas las rutas relativas en archivos dentro de `src/pages/` y convertir la aplicación para servir todas las vistas desde `public/` (mejor práctica).
- Migrar datos reales a la base de datos local y sincronizar usuarios (si las contraseñas estaban en texto plano, se actualizarán automáticamente al iniciar sesión).
- Reemplazar consultas SQL directas por métodos en `src/Model/` y mover lógica a `src/Controller/` (refactor a MVC ligero).
- Agregar pruebas básicas (integración/funcionales) para login y CRUD de exámenes.

Cómo usar localmente:
1) Copiar `.env.example` a `.env` y personalizar variables.
2) Asegurarse de tener la BD creada (por defecto `conafe_db`) y permisos de usuario.
3) Iniciar Apache/XAMPP y abrir `http://localhost/ConafeLogin/public/`.

---

## Frontend estático + API PHP (XAMPP)

Se añadió una versión simple de frontend estático (HTML/CSS/JS) en la raíz y endpoints PHP en `public/api/` que permiten registrar y autenticar usuarios contra MySQL local.

Pasos rápidos para probarlo (Windows + XAMPP):

1. Arranca Apache y MySQL desde el XAMPP Control Panel.
2. Importa `db/xampp_init.sql` desde phpMyAdmin (o ejecutar el SQL manualmente) para crear la BD `conafe_db` y la tabla `users`.
3. Asegúrate de que la carpeta del proyecto esté en `C:/xampp/htdocs/ConafeLogin`.
4. Revisa y, si hace falta, edita `public/api/db.php` para ajustar `DB_HOST`, `DB_USER`, `DB_PASS` y `DB_NAME`.
5. Abre `http://localhost/ConafeLogin/index.html` en el navegador. Regístrate y usa el formulario de login.

Notas:
- Las llamadas de JS apuntan a `public/api/auth.php` y requieren que Apache sirva PHP (no funciona por `file://`).
- Para producción se debe añadir manejo de sesiones, validaciones y medidas de seguridad adicionales.

