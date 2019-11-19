-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 09-Nov-2019 às 20:37
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skill_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `matricula` varchar(128) NOT NULL,
  `rfid` varchar(128) NOT NULL,
  `setor` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `matricula`, `rfid`, `setor`) VALUES
(1, 'LUCIANO SOARES NUNES', '11169211', '3064891815', 'IM-HHP'),
(3, 'ROZIANE CARVALHO SILVA', '11129969', '1663138346', 'HHP Production Innovation'),
(5, 'RORISVON NASCIMENTO ALMEIDA', '11182148', '175341618', 'HHP Production Innovation'),
(6, 'JOAO PEDRO MENDONCA DE LIMA JUNIOR', '11167546', '3552907153', 'HHP Production Innovation'),
(16, 'JOAO LUCAS MONTEIRO DUARTE', '11182132', '3150836137', 'HHP Production Innovation'),
(17, 'ADRIANO DA SILVA CAVALCANTE', '11120646', '3250297120', 'HHP Production Innovation'),
(18, 'DRYELLY DUARTE DA SILVA', '11128576', '1247222261', 'HHP Main Production');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matrix`
--

DROP TABLE IF EXISTS `matrix`;
CREATE TABLE IF NOT EXISTS `matrix` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(180) NOT NULL,
  `matricula` varchar(180) NOT NULL,
  `modelo` varchar(180) NOT NULL,
  `posto1` int(11) NOT NULL DEFAULT '0',
  `posto2` int(11) NOT NULL DEFAULT '0',
  `posto3` int(11) NOT NULL DEFAULT '0',
  `posto4` int(11) NOT NULL DEFAULT '0',
  `posto5` int(11) NOT NULL DEFAULT '0',
  `posto6` int(11) NOT NULL DEFAULT '0',
  `posto7` int(11) NOT NULL DEFAULT '0',
  `posto8` int(11) NOT NULL DEFAULT '0',
  `posto9` int(11) NOT NULL DEFAULT '0',
  `posto10` int(11) NOT NULL DEFAULT '0',
  `posto11` int(11) NOT NULL DEFAULT '0',
  `posto12` int(11) NOT NULL DEFAULT '0',
  `posto13` int(11) NOT NULL DEFAULT '0',
  `posto14` int(11) NOT NULL DEFAULT '0',
  `posto15` int(11) NOT NULL DEFAULT '0',
  `posto16` int(11) NOT NULL DEFAULT '0',
  `posto17` int(11) NOT NULL DEFAULT '0',
  `posto18` int(11) NOT NULL DEFAULT '0',
  `posto19` int(11) NOT NULL DEFAULT '0',
  `posto20` int(11) NOT NULL DEFAULT '0',
  `posto21` int(11) NOT NULL DEFAULT '0',
  `posto22` int(11) NOT NULL DEFAULT '0',
  `posto23` int(11) NOT NULL DEFAULT '0',
  `posto24` int(11) NOT NULL DEFAULT '0',
  `posto25` int(11) NOT NULL DEFAULT '0',
  `posto26` int(11) NOT NULL DEFAULT '0',
  `posto27` int(11) NOT NULL DEFAULT '0',
  `posto28` int(11) NOT NULL DEFAULT '0',
  `posto29` int(11) NOT NULL DEFAULT '0',
  `posto30` int(11) NOT NULL DEFAULT '0',
  `posto31` int(11) NOT NULL DEFAULT '0',
  `posto32` int(11) NOT NULL DEFAULT '0',
  `posto33` int(11) NOT NULL DEFAULT '0',
  `posto34` int(11) NOT NULL DEFAULT '0',
  `posto35` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `matrix`
--

INSERT INTO `matrix` (`id`, `funcionario`, `matricula`, `modelo`, `posto1`, `posto2`, `posto3`, `posto4`, `posto5`, `posto6`, `posto7`, `posto8`, `posto9`, `posto10`, `posto11`, `posto12`, `posto13`, `posto14`, `posto15`, `posto16`, `posto17`, `posto18`, `posto19`, `posto20`, `posto21`, `posto22`, `posto23`, `posto24`, `posto25`, `posto26`, `posto27`, `posto28`, `posto29`, `posto30`, `posto31`, `posto32`, `posto33`, `posto34`, `posto35`) VALUES
(1, 'LUCIANO SOARES NUNES', '11169211', 'SM-A107', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(24, 'LUCIANO SOARES NUNES', '11169211', 'SM-N975F', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'LUCIANO SOARES NUNES', '11169211', 'SM-A705G', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'LUCIANO SOARES NUNES', '11169211', 'SM-A505G', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'LUCIANO SOARES NUNES', '11169211', 'SM-A205G', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'LUCIANO SOARES NUNES', '11169211', 'SM-A307G', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'LUCIANO SOARES NUNES', '11169211', 'SM-A105M', 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'LUCIANO SOARES NUNES', '11169211', 'SM-J260', 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `matriz`
--

DROP TABLE IF EXISTS `matriz`;
CREATE TABLE IF NOT EXISTS `matriz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(128) NOT NULL,
  `matricula` varchar(128) NOT NULL,
  `modelo` varchar(180) NOT NULL,
  `audioled` int(11) NOT NULL DEFAULT '0',
  `audio` int(11) NOT NULL DEFAULT '0',
  `audiorcv` int(11) NOT NULL DEFAULT '0',
  `bglassprensa` int(11) NOT NULL DEFAULT '0',
  `bracketBateria` int(11) NOT NULL DEFAULT '0',
  `coaxialsub` int(11) NOT NULL DEFAULT '0',
  `callTest` int(11) NOT NULL DEFAULT '0',
  `cameraTeste` int(11) NOT NULL DEFAULT '0',
  `CNMatching` int(11) NOT NULL DEFAULT '0',
  `fingerPrint` int(11) NOT NULL DEFAULT '0',
  `tapeCameraMega` int(11) NOT NULL DEFAULT '0',
  `tapeIsolante` int(11) NOT NULL DEFAULT '0',
  `forceTouchTest` int(11) NOT NULL DEFAULT '0',
  `frontCAMScrew` int(11) NOT NULL DEFAULT '0',
  `functionTeste` int(11) NOT NULL DEFAULT '0',
  `imei` int(11) NOT NULL DEFAULT '0',
  `lcia` int(11) NOT NULL DEFAULT '0',
  `moduloSensor01` int(11) NOT NULL DEFAULT '0',
  `moduloSensor02` int(11) NOT NULL DEFAULT '0',
  `caboCoaxial` int(11) NOT NULL DEFAULT '0',
  `frontAssy` int(11) NOT NULL DEFAULT '0',
  `rear` int(11) NOT NULL DEFAULT '0',
  `earJack` int(11) NOT NULL DEFAULT '0',
  `montagemMegaCAM` int(11) NOT NULL DEFAULT '0',
  `montagemOcta` int(11) NOT NULL DEFAULT '0',
  `montagemOctaPrensa` int(11) NOT NULL DEFAULT '0',
  `montageRear` int(11) NOT NULL DEFAULT '0',
  `OTGPDChagerÍris` int(11) NOT NULL DEFAULT '0',
  `packing` int(11) NOT NULL DEFAULT '0',
  `bracketParafusar` int(11) NOT NULL DEFAULT '0',
  `powerOn` int(11) NOT NULL DEFAULT '0',
  `prensa` int(11) NOT NULL DEFAULT '0',
  `prensaAB` int(11) NOT NULL DEFAULT '0',
  `prensaBateria` int(11) NOT NULL DEFAULT '0',
  `prensaBracketBateria` int(11) NOT NULL DEFAULT '0',
  `prensaTapeBateria` int(11) NOT NULL DEFAULT '0',
  `preparacaoBracket` int(11) NOT NULL DEFAULT '0',
  `protectorVinil` int(11) NOT NULL DEFAULT '0',
  `radiation` int(11) NOT NULL DEFAULT '0',
  `RCVFinger` int(11) NOT NULL DEFAULT '0',
  `revisaoScrew` int(11) NOT NULL DEFAULT '0',
  `revisao01` int(11) NOT NULL DEFAULT '0',
  `revisao02` int(11) NOT NULL DEFAULT '0',
  `revisor` int(11) NOT NULL DEFAULT '0',
  `RFCalResultado` int(11) NOT NULL DEFAULT '0',
  `RSTPowerOn` int(11) NOT NULL DEFAULT '0',
  `RSTTVOC` int(11) NOT NULL DEFAULT '0',
  `semiFunctionTest` int(11) NOT NULL DEFAULT '0',
  `SIMTrayTest` int(11) NOT NULL DEFAULT '0',
  `SIMTrayPrensaC` int(11) NOT NULL DEFAULT '0',
  `testeUmidade` int(11) NOT NULL DEFAULT '0',
  `integradoLeakage` int(11) NOT NULL DEFAULT '0',
  `TVOC` int(11) NOT NULL DEFAULT '0',
  `unificationFuctionForceTouch` int(11) NOT NULL DEFAULT '0',
  `WPI` int(11) NOT NULL DEFAULT '0',
  `WPT` int(11) NOT NULL DEFAULT '0',
  `WPT01` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `matriz`
