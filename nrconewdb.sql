-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 06:38 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `director_message`
--
ALTER TABLE `director_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `director_message`
--
ALTER TABLE `director_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
