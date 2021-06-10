-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 06:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nrconewdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulletin_board`
--

CREATE TABLE `bulletin_board` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `PdfUrl` text NOT NULL,
  `Tags` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bulletin_board`
--

INSERT INTO `bulletin_board` (`Id`, `Name`, `PdfUrl`, `Tags`, `Date`) VALUES
(15, 'ICAR-NRCO remains closed for visitors due to COVID-19 20221eyrtty', 'uploads/page0006.pdf', 'News/ Events', '06-04-21 '),
(16, 'Walk- in- interview will be held 27.03.2021 for the post of Senior Research Fellow (SRF) under National Agriculture Innovation Fund scheme (IPR) purely on temporary basis.', 'uploads/syllabus.pdf', 'Oppoturnity', '27-04-21 12:11'),
(17, 'Walk- in- interview will be held 28.03.2021 for the post of Senior Research Fellow (SRF) temporary basis.', 'uploads/page0006.pdf', 'Oppoturnity', '27-04-21 12:13'),
(18, 'Walk- in- interview will be held 27.07.2021 for the post of Senior Research Fellow (SRF) ', 'uploads/page0006.pdf', 'Oppoturnity', '27-04-21 12:13'),
(19, 'Sikkim Walk- in- interview will be held 27.03.2021 for the post of Senior Research Fellow (SRF) under National Agriculture Innovation Fund scheme (IPR) purely on temporary basis.', 'uploads/page0006.pdf', 'Oppoturnity', '27-04-21 12:14'),
(20, 'E-Tender for sale of condemned office vehicle start from 9-04-2021', 'uploads/page0006.pdf', 'Tenders', '27-04-21 12:15'),
(22, 'ICAR-NRCO new website is under construction', 'uploads/syllabus.pdf', 'News/ Events', '27-04-21 12:16'),
(23, 'World Pollution Day Observed', 'uploads/syllabus.pdf', 'News/ Events', '27-04-21 12:17'),
(24, 'Hindi Pakwada Celebrated', 'uploads/syllabus.pdf', 'News/ Events', '27-04-21 12:17'),
(25, 'E office training session held today.', 'uploads/syllabus.pdf', 'News/ Events', '28-04-21 12:04'),
(26, 'Generic Online Training Course in Cyber Security by MeitY, Govt. of India', 'uploads/Vehiclecondemnation.pdf', 'News/ Events', '29-04-21 11:34'),
(27, 'Vehicle E tender', 'uploads/Vehiclecondemnation.pdf', 'Tenders', '30-04-21 06:19'),
(28, 'ewt', 'uploads/anexure.pdf', 'News/ Events', '04-05-21 11:27'),
(29, 'gew', 'uploads/document.pdf', 'Oppoturnity', '04-05-21 11:32'),
(30, 'sfe', 'uploads/anexure.pdf', 'Tenders', '04-05-21 11:34'),
(31, 'Testing Pdf', 'uploads/Auth. Letter.pdf', 'Oppoturnity', '19-05-21'),
(32, 'ICAR-NRCO new website is under construction', 'uploads/anexure.pdf', 'Oppoturnity', '20-05-21 10:53'),
(33, 'Advt. for Young Profess', 'uploads/Advertizement for Young Professional II.pdf', 'Oppoturnity', '21-05-21 07:41'),
(37, 'wtwe', 'files/PDF/DataTables example - File export.pdf', 'Tenders', '06-04-21'),
(38, 'testing PDF', 'files/PDF/Vehiclecondemnation.pdf', 'News/ Events', '06-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `Id` int(11) NOT NULL,
  `Name1` varchar(255) NOT NULL,
  `Name2` varchar(255) NOT NULL,
  `Name3` varchar(255) NOT NULL,
  `Name4` varchar(144) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`Id`, `Name1`, `Name2`, `Name3`, `Name4`, `Date`) VALUES
(14, '554', '600', '788', '656', '29-04-21 11:30'),
(15, '890', '564', '2550', '123', '30-04-21 06:26'),
(16, '23', '345', '43', '7', '05-31-21'),
(17, '23', '4', '4', '4', '05-31-21'),
(18, 'df', 'dfg', 'fdg', 'dfg', '05-31-21'),
(19, '565', '45', '654', '654', '05-31-21');

-- --------------------------------------------------------

--
-- Table structure for table `director_message`
--

