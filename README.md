# ConafeLogin - Sistema de Gestión Educativa

Sistema web para la gestión de registros educativos, exámenes y seguimiento de beneficiarios.

## Características

- ✅ Autenticación segura con contraseñas hasheadas (`password_hash`)
- ✅ Gestión centralizada de base de datos
- ✅ Interfaz web responsive
- ✅ Registro de múltiples tipos de usuarios (educadores, adultos, embarazadas)
- ✅ Control de exámenes y documentos
- ✅ Proyección de trayectorias educativas

## Requisitos

- PHP 7.4 o superior
- MySQL 5.7 o superior
- Servidor web (Apache, Nginx)

## Instalación

### 1. Clonar el repositorio
```bash
git clone https://github.com/chiemilio/micloplamiacion.githib.io.git
cd micloplamiacion.githib.io
```

### 2. Configurar variables de entorno
```bash
cp .env.example .env
```

Edita `.env` con tus credenciales:
```
DB_HOST=localhost
DB_NAME=conafe_db
DB_USER=root
DB_PASS=tu_contraseña
```

### 3. Crear base de datos
```bash
mysql -u root -p < db/init.sql
```

### 4. Iniciar servidor
```bash
php -S localhost:8000 -t public/
```

Abre en tu navegador: `http://localhost:8000`

## Estructura del Proyecto

```
├── config/          # Configuración (DB, APP)
├── db/              # Scripts SQL (init, migraciones, seeds)
├── public/          # Punto de entrada público
│   ├── index.php    # Página principal
│   ├── login.php    # Login
│   ├── assets/      # CSS, JS, imágenes
├── src/
│   └── pages/       # Vistas PHP
├── .env.example     # Variables de entorno (ejemplo)
└── README.md        # Este archivo
```

## Seguridad

- Las contraseñas se almacenan con `password_hash()` (bcrypt)
- Las migraciones automáticas actualizarán contraseñas en texto plano
- Variables sensibles en `.env` (no se commiteará)

## Próximas Mejoras

- [ ] Refactorización completa a patrón MVC
- [ ] Pruebas unitarias e integración
- [ ] API REST
- [ ] Dashboard mejorado

## Licencia

Proyecto privado - CONAFE

## Contacto

Para preguntas o soporte, contacta al equipo de desarrollo.
