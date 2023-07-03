-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-07-2023 a las 23:31:35
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `e-commerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `idcategory` int(11) NOT NULL,
  `category` text DEFAULT NULL,
  `route` text DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`idcategory`, `category`, `route`, `date`) VALUES
(1, 'Mujer', 'mujer', '2030-05-23 01:23:00'),
(2, 'Infantil', 'infantil', '2030-05-23 01:23:00'),
(3, 'Hombre', 'hombre', '2030-05-23 18:54:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `idproduct` int(11) NOT NULL,
  `route` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `color_code` varchar(45) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `price` float(8,3) DEFAULT NULL,
  `cover_img` text DEFAULT NULL,
  `details_img` text DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `sales_quantity` int(11) DEFAULT NULL,
  `is_discount` int(1) DEFAULT NULL,
  `discount_price` float(8,3) DEFAULT NULL,
  `discount` int(3) DEFAULT NULL,
  `end_offer_date` date DEFAULT NULL,
  `new` int(1) DEFAULT NULL,
  `weight` float(8,3) DEFAULT NULL,
  `shipping` float(8,3) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `category_idcategory` int(11) NOT NULL,
  `subcategory_idsubcategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`idproduct`, `route`, `title`, `color`, `color_code`, `short_description`, `long_description`, `details`, `price`, `cover_img`, `details_img`, `views`, `sales_quantity`, `is_discount`, `discount_price`, `discount`, `end_offer_date`, `new`, `weight`, `shipping`, `date`, `category_idcategory`, `subcategory_idsubcategory`) VALUES
