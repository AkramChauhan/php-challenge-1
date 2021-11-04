-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 02:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serempre_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Bogotá'),
(2, 'Medellín'),
(3, 'Cali'),
(4, 'Barranquilla'),
(5, 'Cartagena'),
(6, 'Soacha'),
(7, 'Palermo'),
(8, 'Cúcuta'),
(9, 'Soledad'),
(10, 'Pereira'),
(11, 'Bucaramanga'),
(12, 'Valledupar'),
(13, 'Ibagué'),
(14, 'Villavicencio'),
(15, 'Santa Marta'),
(16, 'Montería'),
(17, 'Manizales'),
(18, 'Buenaventura'),
(19, 'Pasto'),
(20, 'Bello'),
(21, 'Neiva'),
(22, 'Armenia'),
(23, 'Popayán'),
(24, 'Sincelejo'),
(25, 'Floridablanca'),
(26, 'Itagüí'),
(27, 'Envigado'),
(28, 'Tuluá'),
(29, 'Tumaco'),
(30, 'Barrancabermeja'),
(31, 'Tunja'),
(32, 'Zipaquirá'),
(33, 'Turbo'),
(34, 'Yopal'),
(35, 'Dosquebradas'),
(36, 'Ríohacha'),
(37, 'Girón'),
(38, 'Florencia'),
(39, 'Fusagasugá'),
(40, 'Cartago'),
(41, 'Pitalito'),
(42, 'Ciénaga'),
(43, 'Sogamoso'),
(44, 'Quibdó'),
(45, 'Girardot'),
(46, 'Duitama'),
(47, 'Magangué'),
(48, 'Maicao'),
(49, 'Uribia'),
(50, 'Piedecuesta'),
(51, 'Facatativá'),
(52, 'Guadalajara de Buga'),
(53, 'Madrid'),
(54, 'Santander de Quilichao'),
(55, 'Aguachica'),
(56, 'Ipiales'),
(57, 'Chía'),
(58, 'Jamundí'),
(59, 'Arauca'),
(60, 'Yumbo'),
(61, 'Mosquera'),
(62, 'Fundación'),
(63, 'Ocaña'),
(64, 'Montelíbano'),
(65, 'Chiquinquirá'),
(66, 'Sabanalarga'),
(67, 'Chigorodó'),
(68, 'Cereté'),
(69, 'Caldas'),
(70, 'Funza'),
(71, 'Los Patios'),
(72, 'Tierralta'),
(73, 'El Carmen de Bolívar'),
(74, 'La Dorada'),
(75, 'Arjona'),
(76, 'Turbaco'),
(77, 'Espinal'),
(78, 'Acacías'),
(79, 'Copacabana'),
(80, 'Santa Rosa de Cabal'),
(81, 'San Vicente del Caguán'),
(82, 'San Andrés'),
(83, 'Corozal'),
(84, 'Villa del Rosario'),
(85, 'Garzón'),
(86, 'Planeta Rica'),
(87, 'Necoclí'),
(88, 'San José del Guaviare'),
(89, 'Manaure'),
(90, 'Marinilla'),
(91, 'Ciénaga de Oro'),
(92, 'Puerto Asís'),
(93, 'Riosucio'),
(94, 'Plato'),
(95, 'Carepa'),
(96, 'Cajicá'),
(97, 'Villamaría'),
(98, 'San Marcos'),
(99, 'Girardota'),
(100, 'Florida'),
(101, 'Pamplona'),
(102, 'Pradera'),
(103, 'Orito'),
(104, 'Puerto Boyacá'),
(105, 'El Banco'),
(106, 'San Gil'),
(107, 'Sabaneta'),
(108, 'Valle del Guamuez'),
(109, 'Puerto Libertador'),
(110, 'Tame'),
(111, 'Barbosa'),
(112, 'Lorica'),
(113, 'San Onofre'),
(114, 'Guarne'),
(115, 'El Bagre'),
(116, 'Chinú'),
(117, 'Baranoa'),
(118, 'Puerto Berrío'),
(119, 'Cimitarra'),
(120, 'María la Baja'),
(121, 'Agustín Codazzi'),
(122, 'Samaniego'),
(123, 'Carmen de Viboral'),
(124, 'Yarumal'),
(125, 'La Vega'),
(126, 'Chaparral'),
(127, 'Andes'),
(128, 'San Andrés de Sotavento'),
(129, 'Ayapel'),
(130, 'Urrao'),
(131, 'Zarzal'),
(132, 'Valencia'),
(133, 'Roldanillo'),
(134, 'Puerto Tejada'),
(135, 'Santa Rosa del Sur'),
(136, 'San Pelayo'),
(137, 'Arboletes'),
(138, 'Villeta'),
(139, 'Aguazul'),
(140, 'Cumaribo'),
(141, 'Miranda'),
(142, 'El Charco'),
(143, 'Cáceres'),
(144, 'Montenegro'),
(145, 'Pueblo Nuevo'),
(146, 'Tuchín'),
(147, 'Arauquita'),
(148, 'Guaduas'),
(149, 'Pie de Pató'),
(150, 'Cumbal'),
(151, 'Aracataca'),
(152, 'La Unión'),
(153, 'Túquerres'),
(154, 'Acevedo'),
(155, 'Bosconia'),
(156, 'Líbano'),
(157, 'Villa de San Diego de Ubaté'),
(158, 'San Juan del Cesar'),
(159, 'Tarazá'),
(160, 'Cajibío'),
(161, 'Segovia'),
(162, 'Sibaté'),
(163, 'Sampués'),
(164, 'Dibulla'),
(165, 'El Bordo'),
(166, 'Santa Rosa de Osos'),
(167, 'Tibú'),
(168, 'Melgar'),
(169, 'Dagua'),
(170, 'La Macarena'),
(171, 'Belalcázar'),
(172, 'Sonsón'),
(173, 'San Pablo'),
(174, 'San Bernardo del Viento'),
(175, 'Santiago de Tolú'),
(176, 'Guacarí'),
(177, 'Timbío'),
(178, 'Gigante'),
(179, 'Cartagena del Chairá'),
(180, 'Tocancipá'),
(181, 'Yarumal'),
(182, 'Quimbaya'),
(183, 'Fonseca'),
(184, 'San Vicente de Chucurí'),
(185, 'Puerto López'),
(186, 'San Luis de Sincé'),
(187, 'Campoalegre'),
(188, 'Sabanagrande'),
(189, 'Caldono'),
(190, 'San Agustín'),
(191, 'San Juan Nepomuceno'),
(192, 'Majagual'),
(193, 'Quinchía'),
(194, 'Puerto Rico'),
(195, 'San Antero'),
(196, 'Corinto'),
(197, 'Pivijay'),
(198, 'Puebloviejo'),
(199, 'Bocas de Satinga'),
(200, 'Puerto Escondido'),
(201, 'Silvia'),
(202, 'El Difícil'),
(203, 'Inzá'),
(204, 'Leticia'),
(205, 'La Virginia'),
(206, 'San Pedro de Urabá'),
(207, 'Remedios'),
(208, 'Paipa'),
(209, 'Guachavés'),
(210, 'Sitionuevo'),
(211, 'Puerto Wilches'),
(212, 'Neira'),
(213, 'Guamo'),
(214, 'Circasia'),
(215, 'Amagá'),
(216, 'Chimichagua'),
(217, 'Planadas'),
(218, 'Fresno'),
(219, 'Purificación'),
(220, 'Tabio'),
(221, 'Barbosa'),
(222, 'Flandes'),
(223, 'Aipe'),
(224, 'Sopó'),
(225, 'Moñitos'),
(226, 'Riosucio'),
(227, 'La Dorada'),
(228, 'La Calera'),
(229, 'Caicedonia'),
(230, 'Hatonuevo'),
(231, 'San Carlos'),
(232, 'Isnos'),
(233, 'Coyaima'),
(234, 'Mitú'),
(235, 'Guamal'),
(236, 'Luruaco'),
(237, 'Belén de Umbría'),
(238, 'Argelia'),
(239, 'Supía'),
(240, 'Ciudad Bolívar'),
(241, 'Repelón'),
(242, 'San Juan de Urabá'),
(243, 'Puerto Colombia'),
(244, 'Fortul'),
(245, 'Morales'),
(246, 'Los Córdobas'),
(247, 'San Benito Abad'),
(248, 'San Alberto'),
(249, 'Balboa'),
(250, 'Pensilvania'),
(251, 'Paz de Ariporo'),
(252, 'Buesaco'),
(253, 'Istmina'),
(254, 'Santa Ana'),
(255, 'San Martín'),
(256, 'Palmar de Varela'),
(257, 'Nechí'),
(258, 'Yolombó'),
(259, 'Solano'),
(260, 'Vistahermosa'),
(261, 'San José'),
(262, 'La Unión'),
(263, 'Chocontá'),
(264, 'Sandoná'),
(265, 'Pinillos'),
(266, 'Socorro'),
(267, 'Tauramena'),
(268, 'Villanueva'),
(269, 'Algeciras'),
(270, 'Santa Rosa'),
(271, 'Pueblo Bello'),
(272, 'El Retorno'),
(273, 'Valdivia'),
(274, 'Puerto Guzmán'),
(275, 'La Montañita'),
(276, 'Donmatías'),
(277, 'Rioblanco'),
(278, 'Marsella'),
(279, 'Cogua'),
(280, 'El Zulia'),
(281, 'Honda'),
(282, 'El Paso'),
(283, 'Canalete'),
(284, 'Teorama'),
(285, 'San José'),
(286, 'Ponedera'),
(287, 'Alcalá'),
(288, 'Puerto Concordia'),
(289, 'Achí'),
(290, 'Curumaní'),
(291, 'Dabeiba'),
(292, 'Guadalupe'),
(293, 'Ataco'),
(294, 'Santa Fe de Antioquia'),
(295, 'Amalfi'),
(296, 'Buenavista'),
(297, 'Manzanares'),
(298, 'Sardinata'),
(299, 'Mutatá'),
(300, 'La Jagua de Ibirico'),
(301, 'Natagaima'),
(302, 'El Doncello'),
(303, 'El Colegio'),
(304, 'Pailitas'),
(305, 'Timbiquí'),
(306, 'Tiquisio'),
(307, 'Mocoa'),
(308, 'Silvania'),
(309, 'Taminango'),
(310, 'Ginebra'),
(311, 'Puerto Triunfo'),
(312, 'San Jacinto'),
(313, 'Nueva Granada'),
(314, 'Galeras'),
(315, 'Villagarzón'),
(316, 'San Bernardo'),
(317, 'El Paujíl'),
(318, 'Santa Bárbara'),
(319, 'Moniquirá'),
(320, 'Almaguer'),
(321, 'Totoró'),
(322, 'Aguadas'),
(323, 'Montecristo'),
(324, 'Suaza'),
(325, 'Villapinzón'),
(326, 'Fredonia'),
(327, 'El Retén'),
(328, 'Bugalagrande'),
(329, 'López'),
(330, 'Sotomayor'),
(331, 'Ovejas'),
(332, 'Samacá'),
(333, 'Timaná'),
(334, 'San Lorenzo'),
(335, 'Concordia'),
(336, 'Simití'),
(337, 'Tenjo'),
(338, 'Rovira'),
(339, 'Inírida'),
(340, 'Urumita'),
(341, 'Polonuevo'),
(342, 'La Unión'),
(343, 'Tadó'),
(344, 'Vélez'),
(345, 'Tocaima'),
(346, 'Villa de Leyva'),
(347, 'Campo de la Cruz'),
(348, 'Sabana de Torres'),
(349, 'Pelaya'),
(350, 'Salgar'),
(351, 'La Primavera'),
(352, 'Guaranda'),
(353, 'Suesca'),
(354, 'Betulia'),
(355, 'El Rosal'),
(356, 'Retiro'),
(357, 'Puerto Carreño'),
(358, 'El Piñón'),
(359, 'Anorí'),
(360, 'Aquitania'),
(361, 'Chivolo'),
(362, 'Guasca'),
(363, 'Landázuri'),
(364, 'Támesis'),
(365, 'Obando'),
(366, 'Condoto'),
(367, 'Sopetrán'),
(368, 'Tenerife'),
(369, 'Juan de Acosta'),
(370, 'Titiribí'),
(371, 'El Carmen de Atrato'),
(372, 'Río de Oro'),
(373, 'Córdoba'),
(374, 'Guapí'),
(375, 'Jardín'),
(376, 'Altos del Rosario'),
(377, 'Filandia'),
(378, 'Manatí'),
(379, 'San Jacinto del Cauca'),
(380, 'Rosas'),
(381, 'Anolaima'),
(382, 'Los Santos'),
(383, 'Santa Bárbara de Pinto'),
(384, 'Candelaria'),
(385, 'Saboyá'),
(386, 'Hatillo de Loba'),
(387, 'Córdoba'),
(388, 'Ebéjico'),
(389, 'Caimito'),
(390, 'Curití'),
(391, 'Oiba'),
(392, 'Santa Lucía'),
(393, 'Puente Nacional'),
(394, 'La Unión'),
(395, 'Cisneros'),
(396, 'Guayabal'),
(397, 'Talaigua Nuevo'),
(398, 'Coveñas'),
(399, 'Bojacá'),
(400, 'El Playón'),
(401, 'El Águila'),
(402, 'Agua de Dios'),
(403, 'El Tarra'),
(404, 'Mogotes'),
(405, 'Santo Domingo'),
(406, 'Tubará'),
(407, 'Regidor'),
(408, 'Lenguazaque'),
(409, 'Charalá'),
(410, 'Medina'),
(411, 'Granada'),
(412, 'Suaita'),
(413, 'Margarita'),
(414, 'Norosí'),
(415, 'Chita'),
(416, 'Pesca'),
(417, 'Granada'),
(418, 'Tibaná'),
(419, 'San Zenón'),
(420, 'Nuquí'),
(421, 'Alvarado'),
(422, 'Zapatoca'),
(423, 'Junín'),
(424, 'Iles'),
(425, 'La Belleza'),
(426, 'Usiacurí'),
(427, 'Muzo'),
(428, 'Orocué'),
(429, 'Guatapé'),
(430, 'San Francisco'),
(431, 'Aratoca'),
(432, 'Uramita'),
(433, 'Uribe'),
(434, 'Motavita'),
(435, 'Pedraza'),
(436, 'Puerto Parra'),
(437, 'San Luis de Palenque'),
(438, 'Paratebueno'),
(439, 'Santana'),
(440, 'Coromoro'),
(441, 'Ambalema'),
(442, 'Tarso'),
(443, 'Maripí'),
(444, 'Simacota'),
(445, 'Soatá'),
(446, 'Tona'),
(447, 'Socha'),
(448, 'Salento'),
(449, 'Boavita'),
(450, 'Guatavita'),
(451, 'Güicán'),
(452, 'Puerto Nariño'),
(453, 'Cubará'),
(454, 'Tasco'),
(455, 'Florián'),
(456, 'Heliconia'),
(457, 'Colosó'),
(458, 'Albán'),
(459, 'Sutamarchán'),
(460, 'Chitaraque'),
(461, 'Zipacón'),
(462, 'Chíquiza'),
(463, 'Villanueva'),
(464, 'Caramanta'),
(465, 'Tota'),
(466, 'Córdoba'),
(467, 'El Cocuy'),
(468, 'Arcabuco'),
(469, 'San José de Pare'),
(470, 'Labranzagrande'),
(471, 'Togüí'),
(472, 'Piojó'),
(473, 'El Peñón'),
(474, 'Chiscas'),
(475, 'Santa Rosalía'),
(476, 'El Espino'),
(477, 'Puerto Rondón'),
(478, 'Sáchica'),
(479, 'Güepsa'),
(480, 'San Mateo'),
(481, 'Guavatá'),
(482, 'Guayabal de Síquima'),
(483, 'Chinavita'),
(484, 'Concepción'),
(485, 'La Jagua del Pilar'),
(486, 'Cravo Norte'),
(487, 'Palmar'),
(488, 'Tipacoque'),
(489, 'Susacón'),
(490, 'Tinjacá'),
(491, 'Sora'),
(492, 'Covarachía'),
(493, 'Oicatá'),
(494, 'Guataquí'),
(495, 'Santa Sofía'),
(496, 'Jerusalén'),
(497, 'Gachantivá'),
(498, 'Briceño'),
(499, 'La Uvita'),
(500, 'Encino'),
(501, 'Vetas'),
(502, 'Juradó'),
(503, 'Iza'),
(504, 'Sativanorte'),
(505, 'Palmas del Socorro'),
(506, 'Almeida'),
(507, 'Guacamayas'),
(508, 'Galán'),
(509, 'Tutazá'),
(510, 'Cepitá'),
(511, 'San Eduardo'),
(512, 'Tununguá'),
(513, 'Pajarito'),
(514, 'La Victoria'),
(515, 'Panqueba'),
(516, 'Sativasur'),
(517, 'Mahates'),
(518, 'Barichara'),
(519, 'La Estrella'),
(520, 'Malambo'),
(521, 'Rionegro'),
(522, 'Galapa'),
(523, 'Cota'),
(524, 'La Tebaida'),
(525, 'Chinchiná'),
(526, 'Gachancipá'),
(527, 'La Ceja'),
(528, 'Santuario'),
(529, 'Calarcá'),
(530, 'Sesquilé'),
(531, 'Santo Tomás'),
(532, 'Nobsa'),
(533, 'Málaga'),
(534, 'Palmira'),
(535, 'Providencia'),
(536, 'Candelaria'),
(537, 'Apartadó'),
(538, 'Guateque'),
(539, 'Piendamó'),
(540, 'Sahagún'),
(541, 'Marmato'),
(542, 'Suan'),
(543, 'Santa Isabel'),
(544, 'La Mesa'),
(545, 'Villa Rica'),
(546, 'Puerto Santander'),
(547, 'Granada'),
(548, 'Sibundoy'),
(549, 'Cotorra'),
(550, 'Cachipay'),
(551, 'Gualmatán'),
(552, 'Buenos Aires'),
(553, 'Belén'),
(554, 'Recetor'),
(555, 'Coello'),
(556, 'Tena'),
(557, 'Tibasosa'),
(558, 'Génova'),
(559, 'Marquetalia'),
(560, 'Peñol'),
(561, 'San Pablo'),
(562, 'Guática'),
(563, 'Clemencia'),
(564, 'Contadero'),
(565, 'Nilo'),
(566, 'La Pintada'),
(567, 'Pupiales'),
(568, 'Susa'),
(569, 'Ulloa'),
(570, 'Villanueva'),
(571, 'Cicuco'),
(572, 'San Cristóbal'),
(573, 'San Antonio del Tequendama'),
(574, 'Andalucía'),
(575, 'Anserma'),
(576, 'Prado-Sevilla'),
(577, 'Palocabildo'),
(578, 'Cáqueza'),
(579, 'Cabrera'),
(580, 'Cartago'),
(581, 'Ospina'),
(582, 'Nemocón'),
(583, 'Simijaca'),
(584, 'El Cerrito'),
(585, 'Carlosama'),
(586, 'Aldana'),
(587, 'Nuevo Colón'),
(588, 'Nimaima'),
(589, 'Palestina'),
(590, 'Berruecos'),
(591, 'Apía'),
(592, 'Pueblorrico'),
(593, 'Purísima de la Concepción'),
(594, 'Chivatá'),
(595, 'San Sebastián de Mariquita'),
(596, 'Restrepo'),
(597, 'San Pedro'),
(598, 'Calamar'),
(599, 'Jenesano'),
(600, 'Florencia'),
(601, 'Anapoima'),
(602, 'San José'),
(603, 'Tópaga'),
(604, 'Venecia'),
(605, 'Cucaita'),
(606, 'Angelópolis'),
(607, 'Santa Rosa de Viterbo'),
(608, 'Padilla'),
(609, 'Sutatenza'),
(610, 'Momil'),
(611, 'Risaralda'),
(612, 'Ventaquemada'),
(613, 'Caloto'),
(614, 'Guachené'),
(615, 'Yacuanquer'),
(616, 'San Vicente'),
(617, 'Manaure Balcón del Cesar'),
(618, 'Pinchote'),
(619, 'Turbaná'),
(620, 'Hispania'),
(621, 'Nariño'),
(622, 'Chinácota'),
(623, 'Villanueva'),
(624, 'Vijes'),
(625, 'Cómbita'),
(626, 'Boyacá'),
(627, 'Concordia'),
(628, 'Chachagüí'),
(629, 'Viterbo'),
(630, 'Soplaviento'),
(631, 'Guachucal'),
(632, 'Soracá'),
(633, 'La Vega'),
(634, 'San Pedro'),
(635, 'Mompós'),
(636, 'Belalcázar'),
(637, 'Ciénega'),
(638, 'Oporapa'),
(639, 'Sasaima'),
(640, 'Santa Catalina'),
(641, 'La Hormiga'),
(642, 'Garagoa'),
(643, 'Jambaló'),
(644, 'Tenza'),
(645, 'Nocaima'),
(646, 'Toro'),
(647, 'Los Palmitos'),
(648, 'Palmito'),
(649, 'Subachoque'),
(650, 'La Celia'),
(651, 'Morroa'),
(652, 'San Jerónimo'),
(653, 'Ancuya'),
(654, 'Buenavista'),
(655, 'Consacá'),
(656, 'Imués'),
(657, 'San Pedro'),
(658, 'Sutatausa'),
(659, 'Cocorná'),
(660, 'González'),
(661, 'La Cruz'),
(662, 'Ricaurte'),
(663, 'Lebrija'),
(664, 'Monguí'),
(665, 'Sevilla'),
(666, 'Enciso'),
(667, 'San Juan de Betulia'),
(668, 'Ragonvalia'),
(669, 'San Estanislao'),
(670, 'Santuario'),
(671, 'Ramiriquí'),
(672, 'Caucasia'),
(673, 'Pital'),
(674, 'Saldaña'),
(675, 'Guaitarilla'),
(676, 'Jericó'),
(677, 'Pandi'),
(678, 'Úmbita'),
(679, 'Aranzazu'),
(680, 'Palestina'),
(681, 'Betania'),
(682, 'Fúquene'),
(683, 'Guachetá'),
(684, 'Apulo'),
(685, 'Saravena'),
(686, 'Capitanejo'),
(687, 'Turmequé'),
(688, 'Toribío'),
(689, 'Lérida'),
(690, 'Ráquira'),
(691, 'Sucre'),
(692, 'Linares'),
(693, 'Tolú Viejo'),
(694, 'Ocamonte'),
(695, 'La Florida'),
(696, 'Arroyohondo'),
(697, 'Pacho'),
(698, 'Siachoque'),
(699, 'Distracción'),
(700, 'Fosca'),
(701, 'Toca'),
(702, 'Buenavista'),
(703, 'Cerro de San Antonio'),
(704, 'Venadillo'),
(705, 'Guadalupe'),
(706, 'Tuta'),
(707, 'La Apartada'),
(708, 'Somondoco'),
(709, 'San Pablo de Borbur'),
(710, 'Páramo'),
(711, 'Útica'),
(712, 'Valparaíso'),
(713, 'Ubaque'),
(714, 'Rivera'),
(715, 'Nariño'),
(716, 'La Plata'),
(717, 'Viotá'),
(718, 'Chipatá'),
(719, 'Chipaque'),
(720, 'Filadelfia'),
(721, 'Cucunubá'),
(722, 'Vianí'),
(723, 'Cerinza'),
(724, 'Campamento'),
(725, 'Sapuyes'),
(726, 'Icononzo'),
(727, 'Ansermanuevo'),
(728, 'Cuítiva'),
(729, 'Firavitoba'),
(730, 'La Peña'),
(731, 'Quetame'),
(732, 'Barranco de Loba'),
(733, 'Armenia'),
(734, 'San José de Miranda'),
(735, 'Argelia'),
(736, 'Cañasgordas'),
(737, 'Toledo'),
(738, 'Gamarra'),
(739, 'Trujillo'),
(740, 'Carmen de Apicalá'),
(741, 'Bolívar'),
(742, 'El Roble'),
(743, 'Cumbitara'),
(744, 'Anzoátegui'),
(745, 'La Victoria'),
(746, 'Quebradanegra'),
(747, 'Floresta'),
(748, 'Buenavista'),
(749, 'Balboa'),
(750, 'Albania'),
(751, 'Liborina'),
(752, 'Arbeláez'),
(753, 'Ánimas'),
(754, 'Choachí'),
(755, 'San Fernando'),
(756, 'Quipile'),
(757, 'San Luis'),
(758, 'La Sierra'),
(759, 'Yotoco'),
(760, 'Viracachá'),
(761, 'Tarqui'),
(762, 'San Roque'),
(763, 'Falan'),
(764, 'La Merced'),
(765, 'Barrancas'),
(766, 'Riofrío'),
(767, 'Chimá'),
(768, 'Entrerríos'),
(769, 'Argelia'),
(770, 'Pasca'),
(771, 'California'),
(772, 'Tibacuy'),
(773, 'Salamina'),
(774, 'Chalán'),
(775, 'Nátaga'),
(776, 'San Benito'),
(777, 'Pácora'),
(778, 'Tausa'),
(779, 'Elías'),
(780, 'Abejorral'),
(781, 'Caicedo'),
(782, 'Matanza'),
(783, 'Angostura'),
(784, 'Arenal'),
(785, 'San Rafael'),
(786, 'Leiva'),
(787, 'La Cumbre'),
(788, 'El Cairo'),
(789, 'Valle de San José'),
(790, 'Une'),
(791, 'Gachetá'),
(792, 'Busbanzá'),
(793, 'San Francisco'),
(794, 'Salamina'),
(795, 'Pauna'),
(796, 'El Tablón'),
(797, 'Albania'),
(798, 'Tibirita'),
(799, 'San Sebastián de Buenavista'),
(800, 'La Capilla'),
(801, 'Olaya'),
(802, 'El Tambo'),
(803, 'El Peñol'),
(804, 'Casabianca'),
(805, 'La Argentina'),
(806, 'Quípama'),
(807, 'San Cayetano'),
(808, 'Belén'),
(809, 'Caldas'),
(810, 'Paispamba'),
(811, 'Gámeza'),
(812, 'Bochalema'),
(813, 'San Sebastián'),
(814, 'Gómez Plata'),
(815, 'Hobo'),
(816, 'Nariño'),
(817, 'San Andrés'),
(818, 'Policarpa'),
(819, 'El Molino'),
(820, 'Giraldo'),
(821, 'Santiago'),
(822, 'Tangua'),
(823, 'Miraflores'),
(824, 'Puerto Salgar'),
(825, 'Confines'),
(826, 'Cajamarca'),
(827, 'Gramalote'),
(828, 'San Miguel de Sema'),
(829, 'Corrales'),
(830, 'Herrán'),
(831, 'Íquira'),
(832, 'Bituima'),
(833, 'Guayatá'),
(834, 'Colón'),
(835, 'Vergara'),
(836, 'Zambrano'),
(837, 'Sabanalarga'),
(838, 'Lourdes'),
(839, 'Villahermosa'),
(840, 'La Palma'),
(841, 'San Martín de Loba'),
(842, 'Alejandría'),
(843, 'Ortega'),
(844, 'Gama'),
(845, 'Paz de Río'),
(846, 'La Playa'),
(847, 'Valle de San Juan'),
(848, 'Puerto Nare'),
(849, 'San Antonio'),
(850, 'Algarrobo'),
(851, 'Anzá'),
(852, 'Pachavita'),
(853, 'Agrado'),
(854, 'Victoria'),
(855, 'Coconuco'),
(856, 'Yaguará'),
(857, 'Santa Rita'),
(858, 'Potosí'),
(859, 'Santa María'),
(860, 'El Peñón'),
(861, 'Tamalameque'),
(862, 'El Dovio'),
(863, 'Supatá'),
(864, 'Samaná'),
(865, 'San Calixto'),
(866, 'Versalles'),
(867, 'Jesús María'),
(868, 'Guapotá'),
(869, 'Génova'),
(870, 'Cértegui'),
(871, 'Suárez'),
(872, 'Berbeo'),
(873, 'El Dorado'),
(874, 'Salahonda'),
(875, 'Pamplonita'),
(876, 'La Tola'),
(877, 'San Andrés'),
(878, 'Villagómez'),
(879, 'Cumaral'),
(880, 'Machetá'),
(881, 'San José de la Montaña'),
(882, 'Jericó'),
(883, 'San Juan de Rioseco'),
(884, 'Guadalupe'),
(885, 'Norcasia'),
(886, 'Manta'),
(887, 'Aguada'),
(888, 'Carmen de Carupa'),
(889, 'Venecia'),
(890, 'Astrea'),
(891, 'Paime'),
(892, 'Carolina'),
(893, 'San Miguel'),
(894, 'Briceño'),
(895, 'Mistrató'),
(896, 'Zaragoza'),
(897, 'Mercaderes'),
(898, 'Ábrego'),
(899, 'Sotaquirá'),
(900, 'Sucre'),
(901, 'Pijiño del Carmen'),
(902, 'El Copey'),
(903, 'El Carmen de Chucurí'),
(904, 'Jordán'),
(905, 'Suárez'),
(906, 'Belmira'),
(907, 'San Carlos'),
(908, 'El Peñón'),
(909, 'Peque'),
(910, 'Beltrán'),
(911, 'San Bernardo'),
(912, 'Restrepo'),
(913, 'Morelia'),
(914, 'Saladoblanco'),
(915, 'Macanal'),
(916, 'Monterrey'),
(917, 'Contratación'),
(918, 'Tello'),
(919, 'Santa Isabel'),
(920, 'San Luis'),
(921, 'Tesalia'),
(922, 'Topaipí'),
(923, 'Caparrapí'),
(924, 'Punta de Piedras'),
(925, 'Herveo'),
(926, 'Hacarí'),
(927, 'Altamira'),
(928, 'Andagoya'),
(929, 'La Llanada'),
(930, 'Fuente de Oro'),
(931, 'Yuto'),
(932, 'Charta'),
(933, 'Buriticá'),
(934, 'Molagavita'),
(935, 'Coper'),
(936, 'Maceo'),
(937, 'Pijao'),
(938, 'Caracolí'),
(939, 'Puerres'),
(940, 'Mutiscua'),
(941, 'Fómeque'),
(942, 'Guaca'),
(943, 'Ubalá'),
(944, 'Castilla La Nueva'),
(945, 'Otanche'),
(946, 'San Francisco'),
(947, 'San Diego'),
(948, 'Mosquera'),
(949, 'Vegachí'),
(950, 'Yalí'),
(951, 'Betéitiva'),
(952, 'El Guamo'),
(953, 'Cucutilla'),
(954, 'Darién'),
(955, 'La Paz'),
(956, 'Prado'),
(957, 'Morales'),
(958, 'Guayabetal'),
(959, 'Bolívar'),
(960, 'San Martín'),
(961, 'Managrú'),
(962, 'El Rosario'),
(963, 'Paicol'),
(964, 'Durania'),
(965, 'Pueblo Rico'),
(966, 'Chaguaní'),
(967, 'Macaravita'),
(968, 'Cunday'),
(969, 'San Cayetano'),
(970, 'Cáchira'),
(971, 'La Paz'),
(972, 'Chiriguaná'),
(973, 'El Tambo'),
(974, 'Río Viejo'),
(975, 'La Esperanza'),
(976, 'Chima'),
(977, 'Carcasí'),
(978, 'Zetaquira'),
(979, 'Puerto Caicedo'),
(980, 'San Carlos de Guaroa'),
(981, 'Arboledas'),
(982, 'Frontino'),
(983, 'Rondón'),
(984, 'Rionegro'),
(985, 'Piedras'),
(986, 'San Joaquín'),
(987, 'Sucre'),
(988, 'Salazar'),
(989, 'Teruel'),
(990, 'La Gloria'),
(991, 'Curillo'),
(992, 'Ricaurte'),
(993, 'Guamal'),
(994, 'Yacopí'),
(995, 'Bucarasica'),
(996, 'Concepción'),
(997, 'Chámeza'),
(998, 'Beté'),
(999, 'Gachalá'),
(1000, 'Cerrito'),
(1001, 'Santiago'),
(1002, 'Paimadó'),
(1003, 'Payán'),
(1004, 'Lloró'),
(1005, 'Convención'),
(1006, 'Unguía'),
(1007, 'Hato'),
(1008, 'San Ángel'),
(1009, 'Silos'),
(1010, 'Cácota'),
(1011, 'Villavieja'),
(1012, 'Piedrancha'),
(1013, 'Chivor'),
(1014, 'Pulí'),
(1015, 'Santa María'),
(1016, 'Acandí'),
(1017, 'Villa Caro'),
(1018, 'Ituango'),
(1019, 'Barbacoas'),
(1020, 'Remolino'),
(1021, 'Cantagallo'),
(1022, 'Mongua'),
(1023, 'Dolores'),
(1024, 'Santa Bárbara'),
(1025, 'Baraya'),
(1026, 'Bagadó'),
(1027, 'Campohermoso'),
(1028, 'Solita'),
(1029, 'Iscuandé'),
(1030, 'San José del Fragua'),
(1031, 'Betulia'),
(1032, 'Murillo'),
(1033, 'Socotá'),
(1034, 'Pore'),
(1035, 'San Luis de Gaceno'),
(1036, 'Becerril'),
(1037, 'Toledo'),
(1038, 'Mutis'),
(1039, 'Abriaquí'),
(1040, 'Cabrera'),
(1041, 'Belén de los Andaquíes'),
(1042, 'Villarrica'),
(1043, 'Alpujarra'),
(1044, 'Bolívar'),
(1045, 'Puerto Meluk'),
(1046, 'Albania'),
(1047, 'Valparaíso'),
(1048, 'Yondó'),
(1049, 'Santa Helena del Opón'),
(1050, 'El Guacamayo'),
(1051, 'Onzaga'),
(1052, 'Barranca de Upía'),
(1053, 'Funes'),
(1054, 'Gámbita'),
(1055, 'San Juanito'),
(1056, 'Suratá'),
(1057, 'Chitagá'),
(1058, 'Lejanías'),
(1059, 'El Castillo'),
(1060, 'Marulanda'),
(1061, 'El Carmen'),
(1062, 'Nunchía'),
(1063, 'La Salina'),
(1064, 'Gutiérrez'),
(1065, 'Piamonte'),
(1066, 'Nóvita'),
(1067, 'San Juan de Arama'),
(1068, 'Páez'),
(1069, 'Colombia'),
(1070, 'Milán'),
(1071, 'Támara'),
(1072, 'Trinidad'),
(1073, 'El Calvario'),
(1074, 'Roncesvalles'),
(1075, 'Paya'),
(1076, 'Pizarro'),
(1077, 'Puerto Rico'),
(1078, 'Sabanalarga'),
(1079, 'Cubarral'),
(1080, 'Cabuyaro'),
(1081, 'Santa Genoveva de Docordó'),
(1082, 'Mesetas'),
(1083, 'Vigía del Fuerte'),
(1084, 'Puerto Lleras'),
(1085, 'Mapiripán'),
(1086, 'Sácama'),
(1087, 'Maní'),
(1088, 'Murindó'),
(1089, 'Santa Rosa'),
(1090, 'Sipí'),
(1091, 'Hato Corozal'),
(1092, 'Bellavista'),
(1093, 'Pisba'),
(1094, 'San José del Palmar'),
(1095, 'Curbaradó'),
(1096, 'Puerto Leguízamo'),
(1097, 'Puerto Gaitán'),
(1098, 'Miraflores'),
(1099, 'Carurú'),
(1100, 'Calamar'),
(1101, 'Taraira'),
(1102, 'San José de Uré');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `picture` varchar(180) DEFAULT NULL,
  `city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `code`, `picture`, `city`) VALUES
(10, 'Robert Jane', 'CL334', NULL, 1),
(11, 'Jesseca Peterson', 'JES1222', NULL, 4),
(12, 'David Raul', '3768', NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `name`, `username`, `password`) VALUES
(1, '3234233949', 'Administrator', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1107;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
