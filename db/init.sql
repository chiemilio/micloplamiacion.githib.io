-- Script de inicialización para base de datos InfinityFree `if0_39852454_conafe_db`
-- Ejecutar con: mysql -u if0_39852454 -h sql311.infinityfree.com < db/init.sql  (o usar phpMyAdmin)

CREATE DATABASE IF NOT EXISTS `if0_39852454_conafe_db` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `if0_39852454_conafe_db`;

-- Tabla de usuarios
CREATE TABLE IF NOT EXISTS `USUARIOS` (
  `IDUsuario` VARCHAR(64) NOT NULL,
  `Nombre` VARCHAR(100) NOT NULL,
  `ApellidoPaterno` VARCHAR(100) NOT NULL,
  `ApellidoMaterno` VARCHAR(100) NOT NULL,
  `Edad` INT UNSIGNED DEFAULT NULL,
  `Sexo` ENUM('M','F','O') DEFAULT 'O',
  `Email` VARCHAR(150) DEFAULT NULL,
  `Telefono` VARCHAR(30) DEFAULT NULL,
  `TipoUsuario` VARCHAR(10) NOT NULL DEFAULT 'ES',
  `Password` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`IDUsuario`),
  UNIQUE KEY `idx_email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tabla de examenes
CREATE TABLE IF NOT EXISTS `EXAMENES` (
  `FolioExamen` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `IDUsuario` VARCHAR(64) NOT NULL,
  `Asignatura` VARCHAR(255) NOT NULL,
  `DocenteAsignatura` VARCHAR(255) DEFAULT NULL,
  `FechaAplicacion` DATE DEFAULT NULL,
  `HoraAplicacion` TIME DEFAULT NULL,
  `AulaAplicacion` VARCHAR(100) DEFAULT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`FolioExamen`),
  KEY `idx_idusuario` (`IDUsuario`),
  CONSTRAINT `fk_examen_usuario` FOREIGN KEY (`IDUsuario`) REFERENCES `USUARIOS`(`IDUsuario`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Usuario de ejemplo (contraseña: Admin123#)
INSERT INTO `USUARIOS` (IDUsuario, Nombre, ApellidoPaterno, ApellidoMaterno, Edad, Sexo, Email, Telefono, TipoUsuario, Password)
VALUES ('admin','Admin','Control','Escuela',30,'O','admin@example.com','0000000000','CE','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK')
ON DUPLICATE KEY UPDATE IDUsuario = IDUsuario;
