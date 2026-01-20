# CHANGELOG

## [1.0.0] - 2026-01-20

### ✅ Agregado
- Sistema de autenticación seguro con hashing de contraseñas (bcrypt)
- Gestión centralizada de base de datos con variables de entorno
- Estructura de proyecto organizada (config, db, public, src)
- Interfaz responsive con CSS y JavaScript
- Módulos de registro: educadores, adultos, embarazadas
- Sistema de gestión de exámenes
- Descarga de documentos
- Proyección de trayectorias educativas
- Navbar dinámico
- Scripts de base de datos (inicialización, migraciones, seeds)

### 🔒 Seguridad
- Contraseñas hasheadas con `password_hash()` (algoritmo bcrypt)
- Verificación de contraseñas con `password_verify()`
- Migración automática de contraseñas en texto plano
- Variables sensibles en `.env.example` (no se commitean)

### 📁 Estructura
- Centralización de DB en `config/database.php`
- Assets organizados en `public/assets/` (CSS, JS, imágenes)
- Vistas en `src/pages/`
- Scripts SQL en `db/`

### 📝 Documentación
- README.md completo con instrucciones de instalación
- .gitignore apropiado para el proyecto
- CHANGELOG detallado

## Notas de Desarrollo

### Completado
- ✅ Centralización de configuración de BD
- ✅ Implementación de seguridad en contraseñas
- ✅ Estructura de assets pública
- ✅ Sistema de autenticación

### Pendiente (v1.1.0 en adelante)
- Refactorización completa a patrón MVC
- Pruebas unitarias e integración
- API REST
- Dashboard mejorado
