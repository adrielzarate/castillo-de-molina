-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-05-2015 a las 21:55:40
-- Versión del servidor: 5.5.43-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `molina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `user` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pass` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`user`, `id`, `pass`, `nombre`, `apellido`) VALUES
('admin', 1, '1234', '', ''),
('usuario', 2, '1234', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE IF NOT EXISTS `archivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `cod_seccion` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_seccion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cod_sub_seccion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `text` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_esp` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_eng` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `esp` longtext COLLATE utf8_spanish_ci NOT NULL,
  `eng` longtext COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=47 ;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `cod_seccion`, `cod_sub_seccion`, `text`, `nombre_esp`, `nombre_eng`, `esp`, `eng`) VALUES
(1, 'menu', 'opciones', '', 'Nosotros', 'Us', 'Nosotros', 'Us'),
(2, 'menu', 'opciones', '', 'Historia', 'History', 'Historia', 'History'),
(3, 'menu', 'opciones', '', 'Valles', 'Valleys', 'Valles', 'Valleys'),
(4, 'menu', 'opciones', '', 'Enología', 'Oenology', 'EnologÃ­a', 'Oenology'),
(5, 'menu', 'opciones', '', 'Noticias', 'News', 'Noticias', 'News'),
(6, 'menu', 'opciones', '', 'Vinos', 'Wines', 'Vinos', 'Wines'),
(7, 'menu ', 'opciones', '', 'Cell Parking', 'Cell Parking', 'Cell Parking', 'Cell Parking'),
(8, 'menu', 'opciones', '', 'Contacto', 'Contact', 'Contacto', 'Contact'),
(9, 'menu', 'edad', 'si', 'Título', 'Title', 'Verifique su edad', 'Verifique su edad(en ingles)'),
(10, 'menu', 'edad', 'si', 'Condición', 'Condition', 'Debe ser mayor de 18 aÃ±os para visitar el sitio', 'Debe ser mayor de 18 aÃ±os para visitar el sitio(en ingles)'),
(11, 'menu', 'edad', 'si', 'Texto botón', 'Button text', 'Soy mayor de 18 aÃ±os', 'Soy mayor de 18 aÃ±os(en ingles)'),
(12, 'nosotros', 'intro_dia', '', 'Título', 'Title', 'ESTE PUEDE SER TU MEJOR DÃA', 'Este puede ser tu mejor dÃ­a(ingles)'),
(13, 'nosotros', 'intro_dia', 'si', 'Texto', 'Text', 'Cualquier momento puede ser bueno si sabes disfrutarlo. DesconÃ©ctate y aprovecha tu energÃ­a del dÃ­a, para disfrutar un gran momento junto a Castillo de Molina.', 'Cualquier momento puede ser bueno si sabes disfrutarlo. Desconï¿½ctate y aprovecha tu energï¿½a del dï¿½a, para disfrutar un gran momento junto a Castillo de Molina.(ingles)'),
(14, 'nosotros', 'intro_noche', '', 'Título', 'Title', 'ESTA PUEDE SER TU MEJOR NOCHE', 'Esta puede ser tu mejor noche'),
(15, 'nosotros', 'intro_noche', 'si', 'Texto', 'Text', 'Si estÃ¡s en casa, invita a tus amigos a cocinar algo nuevo o simplemente a descorchar una botella de buen vino y disfrutar del aquÃ­ y el ahora.', 'Si estï¿½s en casa, invita a tus amigos a cocinar algo nuevo o simplemente a descorchar una botella de buen vino y disfrutar del aquï¿½ y el ahora.'),
(16, 'nosotros', 'nosotros', '', 'Título', 'Title', 'Nosotros', 'Us(ingles)'),
(17, 'nosotros', 'nosotros', 'si', 'Texto 1', 'Text 1', 'Castillo de Molina nace como la primer lÃ­nea Reserva de ViÃ±a San Pedro, con una especial dedicaciÃ³n a la calidad e innovaciÃ³n, tomando con calma y cuidadosamente la bÃºsqueda incansable de los mejores valles de Chile.(espaÃ±ol)', 'Castillo de Molina nace como la primer lï¿½nea Reserva de Viï¿½a San Pedro, con una especial dedicaciï¿½n a la calidad e innovaciï¿½n, tomando con calma y cuidadosamente la bï¿½squeda incansable de los mejores valles de Chile.(ingles)'),
(18, 'nosotros', 'nosotros', 'si', 'Texto 2', 'Text 2', 'Castillo de Molina plantea el disfrutar a cada momento, en cada lugar, porque la vida es una vorÃ¡gine, pero la vida es ahora.', 'Castillo de Molina plantea el disfrutar a cada momento, en cada lugar, porque la vida es una vorï¿½gine, pero la vida es ahora.(ingles)'),
(19, 'nosotros', 'historia', '', 'Título', 'Title', 'Historia', 'History'),
(20, 'nosotros', 'historia', 'si', 'Texto 1', 'Text 1', 'â€œSe dice que los mejores vinos del mundo provienen de un chÃ¢teau, un castilloâ€\r\n', 'ï¿½Se dice que los mejores vinos del mundo provienen de un chï¿½teau, un castilloï¿½'),
(21, 'nosotros', 'historia', 'si', 'Texto 2', 'Text 2', 'Hace 150 aÃ±os, los hermanos espaÃ±oles Correa Albano fundaron ViÃ±a San Pedro en Molina, Chile. Al llegar a la cima mÃ¡s alta de sus tierras, maravillados contemplaron su majestuoso entorno. En ese instante, decidieron perpetuar esa sublime riqueza, en un â€œCastilloâ€ que emergiera desde la tierra, su primer vino reserva: Castillo de Molina.', 'Hace 150 aï¿½os, los hermanos espaï¿½oles Correa Albano fundaron Viï¿½a San Pedro en Molina, Chile. Al llegar a la cima mï¿½s alta de sus tierras, maravillados contemplaron su majestuoso entorno. En ese instante, decidieron perpetuar esa sublime riqueza, en un ï¿½Castilloï¿½ que emergiera desde la tierra, su primer vino reserva: Castillo de Molina.'),
(22, 'nosotros', 'enologia', '', 'Título', 'Title', 'ENOLOGÃA', 'Enologï¿½a'),
(23, 'nosotros', 'enologia', 'si', 'Texto 1', 'Text 1', 'Para cada cepa existe un valle que expresa a la perfecciÃ³n nuestra bÃºsqueda de vinos de excelencia.', 'Para cada cepa existe un valle que expresa a la perfecciï¿½n nuestra bï¿½squeda de vinos de excelencia.'),
(24, 'nosotros', 'valles', '', 'Título', 'Title', 'Valles', 'Valles'),
(25, 'nosotros', 'valles', 'si', 'Texto 1', 'Text 1', 'Castillo de Molina ha alcanzado una reconocida posiciÃ³n a nivel mundial, entre los mejores vinos chilenos en su segmento.', 'Castillo de Molina ha alcanzado una reconocida posiciï¿½n a nivel mundial, entre los mejores vinos chilenos en su segmento.'),
(26, 'nosotros', 'valles', 'si', 'Texto valle Casa Blanca', 'Text valley Casa Blanca', 'Casablanca es tal vez el mÃ¡s conocido de los valles frÃ­os chilenos, a 18 km en lÃ­nea recta del mar y rodeado por la Cordillera de la Costa. Tiene clara influencia marÃ­tima y cada dÃ­a se presenta una neblina matinal llamada "camanchaca".', 'Casablanca es tal vez el mï¿½s conocido de los valles frï¿½os chilenos, a 18 km en lï¿½nea recta del mar y rodeado por la Cordillera de la Costa. Tiene clara influencia marï¿½tima y cada dï¿½a se presenta una neblina matinal llamada "camanchaca".'),
(27, 'nosotros', 'valles', 'si', 'Texto valle Elqui', 'Text valley Elqui', 'El Valle del Elqui estÃ¡ ubicado al norte de Chile y sus vides crecen bajo una poderosa influencia marina ya que estÃ¡n ubicadas a 20 km en lÃ­nea recta del mar. Todas las maÃ±anas, cubre los viÃ±edos una nubosidad proveniente del mar hasta el medio dÃ­a favoreciendo el clima fresco junto a una buena ventilaciÃ³n debido al fuerte viento del Ã¡rea. Sus suelos contienen un alto contenido mineral que le confieren una Ãºnica identidad enolÃ³gica a los Sauvignon Blanc.\r\n\r\nCastillo de Molina fue el primer Sauvignon Blanc de origen Valle de Elqui, siendo un Ã©xito rotundo alrededor del mundo.', 'El Valle del Elquiï¿½estï¿½ ubicado al norte de Chile y sus vides crecen bajo una poderosa influencia marina ya que estï¿½n ubicadas a 20 km en lï¿½nea recta del mar. Todas las maï¿½anas, cubre los viï¿½edos una nubosidad proveniente del mar hasta el medio dï¿½a favoreciendo el clima fresco junto a una buena ventilaciï¿½n debido al fuerte viento del ï¿½rea. Sus suelos contienen un alto contenido mineral que le confieren una ï¿½nica identidad enolï¿½gica a los Sauvignon Blanc. Castillo de Molina fue el primer Sauvignon Blanc de origen Valle de Elqui, siendo un ï¿½xito rotundo alrededor del mundo.'),
(28, 'nosotros', 'valles', 'si', 'Texto valle Rapel', 'Text valley Rapel', 'Ubicado al sur de Chile, nos encontramos con un valle generoso y de de suelos esponjosos, arcillosos y rocosos, donde se producen inmejorables vinos de variedad tinta como el Cabernet Sauvignon y Merlot. Este valle posee un clima MediterrÃ¡neo, con una gran oscilaciÃ³n tÃ©rmica entre el dÃ­a y la noche de casi 20Â°C y su verano es seco con un alto promedio de temperaturas, cercano a los 25Â°C.', 'Ubicado al sur de Chile, nos encontramos con un valle generoso y de de suelos esponjosos, arcillosos y rocosos, donde se producen inmejorables vinos de variedad tinta como el Cabernet Sauvignon y Merlot. Este valle posee un clima Mediterrï¿½neo, con una gran oscilaciï¿½n tï¿½rmica entre el dï¿½a y la noche de casi 20ï¿½C y su verano es seco con un alto promedio de temperaturas, cercano a los 25ï¿½C.'),
(29, 'nosotros', 'valles', 'si', 'Texto valle Maule', 'Text valley Maule', 'En el Valle del Maule se encuentra la localidad de Pencahue, un Ã¡rea conocida por su clima cÃ¡lido-seco y por sus irregulares suelos rocosos. En tal ambiente, los Syrah de clima cÃ¡lido y los CarmenÃ¨re prueban su temple cultivados en secano, de excelente acidez natural y elegancia.', 'En el Valle del Maule se encuentra la localidad de Pencahue, un ï¿½rea conocida por su clima cï¿½lido-seco y por sus irregulares suelos rocosos. En tal ambiente, los Syrah de clima cï¿½lido y los Carmenï¿½reï¿½prueban su temple cultivados en secano, de excelente acidez natural y elegancia.'),
(30, 'nosotros', 'valles', 'si', 'Texto valle Curicó', 'Text valley Curicó', 'l Valle de CuricÃ³ se encuadra dentro de la regiÃ³n vitÃ­cola del Valle Central, situado en la RegiÃ³n del Maule. Este clima se caracteriza por la alta variaciÃ³n de temperatura entre el dÃ­a y la noche. En las Ã¡reas mÃ¡s frescas se producen vinos Pinot Noir de calidad Ãºnica.\r\n\r\nLos vinÌƒedos estaÌn plantados en una zona de lomajes suaves, en suelos de granito en descomposicioÌn sobre tobas volcanicas.', 'El Valle de Curicï¿½ se encuadra dentro de la regiï¿½n vitï¿½cola del Valle Central, situado en la Regiï¿½n del Maule. Este clima se caracteriza por la alta variaciï¿½n de temperatura entre el dï¿½a y la noche. En las ï¿½reas mï¿½s frescas se producen vinos Pinot Noir de calidad ï¿½nica. Los vin?edos esta?n plantados en una zona de lomajes suaves, en suelos de granito en descomposicio?n sobre tobas volcanicas.'),
(31, 'nosotros', 'valles', 'si', 'Texto 2', 'Text 2', 'Busca constantemente descubrir el mejor origen especÃ­fico para cada una de sus variedades y asÃ­ obtener la mÃ¡xima expresiÃ³n en cada una de ellas.', 'Busca constantemente descubrir el mejor origen especï¿½fico para cada una de sus variedades y asï¿½ obtener la mï¿½xima expresiï¿½n en cada una de ellas.'),
(32, 'cell_parking', '', '', 'Título', 'Title', 'Cell Parking', 'Cell Parking'),
(33, 'cell_parking', '', 'si', 'Texto 1', 'Text 1', 'MILES DE PERSONAS EN EL MUNDO SE ESTÃ¡N COMPROMETIENDO A DESCONECTARSE DE SUS SMARTPHONES, PARA CONECTARSE CON QUIENES LOS RODEAN.', 'hhhhhhh'),
(34, 'cell_parking', '', 'si', 'Texto 2', 'Text 2', 'Estï¿½n dispuestas a cambiar el chat por una buena conversaciï¿½n con sus amigos, a buscar la calidad en cada cosa y experiencia, a valorar su tiempo transformando cada instante en una oportunidad para desconectarse y disfrutar el aquï¿½ y el ahora.\r\n\r\nCell Parking es una iniciativa de Castillo de Molina, que invita a desconectarte y disfrutar de la realidad que estï¿½ presente, y no a travï¿½s de una pantalla. Una copa de vino no nace para ser consumida, sino degustada de principio a fin, asï¿½ mismo como nuestras vidas que no pueden transcurrir en la vorï¿½gine sin que nos detengamos a gozar de cada instante que ella nos regala.', 'Estï¿½n dispuestas a cambiar el chat por una buena conversaciï¿½n con sus amigos, a buscar la calidad en cada cosa y experiencia, a valorar su tiempo transformando cada instante en una oportunidad para desconectarse y disfrutar el aquï¿½ y el ahora.\r\n\r\nCell Parking es una iniciativa de Castillo de Molina, que invita a desconectarte y disfrutar de la realidad que estï¿½ presente, y no a travï¿½s de una pantalla. Una copa de vino no nace para ser consumida, sino degustada de principio a fin, asï¿½ mismo como nuestras vidas que no pueden transcurrir en la vorï¿½gine sin que nos detengamos a gozar de cada instante que ella nos regala.'),
(35, 'cell_parking', '', '', 'Título 2', 'Title 2', 'CELL PARKING EN EL MUNDO', 'CELL PARKING EN EL MUNDO'),
(37, 'cell_parking', '', 'si', 'Texto 3', 'Text 3', 'Cell Parking es una iniciativa de Castillo de Molina, que invita a desconectarte y disfrutar de la realidad que estÃ¡ presente, y no a travÃ©s de una pantalla. Una copa de vino no nace para ser consumida, sino degustada de principio a fin, asÃ­ mismo como nuestras vidas que no pueden transcurrir en la vorÃ¡gine sin que nos detengamos a gozar de cada instante que ella nos regala.', 'Estï¿½n dispuestas a cambiar el chat por una buena conversaciï¿½n con sus amigos, a buscar la calidad en cada cosa y experiencia, a valorar su tiempo transformando cada instante en una oportunidad para desconectarse y disfrutar el aquï¿½ y el ahora.\r\n\r\nCell Parking es una iniciativa de Castillo de Molina, que invita a desconectarte y disfrutar de la realidad que estï¿½ presente, y no a travï¿½s de una pantalla. Una copa de vino no nace para ser consumida, sino degustada de principio a fin, asï¿½ mismo como nuestras vidas que no pueden transcurrir en la vorï¿½gine sin que nos detengamos a gozar de cada instante que ella nos regala.'),
(38, 'contactos', '', '', 'Título', 'Title', 'Contacto', 'Contacto'),
(40, 'contactos', '', '', 'Título redes', 'Title networks', 'SÃ­guenos:', 'SÃ­guenos:'),
(41, 'contactos', '', '', 'Título campo nombre', 'Title field name', 'Nombre*', 'Nombre*'),
(42, 'contactos', '', '', 'Título campo Email', 'Title field Email', 'Email*', 'Email*'),
(43, 'contactos', '', '', 'Título campo Comentario', 'Title field Comment', 'Comentario*', 'Comentario'),
(44, 'contactos', '', '', 'Botón Enviar mensaje', 'Button Send message', 'Enviar', 'Enviar'),
(45, 'contactos', '', 'si', 'Texto campos obligatorios', 'Text required fields', 'Todos los campos son obligatorios', '* Campos obligatorios'),
(46, 'nosotros', 'valles', 'si', 'Texto 3', 'Text 3', 'Castillo de Molina, su enfoque hoy en dï¿½a es buscar para cada cepa, un valle que exprese a la perfecciï¿½n nuestra bï¿½squeda de vinos de excelencia.castellano', 'Castillo de Molina, su enfoque hoy en dï¿½a es buscar para cada cepa, un valle que exprese a la perfecciï¿½n nuestra bï¿½squeda de vinos de excelencia.(ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `texto` longtext COLLATE utf8_spanish_ci NOT NULL,
  `cod_idioma` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `link` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `img` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `fecha`, `texto`, `cod_idioma`, `titulo`, `link`, `img`) VALUES
(10, '2015-05-13', 'fsdfsdfdgdfgdfgfddfhfdghfdghgfd', 'esp', 'not 1', 'fsdfsdfsd', 'z0mvmbf.jpg'),
(11, '2015-05-13', 'fsdfsdfdgdfgdfgfddfhfdghfdghgfd', 'esp', 'not 2', 'fsdfsdfsd', 'z0mvmbf.jpg'),
(12, '2015-05-13', 'fsdfsdfdgdfgdfgfddfhfdghfdghgfd', 'esp', 'not 3', 'fsdfsdfsd', 'z0mvmbf.jpg'),
(13, '2015-05-13', 'fsdfsdfdgdfgdfgfddfhfdghfdghgfd', 'esp', 'not 4', 'fsdfsdfsd', 'z0mvmbf.jpg'),
(14, '2015-05-13', 'fsdfsdfdgdfgdfgfddfhfdghfdghgfd', 'esp', 'not 5', 'fsdfsdfsd', 'z0mvmbf.jpg'),
(15, '2015-05-13', 'fsdfsdfdgdfgdfgfddfhfdghfdghgfd', 'esp', 'not 6', 'fsdfsdfsd', 'z0mvmbf.jpg'),
(16, '2015-05-13', 'fsdfsdfdgdfgdfgfddfhfdghfdghgfd', 'esp', 'not 7', 'fsdfsdfsd', 'z0mvmbf.jpg'),
(17, '2015-05-13', 'fsdfsdfdgdfgdfgfddfhfdghfdghgfd', 'esp', 'not 8', 'fsdfsdfsd', 'z0mvmbf.jpg'),
(18, '2015-05-13', 'fsdfsdfdgdfgdfgfddfhfdghfdghgfd', 'esp', 'not 9', 'fsdfsdfsd', 'z0mvmbf.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE IF NOT EXISTS `secciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `esp` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `eng` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id`, `nombre`, `esp`, `eng`) VALUES
(1, 'menu', 'Menú y verificación de edad', 'Menu and age verification'),
(2, 'nosotros', 'Nosotros', 'Us'),
(3, 'noticias', 'Noticias', 'News'),
(4, 'vinos', 'Vinos', 'Wines'),
(5, 'cell_parking', 'Cell Parking', 'Cell Parking'),
(6, 'contactos', 'Contacto', 'Contact');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subsecciones`
--

CREATE TABLE IF NOT EXISTS `subsecciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_seccion` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `esp` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `eng` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `subsecciones`
--

INSERT INTO `subsecciones` (`id`, `cod_seccion`, `nombre`, `esp`, `eng`) VALUES
(1, 'menu', 'opciones', 'Opciones del menú', 'Menu options'),
(2, 'menu', 'edad', 'Verificación de edad', 'Age verification'),
(3, 'nosotros', 'intro_dia', 'Texto intro dia', 'Intro text day'),
(4, 'nosotros', 'nosotros', 'Nosotros', 'Us'),
(5, 'nosotros', 'intro_noche', 'Texto intro noche', 'Intro text night'),
(6, 'nosotros', 'historia', 'Historia', 'History'),
(7, 'nosotros', 'valles', 'Valles', 'Valleys'),
(8, 'nosotros', 'enologia', 'Enología', 'Oenology');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinos`
--

CREATE TABLE IF NOT EXISTS `vinos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_idioma` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `slide` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `horizontal` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `img_dia` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `img_noche` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `zip` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `zip_nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `titulo_origen` text COLLATE utf8_spanish_ci NOT NULL,
  `texto_origen` longtext COLLATE utf8_spanish_ci NOT NULL,
  `titulo_vendimia` text COLLATE utf8_spanish_ci NOT NULL,
  `texto_vendimia` longtext COLLATE utf8_spanish_ci NOT NULL,
  `titulo_clima` text COLLATE utf8_spanish_ci NOT NULL,
  `texto_clima` longtext COLLATE utf8_spanish_ci NOT NULL,
  `titulo_vinificacion` text COLLATE utf8_spanish_ci NOT NULL,
  `texto_vinificacion` longtext COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `vinos`
--

INSERT INTO `vinos` (`id`, `cod_idioma`, `nombre`, `slide`, `horizontal`, `img_dia`, `img_noche`, `zip`, `zip_nombre`, `titulo_origen`, `texto_origen`, `titulo_vendimia`, `texto_vendimia`, `titulo_clima`, `texto_clima`, `titulo_vinificacion`, `texto_vinificacion`) VALUES
(3, 'esp', 'vino 1', '13rio8n.png', 'o8jppn3.png', '3p9fmai.png', '4o3ixd3.png', 'fn4jh1x.zip', 'datepicker.zip', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'hgfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'hfgffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'fhgffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'hfgffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff'),
(4, 'esp', 'vino 2', 'b0c28g5.png', 'pedpfi9.png', 'u81z7q3.png', '2w8gzv2.png', '', '', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'fsdffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'gdfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffgdf', 'dfgffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffhgf', 'gdf', 'dfgffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