CREATE TABLE `director_message` (
  `id` int(11) NOT NULL,
  `Message` text NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `ImageUrl` varchar(255) NOT NULL,
  `Date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director_message`
--

INSERT INTO `director_message` (`id`, `Message`, `Name`, `Designation`, `ImageUrl`, `Date`) VALUES
(9, 'fas', 'afas', 'fs', 'uploads/7d5d546a-31af-4356-9f51-e2b4d4c542c9.jpg', '2021-04-23 '),
(10, 'fgh', 'dh', 'fgh', 'uploads/WhatsApp Image 2021-04-22 at 2.47.11 PM.jpeg', '27-04-21 08'),
(11, 'dgf', 'dg', 'dfg', 'uploads/WhatsApp Image 2021-04-23 at 10.32.37 AM.jpeg', '27-04-21 08'),
(12, 'dfh', 'df', 'fh', 'uploads/Screenshot (1).png', '27-04-21 08'),
(13, 'gfh', 'fgh', 'gh', 'uploads/Untitled design.jpg', '27-04-21 08'),
(14, 'Research work carried out during the last four decades at ICAR-IIHR, Bangalore has paid rich dividends in the terms of release of more than 170 varieties and hybrids and development of good number of sustainable production, protection and post harvest management technologies. In fruit crops, the institute has released three varieties in papaya, 5 hybrids in mango, 3 varieties in guava, 5 hybrids in grapes, one variety each in pomegranate, annona, ber and passion fruit. Recently released high yielding Pink fleshed Arka Prabhat papaya hybrid, Arka Kiran, a red fleshed hybrid guava and Arka Sahan, a hybrid of annona with large globules and less seeds hold better promise and are gaining more popularity.\r\n\r\nSo far the Institute has developed and released 60 high yielding open pollinated varieties and 15 F1 hybrids in 24 vegetable crops resistant to pests and diseases for commercial cultivation, Arka Manik of Watermelon – triple resistant to pests and diseases, Arka Anamika in okra resistant to Yellow Vein Mosaic Virus and Arka Komal of French bean resistant to rust has spread to the length and breadth of the nation. High yielding varieties of tomato Arka Vikas, Arka Kalyan and Arka Niketan in onion have made significant impacts. In the recent years, the Institute has released tomato hybrid Arka Ananya, with combined resistant to Tomato Leaf Curl Virus and Bacterial wilt, chilli hybrids Arka Meghana tolerant to thrips and viruses, Arka Harita and Arka Suphal of chilli tolerant to powdery mildew, high yielding male sterility base chilli hybrid Arka Swetha, bacterial wilt brinjal hybrid Arka Anand, high yielding onion hybrids based on male sterility Arka Lalima and Arka Kirthima are a few which have made significant impact in production and higher economic gains.\r\n\r\nIn the area of ornamental crops, the Institute has evolved improved varieties in gladiolus, chrysanthemum, bougainvillea, hibiscus, tube rose, rose, China aster, carnation, gerbera and crossandra. China aster varieties Poornima, Kamini, Vilet cushion and Shashank, tube rose cultivars, Shringar, Suvasini, Prajwal and Vibahv and crossandra variety Arka Ambara have become very popular among the farmers.  In the field of mushrooms, a spore less mutant of oyster mushroom, milky mushroom, Jews ear mushroom and a medicinal mushroom with export potentials have been developed.\r\n\r\nIn the field of production technologies the Institute has standardized the technology of high density planting of banana and pineapple which are being practiced by all most all  fruit growers these crops. Grape rootstock Dog ridge, identified and released by the Institute has revolutionized grape cultivation in dry land and problematic soils. Integrated water and nutrient management schedules like drip irrigation, fertigation, application of fertilizer in the active root feeding zone, etc., for optimum utilization of resources for various fruits, vegetables and ornamental crops have been standardized. The Institute has also standardized leaf and petiole diagnostics for optimum recommendation of fertilizers for respective crops. In the recent years, the institute has standardized technology for foliar nutrition of micro nutrients and has commercially released mango special, banana special, citrus special and vegetable special for higher and quality yields. These technologies have already been commercialized, making these technologies available to cross section of the farming community. The causative factors for occurrence of Spongy tissue, a major problem in mango has been found and accordingly recommendations are made to overcome the problem. The Institute has also come out with biofertilizers like PSB, azospirallium, VAM etc.\r\n\r\nIn the field of plant protection, the Institute has standardized the technology of pest management using trap crops like African marigold for control of tomato fruit borer, mustard for control of DBM in Cole crops, botanicals and plant products like neem soap and pongamia soap for control of major pests. Bio-control agents and micro organisms like Trichoderma, Pseudonomous fluoroscence, Paecilomyces lilacinus etc. for control of soil borne diseases and nematodes have been standardized. The mango fruit fly which has become the major limiting factor for export has been overcome by standardizing a pheromone trap which has been commercialized by the Institute. Simultaneously, integrated disease management protocols and diagnostic kits for viruses have also been developed.\r\n\r\nIn the field of post harvest technology, the Institute has standardized technology to extend the storage life at various temperatures, standardized the protocol for MOP and shrink wrapping technology. Value addition through product development has been a priority area, in which the Institute has developed protocols for preparation of osmo-dehydrated products, fruit based beverages like mango squash, passion fruit squash, aonla squash, passion fruit banana blends, various culinary pastes and purees, lactic acid fermentation of vegetables and protocols for minimally processed foods have been standardized. In the frontier areas and precision technology, the Institute has standardized technology for production of tomato, colored capsicum, cucumbers and melons under protected conditions. The technology for production of nursery seedlings using pro trays has been further refined. In the field of biotechnology, macro propagation protocols for various crops and nucleic acid probes for many viruses have been developed. DNA finger printing techniques have also been developed for characterization and documentation of germplasm.', 'gf', 'fg', 'uploads/Untitled design.jpg\r\n', '27-04-21 08'),
(15, 'Research work carried out during the last four decades at ICAR-IIHR, Bangalore has paid rich dividends in the terms of release of more than 170 varieties and hybrids and development of good number of sustainable production, protection and post harvest management technologies.  <br><br> In fruit crops, the institute has released three varieties in papaya, 5 hybrids in mango, 3 varieties in guava, 5 hybrids in grapes, one variety each in pomegranate, annona, ber and passion fruit. Recently released high yielding Pink fleshed Arka Prabhat papaya hybrid, Arka Kiran, a red fleshed hybrid guava and Arka Sahan, a hybrid of annona with large globules and less seeds hold better promise and are gaining more popularity. So far the Institute has developed and released 60 high yielding open pollinated varieties and 15 F1 hybrids in 24 vegetable crops resistant to pests and diseases for commercial cultivation, Arka Manik of Watermelon – triple resistant to pests and diseases, Arka Anamika in okra resistant to Yellow Vein Mosaic Virus and Arka Komal of French bean resistant to rust has spread to the length and breadth of the nation. High yielding varieties of tomato Arka Vikas, Arka Kalyan and Arka Niketan in onion have made significant impacts. In the recent years, the Institute has released tomato hybrid Arka Ananya, with combined resistant to Tomato Leaf Curl Virus and Bacterial wilt, chilli hybrids Arka Meghana tolerant to thrips and viruses, Arka Harita and Arka Suphal of chilli tolerant to powdery mildew, high yielding male sterility base chilli hybrid Arka Swetha, bacterial wilt brinjal hybrid Arka Anand, high yielding onion hybrids based on male sterility Arka Lalima and Arka Kirthima are a few which have made significant impact in production and higher economic gains. In the area of ornamental crops, the Institute has evolved improved varieties in gladiolus, chrysanthemum, bougainvillea, hibiscus, tube rose, rose, China aster, carnation, gerbera and crossandra. China aster varieties Poornima, Kamini, Vilet cushion and Shashank, tube rose cultivars, Shringar, Suvasini, Prajwal and Vibahv and crossandra variety Arka Ambara have become very popular among the farmers. In the field of mushrooms, a spore less mutant of oyster mushroom, milky mushroom, Jews ear mushroom and a medicinal mushroom with export potentials have been developed. In the field of production technologies the Institute has standardized the technology of high density planting of banana and pineapple which are being practiced by all most all fruit growers these crops. Grape rootstock Dog ridge, identified and released by the Institute has revolutionized grape cultivation in dry land and problematic soils. Integrated water and nutrient management schedules like drip irrigation, fertigation, application of fertilizer in the active root feeding zone, etc., for optimum utilization of resources for various fruits, vegetables and ornamental crops have been standardized. The Institute has also standardized leaf and petiole diagnostics for optimum recommendation of fertilizers for respective crops. In the recent years, the institute has standardized technology for foliar nutrition of micro nutrients and has commercially released mango special, banana special, citrus special and vegetable special for higher and quality yields. These technologies have already been commercialized, making these technologies available to cross section of the farming community. The causative factors for occurrence of Spongy tissue, a major problem in mango has been found and accordingly recommendations are made to overcome the problem. The Institute has also come out with biofertilizers like PSB, azospirallium, VAM etc. In the field of plant protection, the Institute has standardized the technology of pest management using trap crops like African marigold for control of tomato fruit borer, mustard for control of DBM in Cole crops, botanicals and plant products like neem soap and pongamia soap for control of major pests. Bio-control agents and micro organisms like Trichoderma, Pseudonomous fluoroscence, Paecilomyces lilacinus etc. for control of soil borne diseases and nematodes have been standardized. The mango fruit fly which has become the major limiting factor for export has been overcome by standardizing a pheromone trap which has been commercialized by the Institute. Simultaneously, integrated disease management protocols and diagnostic kits for viruses have also been developed. In the field of post harvest technology, the Institute has standardized technology to extend the storage life at various temperatures, standardized the protocol for MOP and shrink wrapping technology. Value addition through product development has been a priority area, in which the Institute has developed protocols for preparation of osmo-dehydrated products, fruit based beverages like mango squash, passion fruit squash, aonla squash, passion fruit banana blends, various culinary pastes and purees, lactic acid fermentation of vegetables and protocols for minimally processed foods have been standardized. In the frontier areas and precision technology, the Institute has standardized technology for production of tomato, colored capsicum, cucumbers and melons under protected conditions. The technology for production of nursery seedlings using pro trays has been further refined. In the field of biotechnology, macro propagation protocols for various crops and nucleic acid probes for many viruses have been developed. DNA finger printing techniques have also been developed for characterization and documentation of germplasm.', 'Dr. Rampal', 'Director (Acting)', 'uploads/board.png', '27-04-21 12'),
(16, 'The Sikkim state authorities handed over 22.19 acres of land belonging to Regional Agricultural Centre along witha all other assets to ICAR for establishment of the centre. In October 1997, the centre also took over the CPRS, Darjeeling form CPRI and established a campus for research on temperate orchids.', 'Rampal', 'Director (Acting)', 'uploads/PXL_20210415_112245873.jpg', '05-05-21 12'),
(17, 'The Sikkim state authorities handed over 22.19 acres of land belonging to Regional Agricultural Centre along witha all other assets to ICAR for establishment of the centre. In October 1997, the centre also took over the CPRS, Darjeeling form CPRI and established a campus for research on temperate orchids.', 'Pritam Shah', 'Director (Acting)', 'uploads/IMG_20210501_180955.jpg', '05-05-21 12'),
(18, 'The Sikkim state authorities handed over 22.19 acres of land belonging to Regional Agricultural Centre along witha all other assets to ICAR for establishment of the centre. In October 1997, the centre also took over the CPRS, Darjeeling form CPRI and established a campus for research on temperate orchids.', 'Rampal', 'Director (Acting)', 'uploads/Screenshot (1).png', '05-05-21 12'),
(19, 'rttu', 'rt', 'rt', 'files/Images/banner1.jpg', '28-05-21 11'),
(20, 'sdg', 'sdg', 'sgd', 'files/Images/banner1.jpg', '05-28-21'),
(21, 'sdg', 'gs', 'dsg', 'files/Images/banner1.jpg', '05202153111'),
(22, 'sdg', 'gs', 'dsg', 'files/Images/banner1.jpg', '05-28-21'),
(23, 'sdg', 'gs', 'dsg', 'files/Images/banner1.jpg', '05-28-21'),
(24, 'sdg', 'gs', 'dsg', 'files/Images/banner1.jpg', '05-28-21'),
(25, 'sdg', 'gs', 'dsg', 'files/Images/banner1.jpg', '05-28-21'),
(26, 'dsg', 'sd', 'sdg', 'files/Images/banner1.jpg', '05-28-21'),
(27, 'dsg', 'sd', 'sdg', 'files/Images/banner1.jpg', '05-28-21'),
(28, 'sdg', 'sdg', 'sdg', 'files/Images/banner2.jpg', '05-28-21'),
(29, 'urtu', 'rtuyrt', 'trurt', 'files/Images/banner1.jpg', '05-28-21'),
(30, 'dsg', 'sd', 'sdg', 'files/Images/banner1.jpg', '05-28-21'),
(31, 'wetwe', 'ICAR-NRCO new website is under construction', 'gh', 'files/Images/1588591016phpzKnsK5.jpeg', '05-31-21'),
(32, 'wetwe', 'ICAR-NRCO new website is under construction', 'gh', 'files/Images/1588591016phpzKnsK5.jpeg', '05-31-21'),
(34, 'wet', 'stw', 'twe', 'files/Images/banner1.jpg', '05-31-21'),
(35, 'wet', 'stw', 'twe', 'files/Images/banner1.jpg', '05-31-21'),
(36, 'try', 'rty', 'try', 'files/Images/banner1.jpg', '05-31-21'),
(37, 'wet', 'Mr Name', 'testing', 'files/Images/banner1.jpg', '06-05-21 ');

-- --------------------------------------------------------

--
-- Table structure for table `mainslider`
--

CREATE TABLE `mainslider` (
  `Id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `ImageUrl` text NOT NULL,
  `Date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mainslider`
--

INSERT INTO `mainslider` (`Id`, `Title`, `Description`, `ImageUrl`, `Date`) VALUES
(25, 'rter', 'ertertt7867677676', 'uploads/DSC_0254.jpg', '05-31-21 '),
(27, 'n', ' n', 'uploads/1588591016phpzKnsK5.jpeg', '05-28-21 '),
(28, 'werwe', 'werwer', 'uploads/1636811_1000x0.jpg', '05-28-21 '),
(29, '', '', 'uploads/d3c42a5fafa640f90c4c3746f9fb2c22.jpg', '05-28-21 '),
(30, 'SPSC Progam', 'Distribution of material for Orchid farming', 'uploads/DSC_0314.jpg', '20-05-21 10:45'),
(32, 'Takshang Village', 'A visit to takshang village for discussion ', 'uploads/DSC_0370.jpg', '20-05-21 11:07'),
(33, 'Pritam Shah', 'Just testing data', 'files/Images/banner2.jpg', '28-05-21 06:45'),
(34, 'fdg', 'dfg', 'files/Images/banner1.jpg', '28-05-21 06:47'),
(35, 'er', 'ert', 'files/Images/banner1.jpg', '28-05-21 06:52'),
(36, 'fdg', 'dfg', 'files/Images/banner1.jpg', '28-05-21 06:53'),
(37, 'fdg', 'dfg', 'files/Images/banner1.jpg', '28-05-21 06:53'),
(38, 'dfg', 'df', 'files/Images/- Stefano Gabbana.png', '28-05-21 07:15'),
(39, 'sg', 'gsd', 'files/Images/- Stefano Gabbana.png', '28-05-21 07:15'),
(40, 'ytyu', 'tyuyr', 'files/Images/banner1.jpg', '28-05-21 07:22'),
(41, 'ytyu', 'tyuyr', 'files/Images/banner1.jpg', '28-05-21 07:22'),
(42, 'Takshang Village', 'e5yery', 'files/Images/1588591016phpzKnsK5.jpeg', '28-05-21 07:24'),
(44, 'Takshang Village', 'e5yery', 'files/Images/1588591016phpzKnsK5.jpeg', '28-05-21 07:25'),
(45, 'Takshang Village', 'yiyuiyiyu', 'files/Images/- Stefano Gabbana.png', '28-05-21 07:25'),
(46, 'asf', 'asfas', 'files/Images/3de7d559-8379-46c6-9b9b-458a42e1b99a.jpg', '28-05-21 07:26'),
(47, 'gfk', 'yty', 'uploads/banner1.jpg', '28-05-21 07:26'),
(48, 'sg', 'gsd', 'files/Images/- Stefano Gabbana.png', '28-05-21 07:28'),
(49, 'asf', 'asfas', 'files/Images/3de7d559-8379-46c6-9b9b-458a42e1b99a.jpg', '28-05-21 07:33'),
(50, 'asf', 'asfas', 'files/Images/3de7d559-8379-46c6-9b9b-458a42e1b99a.jpg', '28-05-21 07:42'),
(51, 'rty', 'rty', 'files/Images/banner1.jpg', '28-05-21 09:09'),
(52, 'rty', 'rty', 'files/Images/banner1.jpg', '28-05-21 09:09'),
(53, 'wet', 'wert', 'files/Images/banner2.jpg', '28-05-21 09:10'),
(54, 'wet', 'wert', 'files/Images/banner2.jpg', '28-05-21 09:10'),
(55, 'wer', 'wer', 'files/Images/banner1.jpg', '28-05-21 09:10'),
(56, 'wer', 'wer', 'files/Images/banner1.jpg', '28-05-21 09:11'),
(58, 'rt', 'rtrt', 'files/Images/1588591016phpzKnsK5.jpeg', '28-05-21 09:21'),
(59, 'wet', 'wert', 'files/Images/banner2.jpg', '28-05-21 10:31'),
(60, 'wet', 'wert', 'files/Images/banner2.jpg', '28-05-21 10:34'),
(61, 'tr', 'rtu', 'files/Images/- Stefano Gabbana.png', '28-05-21 10:53'),
(62, 'tyy', 'tryrityi', 'files/Images/banner2.jpg', '28-05-21 11:02'),
(63, 'tyy', 'tryrityi', 'files/Images/banner2.jpg', '28-05-21 11:10'),
(64, 'tyy', 'tryrityi', 'files/Images/banner2.jpg', '28-05-21 11:10');

-- --------------------------------------------------------

--
-- Table structure for table `pdfs`
--

CREATE TABLE `pdfs` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `PdfUrl` varchar(255) NOT NULL,
  `Tags` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ImageUrl` varchar(255) NOT NULL,
  `Rank` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Id`, `Name`, `Designation`, `Phone`, `Email`, `ImageUrl`, `Rank`, `Category`, `Date`) VALUES
(2, 'Pritam Shah', 'Technical Assistant (Computer)', '6294408224', 'pritam@icar.gov.in', 'files/Images/2.png', '2', 'Technical Staffs', '06-02-21 '),
(3, 'Srinivas', 'Scientist ', '7989898', 'kalaivanan@gmail.com', 'files/Images/NRCOLogo.png', '1', 'Scientist Staffs', '06-03-21 '),
(4, 'Kalaivanan NS', 'Scientist ', '7989898', 'kalaivanan@gmail.com', 'files/Images/NRCOLogo.png', '3', 'Scientist Staffs', '06-02-21 '),
(5, 'Dr. Ram Pal', 'Director (Acting)', '6294408224', 'director@icar.gov.in', 'files/Images/logo.png', '1', 'Head', '06-03-21'),
(6, 'Rabinkala Subba', 'SSS', '8779897797', 'demo@gmail.com', 'files/Images/government-of-india.jpg', '1', 'Skilled Supporting Staffs', '06-03-21'),
(7, 'Dikki Bhutia', 'Administrative Assistant', '98798798797', 'demo@gmail.com', 'files/Images/government-of-india.jpg', '2', 'Administrative Staffs', '06-05-21 '),
(8, 'Rajat Kumar Das', 'AF & AO', '98797654', 'rajat@icar.gov.in', 'files/Images/ab2.jpg', '1', 'Administrative Staffs', '06-05-21'),
(9, 'er', 'r', 'wet', 'wert@gmail.com', 'files/Images/government-of-india.jpg', 'twe', 'Scientist Staffs', '06-05-21'),
(10, 'er', 'r', 'wet', 'wert@gmail.com', 'files/Images/government-of-india.jpg', 'twe', 'Scientist Staffs', '06-05-21'),
(11, 'er', 'r', 'wet', 'wert@gmail.com', 'files/Images/government-of-india.jpg', 'twe', 'Scientist Staffs', '06-05-21'),
(12, 'er', 'r', 'wet', 'wert@gmail.com', 'files/Images/government-of-india.jpg', 'twe', 'Scientist Staffs', '06-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `ImageUrl` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`Id`, `Name`, `Designation`, `Message`, `ImageUrl`, `Date`) VALUES
(1, 'ret', 'ret', 'ret', 'uploads/Picture1.png', '03-05-21 07:59'),
(2, 'Pritam Shah', 'Young Professional II (Computer)', 'This organization is very good and working here is fun and many new things to learn.', 'uploads/Picture1.png', '04-05-21 06:29'),
(3, 'Dr Rampal', 'Director (Acting)', 'भारत को एक समृद्ध आर्किड विरासत के रूप में माना जाता है और दुनिया में जंगली ऑर्किड के एक महत्वपूर्ण उत्पादक के रूप में मान्यता प्राप्त है। यह अनुमान है कि भारत में ऑर्किड की लगभग 1300 प्रजातियां पाई जाती हैं, जो हिमालय के साथ लगभग 10% दुनिया के ऑर्किड वनस्पतियों का मुख्य आवास है। ', 'uploads/scan0005.jpg', '04-05-21 06:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulletin_board`
--
ALTER TABLE `bulletin_board`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `director_message`
--
ALTER TABLE `director_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainslider`
--
ALTER TABLE `mainslider`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulletin_board`
--
ALTER TABLE `bulletin_board`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `director_message`
--
ALTER TABLE `director_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `mainslider`
--
ALTER TABLE `mainslider`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `pdfs`
--
ALTER TABLE `pdfs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
