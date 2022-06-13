-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2021 at 08:50 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `alojamiento` varchar(50) NOT NULL,
  `fechaViaje` varchar(20) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `estado` varchar(100) NOT NULL DEFAULT 'pendiente',
  `imagen` varchar(20) NOT NULL,
  `cantidad` int(99) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`idProductos`, `idUsuario`, `nombre`, `precio`, `pais`, `alojamiento`, `fechaViaje`, `descripcion`, `estado`, `imagen`, `cantidad`) VALUES
(4, NULL, 'Playa metalío , villa completa Acajutla', '$182  / noche', 'El salvador', 'Playa metalío', '20/21/2021', 'Un lugar pensando en la comodidad de cada huésped, con cada espacio detallado para ofrecer un ambiente cálido y agradable', 'pendiente', '', 1),
(5, NULL, 'CasaÁrbol, lugar mágico en el centro de la ciudad.', '$46  / noche', 'Mexico', 'CasaÁrbol', '20/21/2021', 'Ubicada en el corazón del centro de Cancún, a 5 minutos de la terminal de autobuses que traslada al aeropuerto y todos los destinos turísticos', 'pendiente', '', 1),
(6, NULL, 'Habitación doble en 7mo piso con vista maravillosa', '$11  / noche', 'Peru', 'Cusco Mod', '20/21/2021', 'Linda y comoda habitación doble con baño privado y balcón en un apartamento completamente amoblada con todos los servicios necesarios.', 'pendiente', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProductos`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `idProductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
