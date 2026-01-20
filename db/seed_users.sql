-- Seed: 20 usuarios con roles distintos y contraseña Admin123# (hash reusado)
USE `if0_39852454_conafe_db`;

INSERT INTO `USUARIOS` (IDUsuario, Nombre, ApellidoPaterno, ApellidoMaterno, Edad, Sexo, Email, Telefono, TipoUsuario, Password)
VALUES
('user01','Ana','Gonzalez','Lopez',28,'F','user01@example.com','5550000001','CE','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user02','Luis','Martinez','Perez',34,'M','user02@example.com','5550000002','ES','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user03','Mariana','Rodriguez','Sanchez',29,'F','user03@example.com','5550000003','AD','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user04','Carlos','Hernandez','Gomez',41,'M','user04@example.com','5550000004','TE','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user05','Sofía','Lopez','Diaz',23,'F','user05@example.com','5550000005','SU','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user06','Diego','Torres','Molina',37,'M','user06@example.com','5550000006','MG','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user07','Lucía','Vargas','Ramos',31,'F','user07@example.com','5550000007','ST','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user08','Pablo','Castro','Navarro',26,'M','user08@example.com','5550000008','IT','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user09','Valeria','Mendez','Ortega',33,'F','user09@example.com','5550000009','AC','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user10','Raúl','Vega','Cruz',45,'M','user10@example.com','5550000010','PR','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user11','Isabel','Soto','Ayala',27,'F','user11@example.com','5550000011','CO','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user12','Jorge','Paredes','León',39,'M','user12@example.com','5550000012','HR','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user13','Elena','Cárdenas','Fuentes',32,'F','user13@example.com','5550000013','FN','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user14','Mateo','Ríos','Paz',30,'M','user14@example.com','5550000014','RS','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user15','Camila','Herrera','Cortés',22,'F','user15@example.com','5550000015','OP','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user16','Fernando','Montero','Salas',44,'M','user16@example.com','5550000016','QA','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user17','Nuria','Beltrán','López',35,'F','user17@example.com','5550000017','UX','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user18','Hugo','Salcedo','Vera',28,'M','user18@example.com','5550000018','PM','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user19','Marisol','Gutiérrez','Ibarra',38,'F','user19@example.com','5550000019','SA','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK'),
('user20','Óscar','Benítez','Sierra',50,'M','user20@example.com','5550000020','VP','$2y$10$52CFERs5xO9zcYVpoyL.F.smPcQ2iwN/BSS3PhFoP7dDBowNmARfK')
ON DUPLICATE KEY UPDATE IDUsuario = IDUsuario;
