-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 11:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taytaydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `content_count` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `content_count`) VALUES
(1, 'Programs', 0),
(2, 'News', 0),
(3, 'Events', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `content_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `date_posted` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `headline` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`content_id`, `title`, `description`, `img`, `date_posted`, `user_id`, `category_id`, `headline`) VALUES
(1, 'IDOF - Integrated Diversified Organic System', 'Ang Pamahalaang Bayan sa pamumuno ng ating Smile Taytay Mayor Allan De Leon na kinatawan ng ating Tanggapan sa pamumuno ni Doc Ram Andres, kasama ng team UGAT, ay dumalo sa launching at blessing ng Montevedere Royale Integrated Diversified Organic Farm (IDOF) sa loob ng kanilang subdivision.\r\n\r\nAng nasabing programa ay dinaluhan ng Pamahalaang Panlalawigan ng Rizal sa pamumuno ng ating Gob. Nina Ynares na kinatawan ni Bokal Jun Cabitac at ng Provincial Agriculture Offfice sa pamumuno ni Doc Reynaldo Bonita. Kasama rin natin ang kinatawan ng Sangguniang Bayan na si Councilor Joan Calderon, Barangay San Juan, Taytay, Rizal sa pamumuno ni Kap Rasel Valera, at MENRO Taytay,Rizal sa pamumuno ni Engr. Rodolfo \'Jun\' De Leon.\r\n\r\nAng Montevedere Royale Integrated Diversified Organic Farm (IDOF) ay bahagi ng Verde Farm initiatives ng Monteverde Royale Homeowners Association sa pamumuno ni Atty. Liza Santiago, HOA President, na nakapailalim na rin sa HAlina’t magtanim ng Prutas At Gulay sa Barangay Project ng Department of Agriculture RFO 4-A, YES Program, at Urban Gardening Augmentation Taytay (UGAT) Program.\r\n\r\nPlano ng mga residente ng nasabing subdivision na magtanim ng mga gulay na \"Chopsuey\" katulad ng sayote, carrots, broccoli, cauliflower, gayundin ang hydroponics, free range chicken at iba pang organic farming practices.', 'img/news_1.jpg', '2023-04-25', 2, 2, ''),
(5, 'LOST DOG', 'Name: Monique\r\nBreed: Mixed\r\nColor: Light Brown\r\nSex: Female\r\nOther Description: White belly\r\nLast Seen: Sitio Burol, Barangay San Juan, Taytay, Rizal near Marina\'s Canteen, Apri 20, 2023.\r\nFor any information please contact Marvin at 0908-655-4474 or 0928-221-1486.', 'img/news_2.jpg', '2023-04-29', 2, 2, ''),
(6, 'Eskwelanihan', 'A school based gardening program that involves students and teachers in the practice of urban agriculture', 'home-headline-image/eskwelanihan.png', '2023-04-28', 2, 1, ''),
(7, 'UGAT', 'The Urban Gardening Augmentation Taytay Program (UGAT) focuses on the promotion of urban agriculture among the citizens of Taytay. This includes community gardening initiatives.\r\n\r\n', 'img/2.png', '2023-04-30', 2, 1, ''),
(8, 'SMILE KABATAAN AT AGRIKULTURA', 'Bilang bahagi ng selebrasyon ng Earth Day 2023, ang ating Tanggapan ay naimbitahan upang pangunahan ang pagtuturo sa ating mga kabataan ng Paglilipat Tanim ng Gulay. Ang kanilang mga nailipat tanim ay siya rin nilang iuuwi upang palakihin sa kanilang mga bahay o bakuran.\r\nIto ay naging magandang oportunidad upang maagang mapakilala sa ating kabataan ang kahalagahan ng pagtatanim at agrikultura. Gayundin ang kahalagaan ng ating kalikasan.\r\nMaraming salamat po sa ating mga kapulisan, Philippine National Police sa paghanda ng mga recyclable bottles na siyang pinaglipatan ng tanim.\r\nAng programang ito ay hatid sa atin ng Pamahalaang Bayan sa pamumuno ng ating Smile Taytay Mayor Allan De Leon at ng MENRO Taytay,Rizal.\r\nAngat Kabataan, Angat Agrikultura!', 'img/news_3.jpg', '2023-04-30', 2, 2, ''),
(9, 'UGAT SIMONA NATIONAL HIGH SCHOOL', 'Patuloy ang pagbisita at aktibidad ng mga guro at team UGAT sa Gulayan sa Paaralan ng Simona National High School, Barangay San Isidro. Gumagamit sila ng mga recyclable material kagaya ng bote upang gawing taniman.\r\nIto ay sa ilalim ng ating Urban Gardening Augmentation Taytay program ng ating Pamahalaang Bayan sa pamumuno ng ating Mayor Allan De Leon at Pambayang Tanggapan ng Agrikultura.', 'img/news_4.jpg', '2023-04-30', 2, 2, ''),
(10, 'Team UGAT goes to CRESDAVILLE 1!', 'Bilang tugon sa pakikiisa ng Cresdaville 1 Subdivision sa ating programang Urban Augmentation Taytay Program, ang ating team UGAT ay pinangunahan ang land preparation, plastic mulching at transplanting sa nasabing lugar. Ang mga senior citizens at residente ang magmamaintain ng kanilang urban garden.\r\nIto ay patuloy na susuportahan at tutulungan ng ating team UGAT hanggang sa mapaganda ang kanilang urban garden.\r\nAng programang UGAT ay hatid sa atin ng Pamahalaang Bayan sa pamumuno ng ating Mayor Allan De Leon at Pambayang Tanggapan ng Agrikultura.', 'img/news_5.jpg', '2023-04-30', 2, 2, ''),
(11, 'WEEKLY WEATHER OUTLOOK', 'BY MONDAY UNTIL WEDNEDAY (16 - 19 APRIL), THE EASTERN SECTION OF LUZON WILL EXPERIENCE CLOUDY SKIES WITH SCATTERED RAINSHOWERS AND THUNDERSTORMS. THE REST OF THE COUNTRY WILL HAVE SUNNY TO PARTLY CLOUDY SKIES APART FROM ISOLATED AFTERNOON RAINSHOWERS AND THUNDERSTORMS.\nBY THURSDAY UNTIL FRIDAY (20 - 21 APRIL), THE WHOLE ARCHIPELAGO WILL HAVE SUNNY TO PARTLY CLOUDY SKIES WITH ISOLATED AFTERNOON RAINSHOWERS AND THUNDERSTORMS MOSTLY OVER THE EASTERN SECTION.\nTHE UPDATES ON THIS OUTLOOK WILL BE THROUGH THE DAILY ISSUANCES OF THE PUBLIC WEATHER FORECAST AND WEATHER ADVISORIES IF THERE ARE SIGNIFICANT CHANGES IN THE WEATHER SCENARIO.\n\nSource: https://www.pagasa.dost.gov.ph/', 'img/news_weather.jpg', '2023-04-30', 2, 2, 'THE REST OF THE COUNTRY WILL HAVE SUNNY TO PARTLY CLOUDY SKIES APART FROM ISOLATED AFTERNOON RAINSHOWERS AND THUNDERSTORMS.'),
(12, 'LOST DOG', 'Name: Peachie\nBreed: Pomerian\nColor: Black\nSex: Female\nLast Seen: Sitio Burol, Barangay San Juan, Taytay, Rizal near Marina\'s Canteen, Apri 20, 2023.\nDate: April 7, 2023 6:30am\nFor any information please contact Marvin at 0908-655-4474 or 0928-221-1486.', 'img/news_7.jpg', '2023-04-30', 2, 2, 'Last Seen: Sitio Burol, Barangay San Juan, Taytay, Rizal near Marina\'s Canteen, Apri 20, 2023.'),
(13, 'MISSING CAT', 'Name: Squid\nSex: Male\nColor: Black\nBreed: Mixed\nOther Description: With blue checkered collar, thinning hair on the eyebrow.\nLast Seen: Sitio Bayabas, Barangay San Isidro, Taytay, Rizal. For any information, please contacy 0926-166-8375', 'img/news_8.jpg', '2023-04-30', 2, 2, 'Last Seen: Sitio Bayabas, Barangay San Isidro, Taytay, Rizal.'),
(14, 'TATAY FARMERS\' FAIR', 'Abangan ngayong MAYO 2023! Hatid sa atin ng mga magsasaka at mangingisda ng bayan ng Taytay.', 'img/events_1.jpg', '2023-04-30', 2, 3, ''),
(15, 'NOW HAPPENING: Earth Day 2023: Invest In Our Planet', 'Ang ating Tanggapan ay mamimigay ng libreng buto, punla, at fertilizers ngayong umaga, April 22, 2023 sa tapat ng Bagong Munisipyo. Ang programang ito ay hatid sa atin ng Pamahalaang Bayan ng Taytay sa pamumuno ng ating Mayor Allan De Leon, Konsehal Tobit Cruz, Councilor Joan Calderon, MENRO Taytay,Rizal, sa pakikiisa ng ating Pambayang Tanggapan ng Agrikultura kasama ng team UGAT. Limited stock only!', 'img/events_2.jpg', '2023-04-30', 2, 3, ''),
(16, 'EARTH DAY 2023 READY!', 'FREE SEEDS | SEEDLINGS | FERTILIZERS\r\nOur Office will distribute free seeds of various vegetables, seedlings, liquid fertilizers, and IEC materials in solidarity with the celebration of Earth Day 2023 with the theme Invest In Our Planet this Saturday, April 22, in front of the New Municipal Hall. The program will start at 6:00 am and the above mentioned will be given at 9:00 am. This is brought to us by the Municipal Environment and Natural Resources Office MENRO Taytay,Rizal and the City Government of Taytay in the leadership of our Tobit Cruz and in cooperation with the Office of our Councilor Mayor Allan De Leon . Limited stock. Until supplies last only. Let\'s see each other!', 'img/events_3.jpg', '2023-04-30', 2, 3, ''),
(18, '𝐁𝐎𝐎𝐓𝐇 | 𝐓𝐑𝐀𝐃𝐄 | 𝐄𝐗𝐇𝐈𝐁𝐈𝐓 | 𝐅𝐑𝐄𝐄𝐁𝐈𝐄𝐒', 'Abangan ngayong MAYO 2023! Hatid sa atin ng mga magsasaka at mangingisda ng bayan ng Taytay.', 'img/events_4.jpg', '2023-04-30', 2, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `signup_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `is_SignedUp` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`signup_id`, `user_id`, `content_id`, `is_SignedUp`) VALUES
(7, 6, 7, 1),
(8, 6, 7, 1),
(9, 6, 7, 1),
(10, 6, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `image_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`image_id`, `image_name`, `image_description`) VALUES
(2, 'Screenshot (2).png', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_type` int(1) NOT NULL DEFAULT 0 COMMENT '1=Admin, 0=User',
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `username`, `password`, `first_name`, `last_name`, `email`) VALUES
(4, 0, 'werqawerqwe', '1212', 'dfasdfasdf', 'asdfasdfa', 'werqawerqwe@gmail.com'),
(5, 1, 'Bauce Jeo', '5252', 'Jeo', 'Malakas', 'JeoMalakas@gmail.com'),
(6, 0, 'GMC', 'P@ssw0rdk0', 'Glenn Marcus', 'Cinco', 'gmdcinco@gmail.com'),
(7, 0, 'GMDC', '1234', 'Glenn Marcus', 'Cinco', 'gmdcinco@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`content_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`signup_id`),
  ADD KEY `user_id` (`user_id`,`content_id`),
  ADD KEY `content_id` (`content_id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `signup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `signup`
--
ALTER TABLE `signup`
  ADD CONSTRAINT `signup_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `signup_ibfk_2` FOREIGN KEY (`content_id`) REFERENCES `contents` (`content_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
