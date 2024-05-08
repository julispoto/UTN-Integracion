CREATE TABLE `listado` (
  `firstname` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastname` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dni` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `listado` (`firstname`, `lastname`, `dni`, `email`, `city`) VALUES
('Carlo', 'Kelsow', '25488745', 'cmagno@gmail.com', 'Bayern'),
('Ana', 'Jumer', '33558745', 'amulate@hotmail.com', 'Montevideo'),
('Sama', 'Telsow', '41587455', 'strevis@hotmail.com', 'Oruro'),
('Ernest', 'Kuwi', '26535754', 'erompel@hotmail.com', 'Turin'),
('Julio', 'Pinto', '25987457', 'jpampa@yahoo.com', 'Cordoba'),
('Omar', 'Vidlom', '22659874', 'ovidlmo@gmail.com', 'Guayaquil');
COMMIT;