(1, 'vestido-negro-0000000001', 'Vestido negro', 'negro', '#000000', 'Vestido de color negro hecho de poliester y elastano.', 'Vestido de color negro hecho de poliester y elastano que realza y estiliza la figura.', '{\n\n	\"P\": {\n		\"description\": \"Pequeña\",\n		\"stock\": 10\n	},\n	\"M\": {\n		\"description\": \"Mediana\",\n		\"stock\": 20\n	},\n	\"G\": {\n		\"description\": \"Grande\",\n		\"stock\": 30\n	},\n	\"XG\": {\n		\"description\": \"Extra Grandde\",\n		\"stock\": 40\n	}\n\n}', 35.000, '\nviews/img/products/1618221800_1_1_1.jpg', '{\n	\"images\": [\n		{\n			\"img01\": \"views/img/products/1618221800_1_1_1.jpg\",\n			\"img02\": \"views/img/products/1618221800_2_1_1.jpg\",\n			\"img03\": \"views/img/products/1618221800_2_2_1.jpg\",\n			\"img04\": \"views/img/products/1618221800_2_3_1.jpg\",\n			\"img05\": \"views/img/products/1618221800_2_4_1.jpg\",\n			\"img07\": \"views/img/products/1618221800_2_5_1.jpg\",\n			\"img08\": \"views/img/products/1618221800_6_1_1.jpg\",\n			\"img09\": \"views/img/products/1618221800_6_2_1.jpg\",\n			\"img10\": \"views/img/products/1618221800_6_3_1.jpg\"\n		}\n	]\n}', 258, 24, 0, 0.000, 0, '2015-06-23', 1, 500.000, 3.500, '2015-06-23 21:21:00', 1, 8),
(2, 'pantalon-ancho-0000000001', 'Pantalón Ancho', 'blanco', '#FFFFFF', 'Pantal?n con bastas anchas.', 'Pantal?n con bastas anchas y bolsillos ideal para verano. Material hipoalerg?nico.', '{\n\n	\"P\": {\n		\"description\": \"Pequeña\",\n		\"stock\": 10\n	},\n	\"M\": {\n		\"description\": \"Mediana\",\n		\"stock\": 20\n	},\n	\"G\": {\n		\"description\": \"Grande\",\n		\"stock\": 0\n	}\n\n}', 25.000, 'views/img/products/7954683251_1_1_1.jpg', '{\n	\"images\": [\n		{\n			\"img01\": \"views/img/products/7954683251_1_1_1.jpg\",\n			\"img02\": \"views/img/products/7954683251_6_1_1.jpg\",\n			\"img03\": \"views/img/products/7954683251_6_2_1.jpg\",\n			\"img04\": \"views/img/products/7954683251_6_3_1.jpg\"\n		}\n	]\n}', 346, 28, 0, 0.000, 0, '2030-06-23', 0, 900.000, 3.500, '2019-06-23 15:48:00', 1, 1),
(3, 'pantalon-jogger-0000000001', 'Pantalón Playero', 'beige', '#FEFFFF', 'Hecho con materiales sustentables ayuda al medio ambiente.', 'Hecho con materiales sustentables ayuda al medio ambiente y al cuidado de la naturaleza.', '{\n\n	\"P\": {\n		\"description\": \"Pequeña\",\n		\"stock\": 0\n	},\n	\"M\": {\n		\"description\": \"Mediana\",\n		\"stock\": 20\n	},\n	\"G\": {\n		\"description\": \"Grande\",\n		\"stock\": 10\n	}\n\n}', 18.000, 'views/img/products/0108021802_1_1_1.jpg', '{\n	\"images\": [{\n		\"img01\": \"views/img/products/0108021802_1_1_1.jpg\",\n		\"img02\": \"views/img/products/0108021802_2_1_1.jpg\",\n		\"img03\": \"views/img/products/0108021802_2_2_1.jpg\",\n		\"img04\": \"views/img/products/0108021802_2_3_1.jpg\",\n		\"img05\": \"views/img/products/0108021802_2_4_1.jpg\",\n		\"img07\": \"views/img/products/0108021802_2_5_1.jpg\",\n		\"img08\": \"views/img/products/0108021802_6_1_1.jpg\",\n		\"img09\": \"views/img/products/0108021802_6_2_1.jpg\",\n		\"img10\": \"views/img/products/0108021802_6_3_1.jpg\"\n	}]\n}', 123, 23, 1, 15.000, 30, '2019-06-23', 1, 600.000, 3.500, '2019-06-23 19:49:00', 1, 1),
(4, 'enterizo-rosa-0000000001', 'Enterizo rosa strapless', 'rosa', '#F50000', 'Enterizo creado con material reciclado en un color que refleja juventud.', 'Enterizo creado con material reciclado en un color que refleja juventud.\nIdeal para fiestas y reuniones en donde quieras destacar.', '{	\n  	\"XP\": {\n		\"description\": \"Extra Pequeña\",\n		\"stock\": 10\n	},\n\n	\"P\": {\n		\"description\": \"Pequeña\",\n		\"stock\": 0\n	},\n	\"M\": {\n		\"description\": \"Mediana\",\n		\"stock\": 20\n	},\n	\"G\": {\n		\"description\": \"Grande\",\n		\"stock\": 10\n	}\n\n}', 55.000, 'views/img/products/1971064630_1_1_1.jpg', '{\n	\"images\": [{\n		\"img01\": \"views/img/products/1971064630_1_1_1.jpg\",\n		\"img02\": \"views/img/products/1971064630_2_1_1.jpg\",\n		\"img03\": \"views/img/products/1971064630_2_2_1.jpg\",\n		\"img04\": \"views/img/products/1971064630_2_3_1.jpg\",\n		\"img05\": \"views/img/products/1971064630_2_4_1.jpg\",\n		\"img07\": \"views/img/products/1971064630_2_5_1.jpg\",\n		\"img08\": \"views/img/products/1971064630_2_6_1.jpg\",\n		\"img09\": \"views/img/products/1971064630_6_1_1.jpg\",\n		\"img10\": \"views/img/products/1971064630_6_2_1.jpg\",\n	  	\"img10\": \"views/img/products/1971064630_6_3_1.jpg\",\n	}]\n}\n', 432, 124, 1, 44.000, 11, '2019-06-23', 1, 900.000, 3.500, '2019-06-23 19:54:00', 1, 8),
(5, 'pantalon-chino-0000000001', 'Pantalón chino', 'beige', '#f50000', 'Pantal?n con bastas anchas.', 'Pantal?n con bastas anchas.', '{	\n  	\"XP\": {\n		\"description\": \"Extra Pequeña\",\n		\"stock\": 10\n	},\n\n	\"P\": {\n		\"description\": \"Pequeña\",\n		\"stock\": 10\n	},\n	\"M\": {\n		\"description\": \"Mediana\",\n		\"stock\": 0\n	},\n	\"G\": {\n		\"description\": \"Grande\",\n		\"stock\": 10\n	}\n\n}', 19.000, 'views/img/products/7385453743_1_1_1.jpg', '{\n	\"images\": [{\n		\"img01\": \"views/img/products/7385453743_1_1_1.jpg\",\n		\"img02\": \"views/img/products/7385453743_2_1_1.jpg\",\n		\"img03\": \"views/img/products/7385453743_2_2_1.jpg\",\n		\"img04\": \"views/img/products/7385453743_2_3_1.jpg\",\n		\"img05\": \"views/img/products/7385453743_2_4_1.jpg\",\n		\"img07\": \"views/img/products/7385453743_6_1_1.jpg\",\n		\"img08\": \"views/img/products/7385453743_6_2_1.jpg\",\n		\"img09\": \"views/img/products/7385453743_6_3_1.jpg\"\n	}]\n}', 564, 24, 0, 0.000, 0, '2019-06-23', 1, 500.000, 3.500, '2019-06-23 20:17:00', 1, 1),
(6, 'pantalon-fajero-0000000001', 'Pantalón Fajero', 'beige', '#F90000', 'Pantal?n con bastas anchas.', 'Pantal?n con bastas anchas.', '{\n	\"XP\": {\n		\"description\": \"Extra Pequeña\",\n		\"stock\": 10\n	},\n\n	\"P\": {\n		\"description\": \"Pequeña\",\n		\"stock\": 10\n	},\n	\"M\": {\n		\"description\": \"Mediana\",\n		\"stock\": 0\n	},\n	\"G\": {\n		\"description\": \"Grande\",\n		\"stock\": 10\n	},\n	\"XG \": {\n		\"description\": \"Extra Grande\",\n		\"stock\": 0\n	}\n\n\n}', 20.000, 'views/img/products/9929039307_1_1_1.jpg', '{\n	\"images\": [{\n		\"img01\": \"views/img/products/9929039307_1_1_1.jpg\",\n		\"img02\": \"views/img/products/9929039307_2_1_1.jpg\",\n		\"img03\": \"views/img/products/9929039307_2_2_1.jpg\",\n		\"img04\": \"views/img/products/9929039307_2_3_1.jpg\",\n		\"img05\": \"views/img/products/9929039307_2_4_1.jpg\",\n		\"img07\": \"views/img/products/9929339307_6_1_1.jpg\",\n		\"img08\": \"views/img/products/9929339307_6_2_1.jpg\",\n		\"img09\": \"views/img/products/9929339307_6_3_1.jpg\"\n	}]\n}', 765, 124, 0, 0.000, 0, '2019-06-23', 1, 400.000, 3.500, '2019-06-23 20:17:00', 1, 1),
(7, 'falda-vuelos-0000000001', 'Falda vuelos floral', 'azul', '#0000FF', 'Falda con dise?o floral.', 'Falda con dise?o floral.', '{\n\n\n	\"P\": {\n		\"description\": \"Pequeña\",\n		\"stock\": 10\n	},\n	\"M\": {\n		\"description\": \"Mediana\",\n		\"stock\": 0\n	},\n	\"G\": {\n		\"description\": \"Grande\",\n		\"stock\": 10\n	}\n\n\n}', 14.000, 'views/img/products/1971027044_1_1_1.jpg', '{\n	\"images\": [{\n		\"img01\": \"views/img/products/1971027044_1_1_1.jpg\",\n		\"img02\": \"views/img/products/1971027044_2_1_1.jpg\",\n		\"img03\": \"views/img/products/1971027044_2_2_1.jpg\",\n		\"img04\": \"views/img/products/1971027044_2_3_1.jpg\",\n		\"img05\": \"views/img/products/1971027044_6_1_1.jpg\",\n		\"img07\": \"views/img/products/1971027044_6_2_1.jpg\",\n		\"img08\": \"views/img/products/1971027044_6_3_1.jpg\"\n	}]\n}', 546, 25, 0, 0.000, 0, '2019-06-23', 1, 400.000, 3.500, '2019-06-23 20:38:00', 1, 4),
(8, 'camiseta-cuello-pico-0000000001', 'Camiseta cuello pico', 'blanca', '#FFFFFF', 'Camiseta cuello pico.', 'Camiseta cuello pico hecha de algod\'on 100% hipoalerg?nica.', '{\n	\"XP\": {\n		\"description\": \"Extra Pequeña\",\n		\"stock\": 0\n	},\n\n	\"P\": {\n		\"description\": \"Pequeña\",\n		\"stock\": 10\n	},\n	\"M\": {\n		\"description\": \"Mediana\",\n		\"stock\": 0\n	},\n	\"G\": {\n		\"description\": \"Grande\",\n		\"stock\": 10\n	},\n	\"XG \": {\n		\"description\": \"Extra Grande\",\n		\"stock\": 0\n	}\n\n\n}', 10.000, 'views/img/products/4424154250_1_1_1.jpg', '{\n	\"images\": [{\n		\"img01\": \"views/img/products/4424154250_1_1_1.jpg\",\n		\"img02\": \"views/img/products/4424154250_6_1_1.jpg\",\n		\"img03\": \"views/img/products/4424154250_6_2_1.jpg\",\n		\"img04\": \"views/img/products/4424154250_6_3_1.jpg\"\n	}]\n}', 0, 0, 0, 0.000, 0, '2019-06-23', 0, 250.000, 3.500, '2019-06-23 20:43:00', 1, 3),
(9, 'vestido-estructura-nina-0000000001', 'Vestido estructura', 'Verde', '#00FF00', 'Vestido de punto crochet con cuello halter y manga sisa.', 'Vestido de punto crochet con cuello halter y manga sisa.', '{\n\n	\"8\": {\n		\"description\": \"7-8 Años\",\n		\"stock\": 10\n	},\n	\"10\": {\n		\"description\": \"9-10 Años\",\n		\"stock\": 20\n	},\n	\"12\": {\n		\"description\": \"11-12 Años\",\n		\"stock\": 30\n	},\n	\"14\": {\n		\"description\": \"13-14 Años\",\n		\"stock\": 40\n	}\n\n}', 19.950, 'views/img/products/5802601105_6_1_1.jpg', '{\n	\"images\": [{\n		\"img01\": \"views/img/products/5802601105_6_1_1.jpg\",\n		\"img02\": \"views/img/products/5802601105_6_2_1.jpg\",\n		\"img03\": \"views/img/products/5802601105_6_3_1.jpg\",\n		\"img04\": \"views/img/products/5802601105_1_1_1.jpg\"\n	}]\n}', 453, 54, 1, 14.950, 20, '2020-06-23', 0, 600.000, 3.500, '2020-06-23 16:17:00', 2, 14),
(10, 'legging-nina-rib-0000000001', 'Legging Rib', 'negro', '#000000', 'Legging rib cinturilla el?stica. Aplique etiqueta en bajo.', 'Legging rib cinturilla el?stica. Aplique etiqueta en bajo.', '{\n\n	\"8\": {\n		\"description\": \"7-8 Años\",\n		\"stock\": 10\n	},\n	\"10\": {\n		\"description\": \"9-10 Años\",\n		\"stock\": 0\n	},\n	\"12\": {\n		\"description\": \"11-12 Años\",\n		\"stock\": 30\n	},\n	\"14\": {\n		\"description\": \"13-14 Años\",\n		\"stock\": 40\n	}\n\n}', 15.000, 'views/img/products/3402608800_6_1_1.jpg\n', '{\n	\"images\": [{\n		\"img01\": \"views/img/products/3402608800_6_1_1.jpg\",\n		\"img02\": \"views/img/products/3402608800_6_2_1.jpg\",\n		\"img03\": \"views/img/products/3402608800_6_3_1.jpg\",\n		\"img04\": \"views/img/products/3402608800_1_1_1.jpg\"\n	}]\n}', 543, 239, 1, 9.990, 40, '2023-06-23', 0, 300.000, 3.500, NULL, 2, 9),
(11, 'vestido-lino-0000000001', 'Vestido corto de lino', 'Beige', '#f5ffff', 'Vestido confeccionado con tejido en mezcla de lino.Cuello redondo y manga corta. Tejido rapeado. Espalda descubierta con detalle de tejido trenzado. Cierre en espalda con cremallera oculta en costura.', 'Vestido confeccionado con tejido en mezcla de lino.Cuello redondo y manga corta. Tejido rapeado. Espalda descubierta con detalle de tejido trenzado. Cierre en espalda con cremallera oculta en costura.', '{\r\n\r\n	\"P\": {\r\n		\"description\": \"Pequeña\",\r\n		\"stock\": 10\r\n	},\r\n	\"M\": {\r\n		\"description\": \"Mediana\",\r\n		\"stock\": 20\r\n	},\r\n	\"G\": {\r\n		\"description\": \"Grande\",\r\n		\"stock\": 0\r\n	}\r\n\r\n}', 35.000, 'views/img/products/4661325052_1_1_1.jpg', '{\n	\"product-image\": {\n		\"img01\": \"views/img/products/4661325052_1_1_1.jpg\",\n		\"img02\": \"views/img/products/4661325052_2_1_1.jpg\",\n		\"img03\": \"views/img/products/4661325052_2_2_1.jpg\",\n		\"img04\": \"views/img/products/4661325052_2_3_1.jpg\",\n		\"img05\": \"views/img/products/4661325052_2_4_1.jpg\",\n		\"img06\": \"views/img/products/4661325052_6_1_1.jpg\",\n		\"img07\": \"views/img/products/4661325052_6_2_1.jpg\",\n		\"img08\": \"views/img/products/4661325052_6_3_1.jpg\",\n		\"img09\": \"views/img/products/4661325052_6_4_1.jpg\"\n	},\n	\"care\": {\n		\"care01\": {\n			\"instruction\": \"Lavado en maquina, temperatura maxima 30 grados C\",\n			\"care-picture\": \"views/img/products/4661325052_6_3_1.jpg\"\n		}\n	}\n}', 567, 23, 0, 35.000, 0, '2023-07-04', 1, 500.000, 3.500, '2023-07-03 16:37:30', 1, 8),
(12, 'vestido-midi-halter-0000000001', 'VESTIDO MIDI HALTER', 'Verde', '#00FF00', 'Vestido midi de cuello halter ajustable con lazadas en mismo tejido. Detalle de pliegues laterales.', 'Vestido midi de cuello halter ajustable con lazadas en mismo tejido. Detalle de pliegues laterales.', '{\r\n\r\n	\"P\": {\r\n		\"description\": \"Pequeña\",\r\n		\"stock\": 0\r\n	},\r\n	\"M\": {\r\n		\"description\": \"Mediana\",\r\n		\"stock\": 20\r\n	},\r\n	\"G\": {\r\n		\"description\": \"Grande\",\r\n		\"stock\": 10\r\n	}\r\n\r\n}', 45.000, 'views/img/products/2298025500_1_1_1.jpg', '{\r\n	\"images\": [{\r\n		\"img01\": \"views/img/products/2298025500_1_1_1.jpg\",\r\n		\"img02\": \"views/img/products/2298025500_2_1_1.jpg\",\r\n		\"img03\": \"views/img/products/2298025500_2_2_1.jpg\",\r\n		\"img04\": \"views/img/products/2298025500_2_3_1.jpg\",\r\n		\"img05\": \"views/img/products/2298025500_2_4_1.jpg\",\r\n		\"img07\": \"views/img/products/2298025500_6_1_1.jpg\",\r\n		\"img08\": \"views/img/products/2298025500_6_2_1.jpg\",\r\n		\"img09\": \"views/img/products/2298025500_6_3_1.jpg\"\r\n	}]\r\n}', 528, 36, 1, 25.000, 40, '2023-07-03', 0, 600.000, 3.500, '2023-07-03 16:44:46', 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategory`
--

CREATE TABLE `subcategory` (
  `idsubcategory` int(11) NOT NULL,
  `subcategory` text DEFAULT NULL,
  `route` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category_idcategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `subcategory`
--

INSERT INTO `subcategory` (`idsubcategory`, `subcategory`, `route`, `date`, `category_idcategory`) VALUES
(1, 'Leggings', 'leggings-mujer', '0000-00-00 00:00:00', 1),
(2, 'Joggers', 'joggers-mujer', '0000-00-00 00:00:00', 1),
(3, 'Camisetas', 'camisetas-mujer', '0000-00-00 00:00:00', 1),
(4, 'Faldas', 'faldas-mujer', '0000-00-00 00:00:00', 1),
(7, 'Shorts', 'shorts-mujer', '0000-00-00 00:00:00', 1),
(8, 'Vestidos', 'vestidos-mujer', '0000-00-00 00:00:00', 1),
(9, 'Leggings', 'leggins-infantil', '0000-00-00 00:00:00', 2),
(10, 'Shorts', 'shorts-infantil', '0000-00-00 00:00:00', 2),
(11, 'Camisetas', 'camisetas-infantil', '0000-00-00 00:00:00', 2),
(12, 'Buzos', 'buzos-infantil', '0000-00-00 00:00:00', 2),
(13, 'Camisetas', 'camisetas-hombre', '0000-00-00 00:00:00', 3),
(14, 'Vestidos', 'vestidos-infantil', '2020-06-23 16:26:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `template`
--

CREATE TABLE `template` (
  `idtemplate` int(11) NOT NULL,
  `topBarShow` int(1) DEFAULT NULL,
  `topBarText` text DEFAULT NULL,
  `topBarTextColor` text DEFAULT NULL,
  `topBarBgColor` text DEFAULT NULL,
  `mainBarTextColor` text DEFAULT NULL,
  `mainBarBgColor` text DEFAULT NULL,
  `mainBarSocialNetwork` text DEFAULT NULL,
  `hoverColor` text DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `template`
--

INSERT INTO `template` (`idtemplate`, `topBarShow`, `topBarText`, `topBarTextColor`, `topBarBgColor`, `mainBarTextColor`, `mainBarBgColor`, `mainBarSocialNetwork`, `hoverColor`, `icon`, `date`) VALUES
(1, 0, '#promoText', '#F2F2F2', '#F2F2F2', '#F2F2F2', '#F2F2F2', '#F2F2F2', '#F2F2F2', 'views/img/template/zoe.png', '2023-06-26 16:36:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idproduct`),
  ADD KEY `fk_products_category1_idx` (`category_idcategory`),
  ADD KEY `fk_products_subcategory1_idx` (`subcategory_idsubcategory`);

--
-- Indices de la tabla `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`idsubcategory`),
  ADD KEY `fk_subcategory_category_idx` (`category_idcategory`);

--
-- Indices de la tabla `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`idtemplate`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `idcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `idproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `idsubcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `template`
--
ALTER TABLE `template`
  MODIFY `idtemplate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_category1` FOREIGN KEY (`category_idcategory`) REFERENCES `category` (`idcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_subcategory1` FOREIGN KEY (`subcategory_idsubcategory`) REFERENCES `subcategory` (`idsubcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `fk_subcategory_category` FOREIGN KEY (`category_idcategory`) REFERENCES `category` (`idcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
