-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2019 a las 21:23:35
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `doc_identificacao` varchar(45) DEFAULT NULL,
  `cidade` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `sobrenome`, `email`, `senha`, `telefone`, `endereco`, `doc_identificacao`, `cidade`) VALUES
(1, '', 'rodrigues alves', 'ana2019@gmail.com', 'ana1234F', 32425151, 'Andradas2001', '45821147', 'Santana do Livramanto'),
(5, 'Jose Alferdo', 'Gomes souza', 'JAlfredo1998@gmail.com', 'Fedinho99', 32420203, 'Almirante Barroso 568', '62525477', 'Santana do Livramanto'),
(6, 'RobertAAAAAAA', 'Vaz de Asis', 'RobertVaz77@hotmail.com', 'RobertV7701', 32445088, 'Andradas 2014', '91593574', 'Santana do Livramanto'),
(7, 'Samanta ', 'Almeida Prado', 'SamataAP@gmail.com', 'Samanta1994', 99654147, 'Sarandi 574', '43217534', 'Rivera'),
(18, 'Izabaela', 'Duarte', 'IzaDu2323@gmail.com', 'iza1234', 32425510, 'Rivadavia Correia 961', '62586514', 'Santana do Livramanto'),
(19, 'Izabaela', 'Duarte', 'IzaDu2323@gmail.com', 'iza1234', 32425510, 'Rivadavia Correia 961', '62586514', 'Santana do Livramanto'),
(20, 'Izabaela', 'Duarte', 'IzaDu2323@gmail.com', 'iza1234', 32425510, 'Rivadavia Correia 961', '62586514', 'Santana do Livramanto'),
(21, 'Ana Luiza', 'rodrigues alves', 'AnaLuiza23@gmail.com', 'anaLu2424', 32428565, 'Rivadavia Correia 97', '', ''),
(22, 'Ana Luiza', 'rodrigues alves', 'AnaLuiza23@gmail.com', '', 32428565, 'Rivadavia Correia 972', '4533369', 'Santana do Livramanto'),
(23, 'braian ', 'dos santos brum', 'anaPeres22@gmail.com', 'anaPeres2019', 110000000, 'aurelio carambula 461', '12589637', 'Rivera'),
(24, 'b', 'dos santos brum', 'anaPeres22@gmail.com', 'anaPeres2019', 110000000, 'aurelio carambula 461', '12589637', 'Rivera'),
(25, 'ssssssss', 'dsdf iweoieor', 'sddudu8ud@gmail.com', 'duwuuw77', 222222222, 'dswfjuf 65878', '14444444', 'Santana do Livramanto'),
(26, 'vvvvvvvv', 'cccccccccc', 'vaca2019@gmail.com', 'adcfff5e947da4569f2eabd4d775ad6c', 3548454, 'ghddhd 098', '544444447', 'rivera'),
(27, '', '', 'braiandossantos99@gmail.com', '23043e2bc6359d5d202d2de99b342b7f', 0, '', '', ''),
(28, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, '', '', ''),
(29, 'dani ', 'rrrrr tttttt', 'b@gmail.com', '8393ea19abdcd8d5eac62afe8fd547af', 0, 'riyh   9999', '3233333', 'rivera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `datadia` date DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `texto` varchar(800) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id_post`, `datadia`, `hora`, `imagem`, `texto`, `id_usuario`) VALUES
(117, '2019-12-10', '13:56', '490x_black-friday-4.jpg', 'APROVEITE nesta sexta BLACK FRIDAY DE HOSPEDAGEM, HOSEPEDE-SE COM 60% DE DESCONTOS A VISTA E 50% NOS CARTÃ•ES ', 1),
(118, '2019-12-10', '14:04', '81Yb6d6MuDL._SS500_.jpg', 'NESTE SÃBADO Ã s 10:30 hs inauguraÃ§Ã£o de espaÃ§o para yoga. \r\n  E conheÃ§a mais sobre o yoga.\r\n  Esperamos VOCÃŠ!!!\r\naprovite e matricule-se na portaria de nosso hotel apenas R$150.', 2),
(119, '2019-12-09', '23:00', 'ninos-regalos_1.jpg', 'Venha passar seu Natal em nosso hotel, com sua famÃ­lia. Temos espaÃ§os para crianÃ§as se divertirem.', 1),
(120, '2019-12-08', '12:35', 'hotel.jpg', 'ConheÃ§a mais sobre o HOTEL.  \r\n   http://localhost/hotel/imagens.php', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quartos`
--

CREATE TABLE `quartos` (
  `nro_porta` int(100) NOT NULL,
  `descricaoQuarto` varchar(100) DEFAULT NULL,
  `preco` decimal(20,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `quartos`
--

INSERT INTO `quartos` (`nro_porta`, `descricaoQuarto`, `preco`) VALUES
(11, 'incluindo duas camas para casal', '250'),
(12, 'frente para piscina com bela paisagem', '279');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `nome` varchar(500) NOT NULL,
  `doc` int(100) NOT NULL,
  `telefone` int(100) NOT NULL,
  `di` date NOT NULL,
  `df` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`nome`, `doc`, `telefone`, `di`, `df`) VALUES
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00'),
('', 0, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `doc_identificacao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `sobrenome`, `email`, `senha`, `telefone`, `endereco`, `cidade`, `doc_identificacao`) VALUES
(1, 'joana margarete', 'peres borges', 'anaPeres22@gmail.com', 'anaPeres2019', 32456974, 'conde de Porto alegre 848', 'Santana do Livramanto', '94561597'),
(2, 'braian', 'brum', 'braiandossantos99@gmail.com', 'BB@2019', 0, '000000000', 'Rivera', '42583691'),
(3, 'maria', 'do socorro', 'socorro@gmail.com', 'socorro2019', 32456212, 'tamandare 987', 'Santana do livramento', '62587894');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indices de la tabla `quartos`
--
ALTER TABLE `quartos`
  ADD PRIMARY KEY (`nro_porta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT de la tabla `quartos`
--
ALTER TABLE `quartos`
  MODIFY `nro_porta` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