--

INSERT INTO `matriz` (`id`, `funcionario`, `matricula`, `modelo`, `audioled`, `audio`, `audiorcv`, `bglassprensa`, `bracketBateria`, `coaxialsub`, `callTest`, `cameraTeste`, `CNMatching`, `fingerPrint`, `tapeCameraMega`, `tapeIsolante`, `forceTouchTest`, `frontCAMScrew`, `functionTeste`, `imei`, `lcia`, `moduloSensor01`, `moduloSensor02`, `caboCoaxial`, `frontAssy`, `rear`, `earJack`, `montagemMegaCAM`, `montagemOcta`, `montagemOctaPrensa`, `montageRear`, `OTGPDChagerÍris`, `packing`, `bracketParafusar`, `powerOn`, `prensa`, `prensaAB`, `prensaBateria`, `prensaBracketBateria`, `prensaTapeBateria`, `preparacaoBracket`, `protectorVinil`, `radiation`, `RCVFinger`, `revisaoScrew`, `revisao01`, `revisao02`, `revisor`, `RFCalResultado`, `RSTPowerOn`, `RSTTVOC`, `semiFunctionTest`, `SIMTrayTest`, `SIMTrayPrensaC`, `testeUmidade`, `integradoLeakage`, `TVOC`, `unificationFuctionForceTouch`, `WPI`, `WPT`, `WPT01`) VALUES
(1, 'LUCIANO SOARES NUNES', '11169211', 'SM-A107', 1, 1, 1, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 'LUCIANO SOARES NUNES', '11169211', 'SM-A307', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 'LUCIANO SOARES NUNES', '11169211', 'SM-A505', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 'LUCIANO SOARES NUNES', '11169211', 'SM-J260', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 'LUCIANO SOARES NUNES', '11169211', 'SM-A207', 1, 0, 1, 1, 0, 0, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelos`
--

DROP TABLE IF EXISTS `modelos`;
CREATE TABLE IF NOT EXISTS `modelos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(180) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `modelos`
--

INSERT INTO `modelos` (`id`, `nome`) VALUES
(1, 'SM-J260'),
(23, 'SM-T725'),
(22, 'SM-M105M'),
(21, 'S_10'),
(20, 'S_09'),
(19, 'SM-N975F'),
(18, 'SM-A705G'),
(17, 'SM-A205G'),
(15, 'SM-A307G'),
(16, 'SM-A505G'),
(13, 'SM-A105M');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postos`
--

DROP TABLE IF EXISTS `postos`;
CREATE TABLE IF NOT EXISTS `postos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posto` varchar(128) NOT NULL,
  `tipo` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postos`
--

INSERT INTO `postos` (`id`, `posto`, `tipo`) VALUES
(1, 'Áudio Test + Led Cover', '1'),
(2, 'Áudio Teste', '1'),
(3, 'Áudio Teste / RCV Teste', '1'),
(4, 'B. Glass + Prensa', '1'),
(5, 'Bracket + Bateria', ''),
(6, 'Cabo Coaxial na Sub-PBA', ''),
(7, 'Call Test', ''),
(8, 'Câmera Teste', ''),
(9, 'CN Matching', ''),
(10, 'Finger Print', ''),
(11, 'Fixação da Tape + Câmera Mega', ''),
(12, 'Fixação da Tape Isolante', ''),
(13, 'Force Touch Test', ''),
(14, 'Front CAM + Parafusar PBA', ''),
(15, 'Function Teste', ''),
(16, 'IMEI', ''),
(17, 'LCIA', ''),
(18, 'Módulo Sensor 01', ''),
(19, 'Módulo Sensor 02', ''),
(20, 'Mont. Cabo Coaxial', ''),
(21, 'Mont. da PBA no Front Assy', ''),
(22, 'Mont. do Rear', ''),
(23, 'Mont. e inspeção do Ear Jack', ''),
(24, 'Montagem da Mega CAM + PBA', ''),
(25, 'Montagem do Octa', ''),
(26, 'Montagem do Octa / Prensa', ''),
(27, 'Montagem do Rear', ''),
(28, 'OTG + PD Chager + Íris CAM', ''),
(29, 'Packing', ''),
(30, 'PBA + Bracket + Parafusar', ''),
(31, 'Power On', ''),
(32, 'Prensa', ''),
(33, 'Prensa \"A\" + \"B\"', ''),
(34, 'Prensa da Bateria', ''),
(35, 'Prensa do Bracket + Bateria', ''),
(36, 'Prensa Tape + Bateria', ''),
(37, 'Preparação do Bracket', ''),
(38, 'Protector Vinil', ''),
(39, 'Radiation', ''),
(40, 'RCV Test + Finger Print\r\n', ''),
(41, 'Revisão + Parafusadeira', ''),
(42, 'Revisão 01', ''),
(43, 'Revisão 02', ''),
(44, 'Revisor', ''),
(45, 'RF Cal + Resultado', ''),
(46, 'RST + Power On', ''),
(47, 'RST + TVOC\r\n', ''),
(48, 'Semi Function Test', ''),
(49, 'SIM Tray Test', ''),
(50, 'SIM Tray Test + Prensa \"C\"', ''),
(51, 'Teste de Umidade', ''),
(52, 'Teste Integrado + Leakage', ''),
(53, 'TVOC', ''),
(54, 'Unification Fuction + Force Touch', ''),
(55, 'WPI', ''),
(56, 'WPT', ''),
(57, 'WPT 01\r\n', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posto_modelo`
--

DROP TABLE IF EXISTS `posto_modelo`;
CREATE TABLE IF NOT EXISTS `posto_modelo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(180) NOT NULL,
  `posto` varchar(180) NOT NULL,
  `idposto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `posto_modelo`
--

INSERT INTO `posto_modelo` (`id`, `modelo`, `posto`, `idposto`) VALUES
(1, 'SM-J260', 'Fixação da Tape + Câmera Mega', -196313),
(2, 'SM-J260', 'PBA + Bracket', -196313),
(3, 'SM-J260', 'Montagem do Rear', -196313),
(4, 'SM-J260', 'Montagem do Octa', -196313),
(5, 'SM-J260', 'SM-A107Prensa (Top/Botton + Left/Right)', -196313),
(6, 'SM-J260', 'Prensa (Full) + SD Card', 6),
(7, 'SM-J260', 'Inserir SIM Card + bateria', 7),
(8, 'SM-J260', 'Power On', 8),
(9, 'SM-J260', 'Áudio Teste/RCV Teste', 9),
(10, 'SM-J260', 'LCIA', 10),
(11, 'SM-J260', 'Câmera Teste', 11),
(12, 'SM-J260', 'Radiation', 12),
(13, 'SM-J260', 'IMEI', 13),
(14, 'SM-J260', 'Revisor estético', 14),
(15, 'SM-J260', 'Protector Vinil', 15),
(16, 'SM-J260', 'CN matching', 16),
(17, 'SM-J260', 'Packing', 17),
(56, 'SM-J260', 'Revisor / RF Cal', 18),
(58, 'SM-A307G', 'PBA + Mea Front + Parafusar', -198094),
(59, 'SM-A307G', 'Revisor / RF Cal', -198094),
(60, 'SM-A307G', 'Montagem do Cabo Coaxial', -198094),
(61, 'SM-A307G', 'Montagem do Mea Rear', -198094),
(62, 'SM-A307G', 'SIM Tray Teste + Power On', -198094),
(63, 'SM-A307G', 'PD Charge / Function Test', -198094),
(64, 'SM-A307G', 'LCIA', -198094),
(65, 'SM-A307G', 'B. Glass + Prensa (Top Botton)', -198094),
(66, 'SM-A307G', 'Prensa(L/R + All)', -198094),
(67, 'SM-A307G', 'Finger Print Test', -198094),
(68, 'SM-A307G', 'Câmera Test', -198094),
(69, 'SM-A307G', 'Function Test', -198094),
(70, 'SM-A307G', 'TVOC', -198094),
(71, 'SM-A307G', 'Suporte Equipamentos', -198094),
(72, 'SM-A307G', 'Revisor Estético', -198094),
(73, 'SM-A307G', 'Protector Vinil', -198094),
(74, 'SM-A307G', 'CN Matching', -198094),
(75, 'SM-A307G', 'Packing', -198094);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
