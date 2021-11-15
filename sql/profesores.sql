-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 15, 2021 at 05:04 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profesores`
--

-- --------------------------------------------------------

--
-- Table structure for table `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `seccional` varchar(40) NOT NULL,
  `facultad` varchar(40) NOT NULL,
  `cargo` varchar(40) NOT NULL,
  `salario` int(20) NOT NULL,
  `fecha_comienzo` date NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profesores`
--

INSERT INTO `profesores` (`id`, `id_empleado`, `apellido`, `nombre`, `seccional`, `facultad`, `cargo`, `salario`, `fecha_comienzo`, `fecha_nacimiento`) VALUES
(24, 1968, 'Burgos', 'Jeronimo', 'Palmira', 'Administración', 'Administrativo', 3200000, '1982-04-05', '1951-09-28'),
(25, 1674, 'Villegas', 'Estefania', 'Palmira', 'Administración', 'Docente', 3200000, '1992-03-25', '1964-01-17'),
(26, 1516, 'Fernandez', 'Guillermo', 'Palmira', 'Administración', 'Docente', 4500000, '1985-03-06', '1963-06-26'),
(27, 1330, 'Ramirez', 'Eliana', 'Palmira', 'Administración', 'Docente', 3200000, '1989-02-14', '1964-05-17'),
(28, 1657, 'Carmona', 'Jose', 'Palmira', 'Administración', 'Docente', 3200000, '1987-12-06', '1963-10-10'),
(29, 1573, 'De santis', 'Marcela', 'Palmira', 'Administración', 'Aux. Administrativo', 1500000, '1988-07-07', '1960-05-31'),
(30, 1658, 'Franco', 'Daniela', 'Palmira', 'Administración', 'Docente', 3200000, '1988-06-06', '1963-10-14'),
(31, 1078, 'Cortes', 'Rafael', 'Palmira', 'Diseño', 'Administrativo', 4200000, '1986-04-01', '1962-11-21'),
(32, 1695, 'Berrio', 'Camilo', 'Palmira', 'Diseño', 'Docente', 3200000, '1984-10-20', '1960-01-05'),
(33, 1285, 'Arias', 'Francisco', 'Palmira', 'Diseño', 'Docente', 3200000, '1984-12-27', '1962-12-22'),
(34, 1284, 'Merizalde', 'Antonio', 'Palmira', 'Diseño', 'Docente', 3200000, '1985-01-04', '1962-12-11'),
(35, 1517, 'Restrepo', 'Karen', 'Palmira', 'Diseño', 'Aux. Administrativo', 1500000, '1985-02-26', '1963-07-07'),
(36, 1674, 'Lemus', 'David', 'Palmira', 'Diseño', 'Docente', 3200000, '1990-04-08', '1962-09-12'),
(37, 1056, 'Santana', 'Javier', 'Monteria', 'Comunicación', 'Administrativo', 5600000, '1979-10-25', '1937-08-24'),
(38, 1977, 'Saldarriaga', 'Virginia', 'Monteria', 'Comunicación', 'Docente', 4200000, '1991-09-09', '1960-10-13'),
(39, 1725, 'Posada', 'Sergio', 'Monteria', 'Comunicación', 'Docente', 5600000, '1978-02-02', '1954-06-02'),
(40, 1675, 'Zea ', 'Jorge', 'Monteria', 'Comunicación', 'Docente', 6500000, '1981-10-26', '1969-09-01'),
(41, 1968, 'Diaz ', 'Mariana', 'Monteria', 'Comunicación', 'Docente', 3200000, '1993-01-01', '1969-05-19'),
(42, 1723, 'Giraldo', 'Esteban', 'Monteria', 'Ingeniería', 'Aux. Administrativo', 1350000, '1990-08-06', '1965-05-10'),
(43, 1076, 'Idarraga', 'Jorge', 'Monteria', 'Ingeniería', 'Aux. Administrativo', 1200000, '1979-07-30', '1940-09-08'),
(44, 1816, 'Simanca', 'Alejandro', 'Monteria', 'Ingeniería', 'Aux. Administrativo', 1600000, '1990-07-08', '1969-09-01'),
(45, 1154, 'Pulgarin', 'Angelina', 'Monteria', 'Ingeniería', 'Administrativo', 4100000, '1987-07-07', '1955-11-07'),
(46, 1294, 'Aguirre', 'Brenda', 'Monteria', 'Ingeniería', 'Docente', 3200000, '1984-09-06', '1954-09-05'),
(47, 1428, 'Tamayo', 'Gloria', 'Monteria', 'Ingeniería', 'Docente', 3200000, '1986-11-12', '1958-03-23'),
(48, 1814, 'Carmona ', 'Andrea', 'Monteria', 'Ingeniería', 'Docente', 3200000, '1989-03-04', '1969-08-17'),
(49, 1978, 'Diaz ', 'Lucero', 'Monteria', 'Ingeniería', 'Docente', 3200000, '1980-06-05', '1967-09-26'),
(50, 1531, 'Alzate', 'Angela', 'Monteria', 'Ingeniería', 'Técnico', 2800000, '1986-05-11', '1967-01-19'),
(51, 1931, 'Arango', 'Felipe', 'Medellín', 'Administración', 'Administrativo', 2560000, '1989-06-20', '1969-05-28'),
(52, 1932, 'Garces', 'Elena', 'Medellín', 'Administración', 'Administrativo', 2400000, '1989-06-12', '1949-06-08'),
(53, 1291, 'Uribe', 'Carmen', 'Medellín', 'Administración', 'Aux. Administrativo', 1350000, '1984-12-26', '1956-04-14'),
(54, 1530, 'Ospina', 'Daniel', 'Medellín', 'Administración', 'Docente', 1460000, '1991-01-20', '1967-01-15'),
(55, 1152, 'Peláez', 'Alberto', 'Medellín', 'Administración', 'Docente', 1350000, '1990-01-21', '1965-10-23'),
(56, 1079, 'Perez', 'Elena', 'Medellín', 'Administración', 'Docente', 1350000, '1986-03-24', '1962-12-02'),
(57, 1676, 'Carmona', 'Sebastian', 'Medellín', 'Administración', 'Docente', 1500000, '1981-10-18', '1969-09-12'),
(58, 1290, 'Cifuentes', 'Oscar', 'Medellín', 'Administración', 'Docente', 1350000, '1985-01-03', '1966-04-03'),
(59, 1961, 'Jaramillo', 'Santiago', 'Medellín', 'Administración', 'Docente', 1350000, '1986-11-05', '1965-04-02'),
(60, 1675, 'Melano', 'Luis', 'Medellín', 'Administración', 'Docente', 1350000, '1992-03-17', '1964-01-28'),
(61, 1368, 'Mendez', 'Tammy', 'Medellín', 'Administración', 'Docente', 1280000, '1983-03-11', '1959-05-08'),
(62, 1153, 'Ramirez', 'Tomas', 'Medellín', 'Administración', 'Técnico', 1350000, '1990-01-13', '1965-11-03'),
(63, 1960, 'Girando', 'Felipe', 'Medellín', 'Administración', 'Aux. Administrativo', 1350000, '1986-11-13', '1965-03-22'),
(64, 1908, 'Diez', 'Patricia', 'Medellín', 'Administración', 'Administrativo', 5600000, '1984-05-15', '1958-09-21'),
(65, 1011, 'Sierra', 'Luisa', 'Medellín', 'Administración', 'Docente', 2700000, '1986-02-03', '1964-11-21'),
(66, 1359, 'Vallejo', 'Sara', 'Medellín', 'Diseño', 'Docente', 2300000, '1990-08-09', '1960-06-07'),
(67, 1724, 'Guerrero', 'Alexandra', 'Medellín', 'Diseño', 'Docente', 2300000, '1978-02-10', '1954-05-22'),
(68, 1923, 'Guerra', 'Lisa', 'Medellín', 'Diseño', 'Docente', 2300000, '1986-11-27', '1961-03-07'),
(69, 1794, 'Rodríguez ', 'Ana Maria', 'Medellín', 'Diseño', 'Docente', 2300000, '1984-12-18', '1968-10-18'),
(70, 1558, 'Marulanda', 'Sofia', 'Medellín', 'Diseño', 'Docente', 2300000, '1982-10-16', '1965-09-26'),
(71, 1949, 'Palacio', 'Paula', 'Medellín', 'Diseño', 'Docente', 4100000, '1981-10-12', '1951-02-26'),
(72, 1311, 'Bermudez', 'Jesus', 'Medellín', 'Diseño', 'Docente', 3800000, '1986-09-26', '1964-11-13'),
(73, 1906, 'Toledo', 'Roberta', 'Medellín', 'Diseño', 'Aux. Administrativo', 1350000, '1989-09-28', '1960-09-02'),
(74, 1656, 'Arango', 'Tatiana', 'Medellín', 'Diseño', 'Administrativo', 2500000, '1987-12-14', '1963-09-29'),
(75, 1907, 'Acevedo', 'Melina', 'Medellín', 'Diseño', 'Administrativo', 2600000, '1989-09-20', '1960-09-13'),
(76, 1724, 'Cock', 'Cristina', 'Medellín', 'Diseño', 'Administrativo', 2960000, '1990-07-29', '1965-05-21'),
(77, 1301, 'Casadiegos', 'Manuela', 'Medellín', 'Diseño', 'Aux. Administrativo', 1350000, '1984-08-06', '1965-06-25'),
(78, 1292, 'Salamanca', 'Isabel', 'Medellín', 'Diseño', 'Administrativo', 4350000, '1987-11-20', '1956-04-18'),
(79, 1167, 'Arango', 'Juan', 'Medellín', 'Diseño', 'Administrativo', 5600000, '1991-04-18', '1970-06-27'),
(80, 1950, 'Granda', 'Luisa', 'Medellín', 'Diseño', 'Docente', 4900000, '1981-10-04', '1951-03-09'),
(81, 1792, 'Arango ', 'Monica', 'Medellín', 'Diseño', 'Técnico', 2000000, '1990-12-24', '1968-10-03'),
(82, 1977, 'Arroyave', 'Federico', 'Medellín', 'Diseño', 'Técnico', 1300000, '1980-06-13', '1967-09-15'),
(83, 1067, 'Lemos', 'Dalia', 'Medellín', 'Diseño', 'Técnico', 1100000, '1987-09-20', '1961-09-30'),
(84, 1976, 'Jaramillo', 'Ana', 'Medellín', 'Ingeniería', 'Aux. Administrativo', 1350000, '1991-04-29', '1970-10-09'),
(85, 1168, 'Lema', 'Maria', 'Medellín', 'Ingeniería', 'Aux. Administrativo', 1350000, '1991-04-10', '1970-07-08'),
(86, 1815, 'Caro', 'Diana', 'Medellín', 'Ingeniería', 'Administrativo', 5600000, '1980-02-25', '1959-08-28'),
(87, 1068, 'Vergara', 'Amalia', 'Medellín', 'Ingeniería', 'Docente', 3200000, '1987-09-12', '1961-10-11'),
(88, 1012, 'Duque', 'Julian', 'Medellín', 'Ingeniería', 'Docente', 2400000, '1986-01-26', '1964-12-02'),
(89, 1301, 'Muñoz', 'Maritza', 'Medellín', 'Ingeniería', 'Docente', 3200000, '1986-01-09', '1955-09-28'),
(90, 1556, 'Peláez', 'Andrés', 'Medellín', 'Ingeniería', 'Docente', 3200000, '1981-11-26', '1965-09-11'),
(91, 1933, 'Sanchez', 'Miguel', 'Medellín', 'Ingeniería', 'Docente', 3200000, '1984-01-08', '1949-06-12'),
(92, 1333, 'Cano', 'Carolina', 'Medellín', 'Ingeniería', 'Docente', 3200000, '1990-04-16', '1965-10-07'),
(93, 1510, 'Marquez', 'Jessica', 'Medellín', 'Ingeniería', 'Docente', 4800000, '1985-06-11', '1962-11-04'),
(94, 1574, 'Rico', 'Samuel', 'Medellín', 'Ingeniería', 'Docente', 3200000, '1986-02-09', '1960-06-04'),
(95, 1360, 'Mendez', 'Gustavo', 'Medellín', 'Ingeniería', 'Docente', 4000000, '1988-08-01', '1960-06-18'),
(96, 1293, 'Jimenez', 'Karina', 'Medellín', 'Ingeniería', 'Técnico', 1700000, '1984-09-14', '1954-08-25'),
(97, 1329, 'Osorio', 'Julieth', 'Medellín', 'Medicina', 'Docente', 3500000, '1989-02-22', '1964-05-06'),
(98, 1572, 'Villamizar', 'Lina', 'Medellín', 'Medicina', 'Docente', 3600000, '1988-07-15', '1960-05-20'),
(99, 1300, 'Gomez', 'Carlos', 'Medellín', 'Medicina', 'Administrativo', 2300000, '1989-12-13', '1965-09-24'),
(100, 1557, 'Gracía', 'Simón', 'Medellín', 'Medicina', 'Aux. Administrativo', 1390000, '1981-11-18', '1965-09-22'),
(101, 1169, 'Castro', 'Monica', 'Medellín', 'Medicina', 'Administrativo', 5700000, '1992-10-13', '1970-07-12'),
(102, 1758, 'Uribe', 'Melisa', 'Medellín', 'Medicina', 'Técnico', 1900000, '1982-03-18', '1962-10-23'),
(103, 1310, 'Florez', 'Alejandra', 'Medellín', 'Medicina', 'Técnico', 1350000, '1986-10-04', '1964-11-02'),
(104, 1041, 'Gutierrez', 'Amalia', 'Medellín', 'Medicina', 'Docente', 4900000, '1992-04-16', '1965-01-25'),
(105, 1361, 'Medina', 'Raquel', 'Medellín', 'Medicina', 'Docente', 2940000, '1988-07-22', '1960-06-22'),
(106, 1793, 'Betancur', 'Gonzalo', 'Bucaramanga', 'Administración', 'Docente', 1350000, '1990-12-16', '1968-10-14'),
(107, 1967, 'Betancurt', 'Santiago', 'Bucaramanga', 'Administración', 'Aux. Administrativo', 1350000, '1991-11-09', '1969-05-15'),
(108, 1725, 'Marquez', 'Isabella', 'Bucaramanga', 'Administración', 'Administrativo', 5600000, '1978-02-12', '1955-05-26'),
(109, 1969, 'Molina', 'Karla', 'Bucaramanga', 'Administración', 'Aux. Técnico', 980000, '1989-04-14', '1951-10-02'),
(110, 1962, 'Rodriguez', 'Hilda', 'Bucaramanga', 'Administración', 'Docente', 2900000, '1987-10-22', '1945-04-06'),
(111, 1967, 'Hincapie', 'Victoria', 'Bucaramanga', 'Administración', 'Docente', 4600000, '1982-04-13', '1951-09-17'),
(112, 1426, 'Rojas ', 'Pablo', 'Bucaramanga', 'Administración', 'Docente', 5600000, '1977-09-08', '1968-03-09'),
(113, 1509, 'Serna', 'Pamela', 'Bucaramanga', 'Ingeniería', 'Aux. Administrativo', 1350000, '1985-06-19', '1962-10-24'),
(114, 1673, 'Zapata', 'Stepania', 'Bucaramanga', 'Ingeniería', 'Docente', 1350000, '1990-04-16', '1962-09-01'),
(115, 1352, 'Toro', 'Manuel', 'Bucaramanga', 'Ingeniería', 'Docente', 1980000, '1982-09-18', '1958-07-22'),
(116, 1922, 'Henao', 'Barbara', 'Bucaramanga', 'Ingeniería', 'Docente', 2100000, '1986-12-05', '1961-02-24'),
(117, 1518, 'Vasquez', 'Leonardo', 'Bucaramanga', 'Ingeniería', 'Docente', 2600000, '1990-06-18', '1963-07-11'),
(118, 1331, 'Castrillón', 'Juliana', 'Bucaramanga', 'Ingeniería', 'Docente', 3100000, '1989-05-11', '1964-05-21'),
(119, 1303, 'Lopez', 'Dinara', 'Bucaramanga', 'Ingeniería', 'Administrativo', 5600000, '1988-03-03', '1955-07-10'),
(120, 1302, 'Mota', 'Elisa', 'Bucaramanga', 'Ingeniería', 'Docente', 3800000, '1984-07-29', '1955-07-06'),
(121, 1334, 'Perez', 'Alicia', 'Bucaramanga', 'Ingeniería', 'Aux. Administrativo', 1350000, '1990-04-08', '1965-10-18'),
(122, 1975, 'Posada', 'Carlos', 'Bogotá', 'Derecho', 'Docente', 3200000, '1991-05-07', '1970-09-28'),
(123, 1759, 'Arango', 'Mauricio', 'Bogotá', 'Derecho', 'Docente', 4700000, '1982-03-10', '1962-11-03'),
(124, 1055, 'Hoyos', 'Adriana', 'Bogotá', 'Derecho', 'Docente', 3200000, '1991-04-08', '1967-08-20'),
(125, 1054, 'Suarez', 'Miguel', 'Bogotá', 'Derecho', 'Docente investigador', 4100000, '1991-04-16', '1967-08-09'),
(126, 1075, 'Aristizabal', 'Natalia', 'Bogotá', 'Derecho', 'Docente investigador', 3200000, '1992-08-07', '1969-08-28'),
(127, 1966, 'Dominguez ', 'Camila', 'Bogotá', 'Derecho', 'Docente investigador', 3900000, '1991-11-17', '1969-05-04'),
(128, 1354, 'Ruiz', 'Susana', 'Bogotá', 'Derecho', 'Administrativo', 3200000, '1986-05-06', '1948-08-06'),
(129, 1696, 'Higuita', 'Cathy', 'Bogotá', 'Derecho', 'Docente', 3200000, '1984-10-12', '1940-01-16'),
(130, 1299, 'Osorio', 'Catalina', 'Bogotá', 'Derecho', 'Docente', 3200000, '1989-12-21', '1965-09-13'),
(131, 1529, 'Gomez', 'Mariana', 'Bogotá', 'Publicidad', 'Docente', 3200000, '1987-01-28', '1967-01-04'),
(132, 1080, 'Bustos', 'Jacobo', 'Bogotá', 'Publicidad', 'Docente investigador', 3700000, '1988-10-29', '1952-12-06'),
(133, 1353, 'Rodas', 'Gabriel', 'Bogotá', 'Publicidad', 'Docente investigador', 3600000, '1982-09-10', '1958-08-02'),
(134, 1369, 'Cano', 'Sandra', 'Bogotá', 'Publicidad', 'Administrativo', 4200000, '1983-03-03', '1959-05-19'),
(135, 1370, 'Diaz ', 'Evelyn', 'Bogotá', 'Publicidad', 'Docente investigador', 3600000, '1987-11-27', '1959-05-23'),
(136, 1677, 'Hernandez ', 'Juan', 'Bogotá', 'Publicidad', 'Docente investigador', 3700000, '1987-11-06', '1969-09-16'),
(137, 1427, 'Jaramillo', 'David', 'Bogotá', 'Publicidad', 'Docente investigador', 3400000, '1977-08-31', '1958-03-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;