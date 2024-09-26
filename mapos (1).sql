-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jun-2021 às 02:42
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mapos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anexos`
--

CREATE TABLE `anexos` (
  `idAnexos` int(11) NOT NULL,
  `anexo` varchar(45) DEFAULT NULL,
  `thumb` varchar(45) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL,
  `path` varchar(300) DEFAULT NULL,
  `os_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

CREATE TABLE `area` (
  `idArea` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`idArea`, `nome`) VALUES
(0, ''),
(1, 'Humana'),
(2, 'Veterinária'),
(3, 'Odonto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `idCategorias` int(11) NOT NULL,
  `categoria` varchar(80) DEFAULT NULL,
  `cadastro` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('ppfjb520nsi0nji4m0vluvdmiug9f4ds', '::1', 1622862633, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836323633333b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('cbhe1hu3ehns83m8f1le592hd463v836', '::1', 1622863550, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836333535303b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('n8r21l0hs3ip7dfo4d2gdfsljufb09ko', '::1', 1622864137, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836343133373b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('i640k795spp8eg1jck3r8m6v88sokr5n', '::1', 1622864615, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836343631353b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('tg4gsl06ge0b4ra7jqdb1mf8mi2ifl7j', '::1', 1622864997, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836343939373b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('2oet0nlh9ljp4ctf6pkj0pvm960sfn89', '::1', 1622865303, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836353330333b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('masb326s1mmaab7ghcbnf36vg499a0cv', '::1', 1622865930, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836353933303b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('vel0t6tiqrq7hsicridc8j03pr6dsvnk', '::1', 1622866361, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836363336313b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('h34g8213p52l1c3rsn5t8r8lug2gia2c', '::1', 1622866709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836363730393b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('4n8gr2id0379t3uo3avsj6rpcj6oblda', '::1', 1622867094, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836373039343b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('lm6j0s2abfogdi8tm9bdg2fadrejkcrr', '::1', 1622867406, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836373430363b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('a1r4912lrplcqchdbbl1csc34gdkins8', '::1', 1622867769, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836373736393b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('0cm67m6htsk475mr55cq2kjn6sl0c81i', '::1', 1622868106, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836383130363b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('pfpei0g7qq1su97tg0gfic8abjkpne7e', '::1', 1622868485, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836383438353b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('eapi4danf84bqe2s1fjr9mgee2b9tkno', '::1', 1622868809, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836383830393b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('8grfm7hidkklhg3baovd2cjhrg961qoj', '::1', 1622869172, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836393137323b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('q0au7o42e5s0a53l9vdpq4pfso1bdl06', '::1', 1622869759, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323836393735393b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('h9on6ugh09apv256mjjpmir8tgv1dd0v', '::1', 1622870061, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323837303036313b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('2u1e65bm521n81qo1fg81pnt2m98mi84', '::1', 1622870161, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323837303036313b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('su8qh20s0fi70tufhlbg10l9ihl10v8i', '::1', 1622916824, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323931363832343b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('oo4r2mdbl6u25b7dk3oe3rt8vqdj4o01', '::1', 1622917250, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323931373235303b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('lacd8uo2shkgd95jq9449ctjjbl8jibs', '::1', 1622918586, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323931383538363b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('9sotv260ugmd3sjfbq5me55u273em1m9', '::1', 1622920513, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323932303531333b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b737563636573737c733a32373a2250656469646f206564697461646f20636f6d207375636573736f21223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('0ggtafh90pif8hqsuos2b9u0f6edoef1', '::1', 1622920815, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323932303831353b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b737563636573737c733a32373a2250656469646f206564697461646f20636f6d207375636573736f21223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('vd5vt6e54hn4dtn66jbc2n007151e7si', '::1', 1622921767, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323932313736373b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('8c1aik6qe739u6srqtmtmatjbv3mi224', '::1', 1622922197, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323932323139373b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b737563636573737c733a32373a2250656469646f206564697461646f20636f6d207375636573736f21223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('94rql8d04ibtm1gdv5f7fv3meiadhuvf', '::1', 1622922642, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323932323634323b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('umriks0nb6uel6vbtpt2iqn4todkafhu', '::1', 1622923024, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323932333032343b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('0vqqpsioidpvc6mutalacjeb6flnt9s8', '::1', 1622923346, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323932333334363b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b737563636573737c733a32373a2250656469646f206564697461646f20636f6d207375636573736f21223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('v2938i9nhthpovo1j7nmbrou1ia0mjgf', '::1', 1622926069, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323932363036393b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('3ochjnfrurkhr2fv7tdnqo4e1g60igvc', '::1', 1622927595, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323932373539353b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b737563636573737c733a32373a2250656469646f206564697461646f20636f6d207375636573736f21223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('fo5laq43fl5el10pq3h4tbbhb8pftnkj', '::1', 1622928250, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323932383235303b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('5hl7vmi3ajh1io0rdvngh9k662fl994e', '::1', 1622928561, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323932383536313b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('uenp0594498pla2m7pfrjedknol5hlv1', '::1', 1622928919, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323932383931393b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('jnc196miu0oom82d37mdffg8tk7bg1s4', '::1', 1622929432, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323932393433323b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('9577lav8svs8v34tq09lh6584h2rhpf9', '::1', 1622930295, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933303239353b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b737563636573737c733a33303a2250656469646f2061646963696f6e61646f20636f6d207375636573736f21223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('0qgl69jisnt5tncp3tehqd0fnop71a1t', '::1', 1622931338, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933313333383b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('01o1fnh9600j7ki7f8l5e4amek7khn2g', '::1', 1622931823, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933313832333b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('npvfuhebh2g2h1nk3aasqjbdg7muoeke', '::1', 1622932173, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933323137333b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('kdj1t5f8mfjt2l2bc92e78laosce1138', '::1', 1622932512, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933323531323b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('fr3snlqmr712qunuvctsp50cgnm3se59', '::1', 1622932814, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933323831343b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('afeebcgqpqtekdifs9hu51hi4brfd5vr', '::1', 1622933159, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933333135393b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('dtr3vcvk9ilaqm3lssn8j5t20it4ctl1', '::1', 1622933580, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933333538303b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('c90hsrn1n7p8pihmk5mbdk945n4qu9fb', '::1', 1622934089, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933343038393b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('5uq5021f850ioheoc2bg29bb0qeqpr8k', '::1', 1622934660, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933343636303b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('cp2q6elp6q5tokpku70b7i7qb6galua6', '::1', 1622934963, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933343936333b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('343kjqf2dlkov58frt64gs1rck6q404c', '::1', 1622935343, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933353334333b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('qoegjoh0u4hfg9gm68rf32dfkb4efcqi', '::1', 1622935750, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933353735303b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('j5uqq553sb59ae85gijcpl7jn9ltbakc', '::1', 1622936096, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933363039363b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('2d3c7cp5sdemebq95cql365n84ubb5rb', '::1', 1622936570, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933363537303b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('7g85kojpe6e82krn8doqjgkct4l4go5n', '::1', 1622937041, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933373034313b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('s29vqli0oa38rjei2icc7pg6am6pkssg', '::1', 1622937656, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933373635363b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('2a4m1tdpndd958rokgsa6j9ltinpmsvh', '::1', 1622937982, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933373938323b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('v1luevvno8gpb245gdf6ecq9uv1i3qa4', '::1', 1622939370, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933393337303b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('7v642556ict4o8d07cfeffd4j5klfav8', '::1', 1622939498, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632323933393337303b6e6f6d657c733a363a22556e6976656e223b656d61696c7c733a31363a2261646d696e40756e6976656e2e636f6d223b69647c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idClientes` int(11) NOT NULL,
  `nomeCliente` varchar(255) NOT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `pessoa_fisica` tinyint(1) NOT NULL DEFAULT 1,
  `documento` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `razao` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `dataCadastro` date DEFAULT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `telefoneC` varchar(20) NOT NULL,
  `emailC` varchar(100) NOT NULL,
  `telefoneF` varchar(20) NOT NULL,
  `emailF` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idClientes`, `nomeCliente`, `sexo`, `pessoa_fisica`, `documento`, `rg`, `razao`, `telefone`, `celular`, `email`, `dataCadastro`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefoneC`, `emailC`, `telefoneF`, `emailF`) VALUES
(1, 'LUCAS APARECIDO DE JESUS', NULL, 1, '408.029.108-66', '56.555.828-8', 'Techation', '(11) 9594-1180', NULL, 'Lucas_ap@live.com', '2021-06-05', 'R. Mandacaru', '555 Casa 13', 'Cidade Ipava', 'São Paulo', 26, '04951-030', '', '', '', ''),
(5, 'Pedro Silva', NULL, 1, '408.029.108-66', '56.555.828-8', 'gg', '(11) 9594-1180', NULL, 'lucasjesus1349@gmail.com', '2021-06-05', 'Rua Maria da Conceição Simões', '94', '', 'São Paulo', 26, '04952-130', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comissao`
--

CREATE TABLE `comissao` (
  `idComissao` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comissao`
--

INSERT INTO `comissao` (`idComissao`, `nome`) VALUES
(0, ''),
(1, '2,20%'),
(2, '3,60%'),
(3, '5,00%');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE `contas` (
  `idContas` int(11) NOT NULL,
  `conta` varchar(45) DEFAULT NULL,
  `banco` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `saldo` decimal(10,2) DEFAULT NULL,
  `cadastro` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `tipo` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
--

CREATE TABLE `documentos` (
  `idDocumentos` int(11) NOT NULL,
  `documento` varchar(70) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `path` varchar(300) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL,
  `cadastro` date DEFAULT NULL,
  `categoria` varchar(80) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL,
  `tamanho` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emitente`
--

CREATE TABLE `emitente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `ie` varchar(50) DEFAULT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `uf` varchar(20) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `url_logo` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

CREATE TABLE `equipamentos` (
  `idEquipamentos` int(11) NOT NULL,
  `equipamento` varchar(150) NOT NULL,
  `num_serie` varchar(80) DEFAULT NULL,
  `modelo` varchar(80) DEFAULT NULL,
  `cor` varchar(45) DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `tensao` varchar(45) DEFAULT NULL,
  `potencia` varchar(45) DEFAULT NULL,
  `voltagem` varchar(45) DEFAULT NULL,
  `data_fabricacao` date DEFAULT NULL,
  `marcas_id` int(11) DEFAULT NULL,
  `clientes_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos_os`
--

CREATE TABLE `equipamentos_os` (
  `idEquipamentos_os` int(11) NOT NULL,
  `defeito_declarado` varchar(200) DEFAULT NULL,
  `defeito_encontrado` varchar(200) DEFAULT NULL,
  `solucao` varchar(45) DEFAULT NULL,
  `equipamentos_id` int(11) DEFAULT NULL,
  `os_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nome` varchar(75) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `nome`, `uf`) VALUES
(1, 'Acre', 'AC'),
(2, 'Alagoas', 'AL'),
(3, 'Amazonas', 'AM'),
(4, 'Amapá', 'AP'),
(5, 'Bahia', 'BA'),
(6, 'Ceará', 'CE'),
(7, 'Distrito Federal', 'DF'),
(8, 'Espírito Santo', 'ES'),
(9, 'Goiás', 'GO'),
(10, 'Maranhão', 'MA'),
(11, 'Minas Gerais', 'MG'),
(12, 'Mato Grosso do Sul', 'MS'),
(13, 'Mato Grosso', 'MT'),
(14, 'Pará', 'PA'),
(15, 'Paraíba', 'PB'),
(16, 'Pernambuco', 'PE'),
(17, 'Piauí', 'PI'),
(18, 'Paraná', 'PR'),
(19, 'Rio de Janeiro', 'RJ'),
(20, 'Rio Grande do Norte', 'RN'),
(21, 'Rondônia', 'RO'),
(22, 'Roraima', 'RR'),
(23, 'Rio Grande do Sul', 'RS'),
(24, 'Santa Catarina', 'SC'),
(25, 'Sergipe', 'SE'),
(26, 'São Paulo', 'SP'),
(27, 'Tocantins', 'TO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `frete`
--

CREATE TABLE `frete` (
  `idFrete` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `frete`
--

INSERT INTO `frete` (`idFrete`, `nome`) VALUES
(0, ''),
(1, 'CIF'),
(2, 'FOB');

-- --------------------------------------------------------

--
-- Estrutura da tabela `garantia`
--

CREATE TABLE `garantia` (
  `idGarantia` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `garantia`
--

INSERT INTO `garantia` (`idGarantia`, `nome`) VALUES
(0, ''),
(1, '12 Meses'),
(2, '24 Meses'),
(3, '36 Meses'),
(4, '48 Meses'),
(5, 'Todo Contrato');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_de_vendas`
--

CREATE TABLE `itens_de_vendas` (
  `idItens` int(11) NOT NULL,
  `subTotal` varchar(45) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `vendas_id` int(11) NOT NULL,
  `produtos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lancamentos`
--

CREATE TABLE `lancamentos` (
  `idLancamentos` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` double NOT NULL,
  `data_vencimento` date NOT NULL,
  `data_pagamento` date DEFAULT NULL,
  `baixado` tinyint(1) DEFAULT 0,
  `cliente_fornecedor` varchar(255) DEFAULT NULL,
  `forma_pgto` varchar(100) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `anexo` varchar(250) DEFAULT NULL,
  `clientes_id` int(11) DEFAULT NULL,
  `categorias_id` int(11) DEFAULT NULL,
  `contas_id` int(11) DEFAULT NULL,
  `vendas_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lancamentos`
--

INSERT INTO `lancamentos` (`idLancamentos`, `descricao`, `valor`, `data_vencimento`, `data_pagamento`, `baixado`, `cliente_fornecedor`, `forma_pgto`, `tipo`, `anexo`, `clientes_id`, `categorias_id`, `contas_id`, `vendas_id`) VALUES
(1, 'Fatura de Venda - #2', 200, '2021-05-15', '0000-00-00', 0, 'Paulo Alberes da Silva Silva Rosangela Alves de Oliveira Silva', 'Dinheiro', 'receita', NULL, 5, NULL, NULL, NULL),
(5, 'bb2', 26000, '2021-06-10', '2021-05-29', 1, 'lucas', 'Dinheiro', 'receita', NULL, NULL, NULL, NULL, NULL),
(8, 'Fatura de Venda - #7', 26, '2021-05-22', '0000-00-00', 0, 'Paulo Alberes da Silva Silva Rosangela Alves de Oliveira Silva', 'Dinheiro', 'despesa', NULL, 5, NULL, NULL, NULL),
(9, 'Fatura de Venda - #8', 111, '2021-06-11', '0000-00-00', 1, 'Paulo Alberes da Silva Silva Rosangela Alves de Oliveira Silva', 'Dinheiro', 'receita', NULL, 5, NULL, NULL, NULL),
(10, 'Fatura de Venda - #9', 200, '2021-05-29', '0000-00-00', 1, 'Site.Maker', 'Cartão de Crédito', 'receita', NULL, 12, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `idLogs` int(11) NOT NULL,
  `usuario` varchar(80) DEFAULT NULL,
  `tarefa` varchar(100) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

CREATE TABLE `marcas` (
  `idMarcas` int(11) NOT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `cadastro` date DEFAULT NULL,
  `situacao` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `origemproposta`
--

CREATE TABLE `origemproposta` (
  `idOrigem` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `origemproposta`
--

INSERT INTO `origemproposta` (`idOrigem`, `nome`) VALUES
(0, ''),
(1, 'Prospecção'),
(2, 'Lead');

-- --------------------------------------------------------

--
-- Estrutura da tabela `os`
--

CREATE TABLE `os` (
  `idOs` int(11) NOT NULL,
  `dataInicial` date DEFAULT NULL,
  `dataFinal` date DEFAULT NULL,
  `garantia` int(11) DEFAULT NULL,
  `descricaoProduto` text DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `observacoes` text DEFAULT NULL,
  `tipoFaturamento` int(11) DEFAULT NULL,
  `valorTotal` varchar(15) DEFAULT NULL,
  `clientes_id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `origemProposta` int(11) NOT NULL,
  `rep` varchar(100) NOT NULL,
  `comissao` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `business` int(11) NOT NULL,
  `lancamento` int(11) DEFAULT NULL,
  `faturado` tinyint(1) NOT NULL,
  `frete` int(11) NOT NULL,
  `prazoPg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `os`
--

INSERT INTO `os` (`idOs`, `dataInicial`, `dataFinal`, `garantia`, `descricaoProduto`, `status`, `observacoes`, `tipoFaturamento`, `valorTotal`, `clientes_id`, `usuarios_id`, `origemProposta`, `rep`, `comissao`, `tipo`, `business`, `lancamento`, `faturado`, `frete`, `prazoPg`) VALUES
(2, '2021-06-05', '2021-06-05', 1, '', 'Orçamento', '', 1, NULL, 1, 3, 1, '76', 1, 1, 1, NULL, 0, 1, 1),
(5, '2021-06-05', '2021-06-05', 0, '', 'Pendente', '', 0, NULL, 1, 3, 0, '', 0, 0, 0, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedidos` int(11) NOT NULL,
  `protocolo` int(11) NOT NULL,
  `statusPedidos` int(11) NOT NULL,
  `rastreio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`idPedidos`, `protocolo`, `statusPedidos`, `rastreio`) VALUES
(11, 5, 2, '0bg12345678910kA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE `permissoes` (
  `idPermissao` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `permissoes` text DEFAULT NULL,
  `situacao` tinyint(1) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `permissoes`
--

INSERT INTO `permissoes` (`idPermissao`, `nome`, `permissoes`, `situacao`, `data`) VALUES
(1, 'Administrador', 'a:42:{s:8:\"aCliente\";s:1:\"1\";s:8:\"eCliente\";s:1:\"1\";s:8:\"dCliente\";s:1:\"1\";s:8:\"vCliente\";s:1:\"1\";s:8:\"aProduto\";s:1:\"1\";s:8:\"eProduto\";s:1:\"1\";s:8:\"dProduto\";s:1:\"1\";s:8:\"vProduto\";s:1:\"1\";s:8:\"aServico\";s:1:\"1\";s:8:\"eServico\";s:1:\"1\";s:8:\"dServico\";s:1:\"1\";s:8:\"vServico\";s:1:\"1\";s:3:\"aOs\";s:1:\"1\";s:3:\"eOs\";s:1:\"1\";s:3:\"dOs\";s:1:\"1\";s:3:\"vOs\";s:1:\"1\";s:6:\"aVenda\";s:1:\"1\";s:6:\"eVenda\";s:1:\"1\";s:6:\"dVenda\";s:1:\"1\";s:6:\"vVenda\";s:1:\"1\";s:7:\"aPedido\";s:1:\"1\";s:7:\"ePedido\";s:1:\"1\";s:7:\"dPedido\";s:1:\"1\";s:7:\"vPedido\";s:1:\"1\";s:8:\"aArquivo\";s:1:\"1\";s:8:\"eArquivo\";s:1:\"1\";s:8:\"dArquivo\";s:1:\"1\";s:8:\"vArquivo\";s:1:\"1\";s:11:\"aLancamento\";s:1:\"1\";s:11:\"eLancamento\";s:1:\"1\";s:11:\"dLancamento\";s:1:\"1\";s:11:\"vLancamento\";s:1:\"1\";s:8:\"cUsuario\";s:1:\"1\";s:9:\"cEmitente\";s:1:\"1\";s:10:\"cPermissao\";s:1:\"1\";s:7:\"cBackup\";s:1:\"1\";s:8:\"rCliente\";N;s:8:\"rProduto\";N;s:8:\"rServico\";N;s:3:\"rOs\";N;s:6:\"rVenda\";N;s:11:\"rFinanceiro\";N;}', 1, '2014-09-03'),
(2, 'Funcionário', 'a:38:{s:8:\"aCliente\";s:1:\"1\";s:8:\"eCliente\";s:1:\"1\";s:8:\"dCliente\";s:1:\"1\";s:8:\"vCliente\";s:1:\"1\";s:8:\"aProduto\";s:1:\"1\";s:8:\"eProduto\";s:1:\"1\";s:8:\"dProduto\";s:1:\"1\";s:8:\"vProduto\";s:1:\"1\";s:8:\"aServico\";s:1:\"1\";s:8:\"eServico\";s:1:\"1\";s:8:\"dServico\";s:1:\"1\";s:8:\"vServico\";s:1:\"1\";s:3:\"aOs\";s:1:\"1\";s:3:\"eOs\";s:1:\"1\";s:3:\"dOs\";s:1:\"1\";s:3:\"vOs\";s:1:\"1\";s:6:\"aVenda\";N;s:6:\"eVenda\";N;s:6:\"dVenda\";N;s:6:\"vVenda\";N;s:8:\"aArquivo\";s:1:\"1\";s:8:\"eArquivo\";s:1:\"1\";s:8:\"dArquivo\";s:1:\"1\";s:8:\"vArquivo\";s:1:\"1\";s:11:\"aLancamento\";N;s:11:\"eLancamento\";N;s:11:\"dLancamento\";N;s:11:\"vLancamento\";s:1:\"1\";s:8:\"cUsuario\";N;s:9:\"cEmitente\";N;s:10:\"cPermissao\";N;s:7:\"cBackup\";N;s:8:\"rCliente\";N;s:8:\"rProduto\";N;s:8:\"rServico\";N;s:3:\"rOs\";N;s:6:\"rVenda\";N;s:11:\"rFinanceiro\";N;}', 1, '2021-05-28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prazopagamento`
--

CREATE TABLE `prazopagamento` (
  `idPagamento` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `prazopagamento`
--

INSERT INTO `prazopagamento` (`idPagamento`, `nome`) VALUES
(0, ''),
(1, 'A Vista Direto'),
(2, 'A Vista Finan Bancário'),
(3, 'Ato /30 Dias'),
(4, 'Ato /30/60 Dias'),
(5, 'Ato /30/60/90 Dias');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prioridade`
--

CREATE TABLE `prioridade` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `prioridade`
--

INSERT INTO `prioridade` (`id`, `nome`) VALUES
(1, 'Alta'),
(2, 'Média'),
(3, 'Baixa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProdutos` int(11) NOT NULL,
  `descricao` varchar(80) NOT NULL,
  `unidade` varchar(10) DEFAULT NULL,
  `precoVenda` decimal(10,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `estoqueMinimo` int(11) DEFAULT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProdutos`, `descricao`, `unidade`, `precoVenda`, `estoque`, `estoqueMinimo`, `tipo`) VALUES
(2, 'bb', 'UN', '100.00', 19, 3, 1),
(3, 'bb2', 'UN', '111.11', 1107, 111, 2),
(4, 'Versana Active', 'UN', '26000.00', 15, 1, 1),
(5, 'bb2', 'UN', '0.00', 0, 0, 2),
(6, 'ssss', 'UN', '546.99', 23, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_os`
--

CREATE TABLE `produtos_os` (
  `idProdutos_os` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `os_id` int(11) NOT NULL,
  `produtos_id` int(11) NOT NULL,
  `subTotal` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos_os`
--

INSERT INTO `produtos_os` (`idProdutos_os`, `quantidade`, `os_id`, `produtos_id`, `subTotal`) VALUES
(1, 1, 2, 2, '100'),
(3, 1, 2, 4, '26000'),
(10, 1, 5, 4, '26000'),
(12, 3, 5, 3, '333.33'),
(14, 1, 7, 4, '26000'),
(15, 1, 8, 3, '111.11'),
(16, 2, 9, 2, '200'),
(17, 1, 1, 4, '26000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `idServicos` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `data_ticket` date NOT NULL,
  `solucao` text NOT NULL,
  `status` int(11) NOT NULL,
  `prioridade` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`idServicos`, `nome`, `email`, `produto`, `tipo`, `motivo`, `descricao`, `data_ticket`, `solucao`, `status`, `prioridade`, `preco`) VALUES
(61, 'Lucas Jesus', '', 'versana', 1, 'deu quebra na peça', 'fr', '2021-05-26', 'edasaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 0, 2, '0.00'),
(62, 'LUCAS APARECIDO DE JESUS', 'Lucas_ap@live.com', 'jbs', 2, 'jk', 'ol', '2021-05-27', 'tudo certo', 1, 3, '0.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos_os`
--

CREATE TABLE `servicos_os` (
  `idServicos_os` int(11) NOT NULL,
  `os_id` int(11) NOT NULL,
  `servicos_id` int(11) NOT NULL,
  `subTotal` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `statuspedidos`
--

CREATE TABLE `statuspedidos` (
  `id` int(11) NOT NULL,
  `statusPedidos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `statuspedidos`
--

INSERT INTO `statuspedidos` (`id`, `statusPedidos`) VALUES
(0, ''),
(1, 'Entregue'),
(2, 'Em Transporte'),
(3, 'Em Separação'),
(4, 'Encaminhado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `statustickets`
--

CREATE TABLE `statustickets` (
  `id` int(11) NOT NULL,
  `statusTicket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `statustickets`
--

INSERT INTO `statustickets` (`id`, `statusTicket`) VALUES
(0, 'Aberto'),
(1, 'Concluído'),
(2, 'Respondido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipofaturamento`
--

CREATE TABLE `tipofaturamento` (
  `idFaturamento` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipofaturamento`
--

INSERT INTO `tipofaturamento` (`idFaturamento`, `nome`) VALUES
(0, ''),
(1, '70% Produto e 30% Serviços'),
(2, '100% Produto'),
(3, 'Diferenciado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoproposta`
--

CREATE TABLE `tipoproposta` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipoproposta`
--

INSERT INTO `tipoproposta` (`id`, `nome`) VALUES
(0, ''),
(1, 'Proposta Venda'),
(2, 'Contrato Venda'),
(3, 'Contrato Locação C/opção de compra'),
(4, 'Contrato Locação S/opção de compra'),
(5, 'Contrato Comodato');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoticket`
--

CREATE TABLE `tipoticket` (
  `idTipo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipoticket`
--

INSERT INTO `tipoticket` (`idTipo`, `nome`) VALUES
(1, 'Informação'),
(2, 'Solicitação'),
(3, 'Reclamação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`id`, `nome`) VALUES
(1, 'Equipamento'),
(2, 'Item');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `cpf` varchar(20) NOT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `situacao` tinyint(1) NOT NULL,
  `dataCadastro` date NOT NULL,
  `permissoes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `nome`, `rg`, `cpf`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `email`, `senha`, `telefone`, `celular`, `situacao`, `dataCadastro`, `permissoes_id`) VALUES
(1, 'Univen', 'MG-25.502.560', '600.021.520-87', 'Rua Acima', '12', 'Alvorada', 'Teste', 'MG', 'admin@univen.com', '$2y$10$lAW0AXb0JLZxR0yDdfcBcu3BN9c2AXKKjKTdug7Or0pr6cSGtgyGO', '0000-0000', '', 1, '2013-11-22', 1),
(3, 'LUCAS APARECIDO DE JESUS', '56.555.828-8', '408.029.108-66', 'R. Mandacaru, 555 Casa 13', '555 Casa 13', 'dd', 'São Paulo', 'SP', 'Lucas_ap@live.com', '$2y$10$xnjo/NrmZvsvZCdqzAY03umA1lruDU5Sar3gWsNhub6FujjPGCWh6', '11959411800', '55171296', 1, '2021-05-24', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `idVendas` int(11) NOT NULL,
  `dataVenda` date DEFAULT NULL,
  `valorTotal` varchar(45) DEFAULT NULL,
  `desconto` varchar(45) DEFAULT NULL,
  `faturado` tinyint(1) DEFAULT NULL,
  `clientes_id` int(11) NOT NULL,
  `usuarios_id` int(11) DEFAULT NULL,
  `lancamentos_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anexos`
--
ALTER TABLE `anexos`
  ADD PRIMARY KEY (`idAnexos`),
  ADD KEY `fk_anexos_os1` (`os_id`);

--
-- Índices para tabela `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idArea`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategorias`);

--
-- Índices para tabela `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idClientes`),
  ADD KEY `estado` (`estado`);

--
-- Índices para tabela `comissao`
--
ALTER TABLE `comissao`
  ADD PRIMARY KEY (`idComissao`);

--
-- Índices para tabela `contas`
--
ALTER TABLE `contas`
  ADD PRIMARY KEY (`idContas`);

--
-- Índices para tabela `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`idDocumentos`);

--
-- Índices para tabela `emitente`
--
ALTER TABLE `emitente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD PRIMARY KEY (`idEquipamentos`),
  ADD KEY `fk_equipanentos_marcas1_idx` (`marcas_id`),
  ADD KEY `fk_equipanentos_clientes1_idx` (`clientes_id`);

--
-- Índices para tabela `equipamentos_os`
--
ALTER TABLE `equipamentos_os`
  ADD PRIMARY KEY (`idEquipamentos_os`),
  ADD KEY `fk_equipamentos_os_equipanentos1_idx` (`equipamentos_id`),
  ADD KEY `fk_equipamentos_os_os1_idx` (`os_id`);

--
-- Índices para tabela `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `frete`
--
ALTER TABLE `frete`
  ADD PRIMARY KEY (`idFrete`);

--
-- Índices para tabela `garantia`
--
ALTER TABLE `garantia`
  ADD PRIMARY KEY (`idGarantia`);

--
-- Índices para tabela `itens_de_vendas`
--
ALTER TABLE `itens_de_vendas`
  ADD PRIMARY KEY (`idItens`),
  ADD KEY `fk_itens_de_vendas_vendas1` (`vendas_id`),
  ADD KEY `fk_itens_de_vendas_produtos1` (`produtos_id`);

--
-- Índices para tabela `lancamentos`
--
ALTER TABLE `lancamentos`
  ADD PRIMARY KEY (`idLancamentos`),
  ADD KEY `fk_lancamentos_clientes1` (`clientes_id`),
  ADD KEY `fk_lancamentos_categorias1_idx` (`categorias_id`),
  ADD KEY `fk_lancamentos_contas1_idx` (`contas_id`);

--
-- Índices para tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`idLogs`);

--
-- Índices para tabela `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`idMarcas`);

--
-- Índices para tabela `origemproposta`
--
ALTER TABLE `origemproposta`
  ADD PRIMARY KEY (`idOrigem`);

--
-- Índices para tabela `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`idOs`),
  ADD KEY `fk_os_clientes1` (`clientes_id`),
  ADD KEY `fk_os_lancamentos1` (`lancamento`),
  ADD KEY `usuarios_id` (`usuarios_id`),
  ADD KEY `origemProposta` (`origemProposta`),
  ADD KEY `comissao` (`comissao`),
  ADD KEY `business` (`business`),
  ADD KEY `frete` (`frete`),
  ADD KEY `tipo` (`tipo`),
  ADD KEY `tipoFaturamento` (`tipoFaturamento`),
  ADD KEY `garantia` (`garantia`),
  ADD KEY `prazoPg` (`prazoPg`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedidos`),
  ADD KEY `protocolo` (`protocolo`),
  ADD KEY `statusPedidos` (`statusPedidos`);

--
-- Índices para tabela `permissoes`
--
ALTER TABLE `permissoes`
  ADD PRIMARY KEY (`idPermissao`);

--
-- Índices para tabela `prazopagamento`
--
ALTER TABLE `prazopagamento`
  ADD PRIMARY KEY (`idPagamento`);

--
-- Índices para tabela `prioridade`
--
ALTER TABLE `prioridade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProdutos`),
  ADD KEY `tipo` (`tipo`);

--
-- Índices para tabela `produtos_os`
--
ALTER TABLE `produtos_os`
  ADD PRIMARY KEY (`idProdutos_os`),
  ADD KEY `fk_produtos_os_os1` (`os_id`),
  ADD KEY `fk_produtos_os_produtos1` (`produtos_id`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`idServicos`),
  ADD KEY `status` (`status`),
  ADD KEY `prioridade` (`prioridade`),
  ADD KEY `tipo` (`tipo`);

--
-- Índices para tabela `servicos_os`
--
ALTER TABLE `servicos_os`
  ADD PRIMARY KEY (`idServicos_os`),
  ADD KEY `fk_servicos_os_os1` (`os_id`),
  ADD KEY `fk_servicos_os_servicos1` (`servicos_id`);

--
-- Índices para tabela `statuspedidos`
--
ALTER TABLE `statuspedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `statustickets`
--
ALTER TABLE `statustickets`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipofaturamento`
--
ALTER TABLE `tipofaturamento`
  ADD PRIMARY KEY (`idFaturamento`);

--
-- Índices para tabela `tipoproposta`
--
ALTER TABLE `tipoproposta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipoticket`
--
ALTER TABLE `tipoticket`
  ADD PRIMARY KEY (`idTipo`);

--
-- Índices para tabela `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `fk_usuarios_permissoes1_idx` (`permissoes_id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`idVendas`),
  ADD KEY `fk_vendas_clientes1` (`clientes_id`),
  ADD KEY `fk_vendas_usuarios1` (`usuarios_id`),
  ADD KEY `fk_vendas_lancamentos1` (`lancamentos_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anexos`
--
ALTER TABLE `anexos`
  MODIFY `idAnexos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategorias` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idClientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `contas`
--
ALTER TABLE `contas`
  MODIFY `idContas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `documentos`
--
ALTER TABLE `documentos`
  MODIFY `idDocumentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `emitente`
--
ALTER TABLE `emitente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  MODIFY `idEquipamentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `equipamentos_os`
--
ALTER TABLE `equipamentos_os`
  MODIFY `idEquipamentos_os` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `itens_de_vendas`
--
ALTER TABLE `itens_de_vendas`
  MODIFY `idItens` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `lancamentos`
--
ALTER TABLE `lancamentos`
  MODIFY `idLancamentos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `idLogs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `marcas`
--
ALTER TABLE `marcas`
  MODIFY `idMarcas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `os`
--
ALTER TABLE `os`
  MODIFY `idOs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `idPermissao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProdutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos_os`
--
ALTER TABLE `produtos_os`
  MODIFY `idProdutos_os` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `idServicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `servicos_os`
--
ALTER TABLE `servicos_os`
  MODIFY `idServicos_os` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `idVendas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `anexos`
--
ALTER TABLE `anexos`
  ADD CONSTRAINT `fk_anexos_os1` FOREIGN KEY (`os_id`) REFERENCES `os` (`idOs`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_estado_idEstados` FOREIGN KEY (`estado`) REFERENCES `estados` (`id`);

--
-- Limitadores para a tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD CONSTRAINT `fk_equipanentos_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipanentos_marcas1` FOREIGN KEY (`marcas_id`) REFERENCES `marcas` (`idMarcas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `equipamentos_os`
--
ALTER TABLE `equipamentos_os`
  ADD CONSTRAINT `fk_equipamentos_os_equipanentos1` FOREIGN KEY (`equipamentos_id`) REFERENCES `equipamentos` (`idEquipamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipamentos_os_os1` FOREIGN KEY (`os_id`) REFERENCES `os` (`idOs`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `itens_de_vendas`
--
ALTER TABLE `itens_de_vendas`
  ADD CONSTRAINT `fk_itens_de_vendas_produtos1` FOREIGN KEY (`produtos_id`) REFERENCES `produtos` (`idProdutos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_itens_de_vendas_vendas1` FOREIGN KEY (`vendas_id`) REFERENCES `vendas` (`idVendas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `lancamentos`
--
ALTER TABLE `lancamentos`
  ADD CONSTRAINT `fk_lancamentos_categorias1` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`idCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lancamentos_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lancamentos_contas1` FOREIGN KEY (`contas_id`) REFERENCES `contas` (`idContas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `os`
--
ALTER TABLE `os`
  ADD CONSTRAINT `fk_business_idArea` FOREIGN KEY (`business`) REFERENCES `area` (`idArea`),
  ADD CONSTRAINT `fk_comissao_idComissao` FOREIGN KEY (`comissao`) REFERENCES `comissao` (`idComissao`),
  ADD CONSTRAINT `fk_fre_idFrete` FOREIGN KEY (`frete`) REFERENCES `frete` (`idFrete`),
  ADD CONSTRAINT `fk_garantia_idGarantia` FOREIGN KEY (`garantia`) REFERENCES `garantia` (`idGarantia`),
  ADD CONSTRAINT `fk_origemProposta_idOrigem` FOREIGN KEY (`origemProposta`) REFERENCES `origemproposta` (`idOrigem`),
  ADD CONSTRAINT `fk_os_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_os_lancamentos1` FOREIGN KEY (`lancamento`) REFERENCES `lancamentos` (`idLancamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prazoPg_idPagamento` FOREIGN KEY (`prazoPg`) REFERENCES `prazopagamento` (`idPagamento`),
  ADD CONSTRAINT `fk_tipoFaturamento_idFaturamento` FOREIGN KEY (`tipoFaturamento`) REFERENCES `tipofaturamento` (`idFaturamento`),
  ADD CONSTRAINT `fk_tipo_idProposta` FOREIGN KEY (`tipo`) REFERENCES `tipoproposta` (`id`),
  ADD CONSTRAINT `fk_usuarios_id_idUsuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`idUsuarios`);

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_protocolo_idOs` FOREIGN KEY (`protocolo`) REFERENCES `os` (`idOs`),
  ADD CONSTRAINT `fk_statuspedidos_status` FOREIGN KEY (`statusPedidos`) REFERENCES `statuspedidos` (`id`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_tipo_tipo_produto` FOREIGN KEY (`tipo`) REFERENCES `tipo_produto` (`id`);

--
-- Limitadores para a tabela `produtos_os`
--
ALTER TABLE `produtos_os`
  ADD CONSTRAINT `fk_produtos_os_os1` FOREIGN KEY (`os_id`) REFERENCES `os` (`idOs`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produtos_os_produtos1` FOREIGN KEY (`produtos_id`) REFERENCES `produtos` (`idProdutos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `fk_prioridade_prioridade_id` FOREIGN KEY (`prioridade`) REFERENCES `prioridade` (`id`),
  ADD CONSTRAINT `fk_status_statusTicket` FOREIGN KEY (`status`) REFERENCES `statustickets` (`id`),
  ADD CONSTRAINT `fk_tipo_idTipo` FOREIGN KEY (`tipo`) REFERENCES `tipoticket` (`idTipo`);

--
-- Limitadores para a tabela `servicos_os`
--
ALTER TABLE `servicos_os`
  ADD CONSTRAINT `fk_servicos_os_os1` FOREIGN KEY (`os_id`) REFERENCES `os` (`idOs`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servicos_os_servicos1` FOREIGN KEY (`servicos_id`) REFERENCES `servicos` (`idServicos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_permissoes1` FOREIGN KEY (`permissoes_id`) REFERENCES `permissoes` (`idPermissao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `fk_vendas_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vendas_lancamentos1` FOREIGN KEY (`lancamentos_id`) REFERENCES `lancamentos` (`idLancamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vendas_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
