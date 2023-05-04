-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 12:33 PM
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
(6, 'Eskwelanihan', 'A school based gardening program that involves students and teachers in the practice of urban agriculture', 'home-headline-image/eskwelanihan.png', '2023-04-28', 2, 1, ''),
(7, 'UGAT', 'The Urban Gardening Augmentation Taytay Program (UGAT) focuses on the promotion of urban agriculture among the citizens of Taytay. This includes community gardening initiatives.\r\n\r\n', 'img/2.png', '2023-04-30', 2, 1, ''),
(14, 'TATAY FARMERS\' FAIR', 'Abangan ngayong MAYO 2023! Hatid sa atin ng mga magsasaka at mangingisda ng bayan ng Taytay.', 'img/events_1.jpg', '2023-04-30', 2, 3, ''),
(15, 'NOW HAPPENING: Earth Day 2023: Invest In Our Planet', 'Ang ating Tanggapan ay mamimigay ng libreng buto, punla, at fertilizers ngayong umaga, April 22, 2023 sa tapat ng Bagong Munisipyo. Ang programang ito ay hatid sa atin ng Pamahalaang Bayan ng Taytay sa pamumuno ng ating Mayor Allan De Leon, Konsehal Tobit Cruz, Councilor Joan Calderon, MENRO Taytay,Rizal, sa pakikiisa ng ating Pambayang Tanggapan ng Agrikultura kasama ng team UGAT. Limited stock only!', 'img/events_2.jpg', '2023-04-30', 2, 3, ''),
(16, 'EARTH DAY 2023 READY!', 'FREE SEEDS | SEEDLINGS | FERTILIZERS\r\nOur Office will distribute free seeds of various vegetables, seedlings, liquid fertilizers, and IEC materials in solidarity with the celebration of Earth Day 2023 with the theme Invest In Our Planet this Saturday, April 22, in front of the New Municipal Hall. The program will start at 6:00 am and the above mentioned will be given at 9:00 am. This is brought to us by the Municipal Environment and Natural Resources Office MENRO Taytay,Rizal and the City Government of Taytay in the leadership of our Tobit Cruz and in cooperation with the Office of our Councilor Mayor Allan De Leon . Limited stock. Until supplies last only. Let\'s see each other!', 'img/events_3.jpg', '2023-04-30', 2, 3, ''),
(32, 'Gabay Taytay Agri', 'An information drive program in the form of caravans, seminars, training, digital platform, exhibit, fair and dissemination of IEC materials.', 'gabay.png', '2023-05-04', 1, 1, 'Gabay Taytay Agri'),
(33, 'Farm Visitation', 'A farm visitation is as simple as it sounds: it’s a trip to a farm! Plenty of farms have arrangements where you can take a school group on a farm visit.', 'farm-visit.png', '2023-05-04', 1, 1, 'Farm Visitation'),
(34, 'Technical Consultation', 'A technical consultation program is a service that provides expert advice and guidance on technical matters to individuals or organizations. These programs typically involve a consultation process in which a technical expert meets with the client to assess their needs and provide recommendations based on their expertise.', 'tech-cons.png', '2023-05-04', 1, 1, 'Technical Consultation'),
(35, 'Seminar Series', 'A seminar series program is a series of presentations or lectures on a particular topic or theme, often organized by an academic institution, professional organization, or industry group. The program typically features a series of speakers who are experts in their respective fields and are invited to present their research, insights, and experiences related to the seminar topic.\r\n\r\n', 'seminar.png', '2023-05-04', 1, 1, 'Seminar Series'),
(36, '𝗜𝗗𝗢𝗙 - 𝗜𝗻𝘁𝗲𝗴𝗿𝗮𝘁𝗲𝗱 𝗗𝗶𝘃𝗲𝗿𝘀𝗶𝗳𝗶𝗲𝗱 𝗢𝗿𝗴𝗮𝗻𝗶𝗰 𝗦𝘆𝘀𝘁𝗲𝗺', '25 April 2023: Ang Pamahalaang Bayan sa pamumuno ng ating Smile Taytay Mayor Allan De Leon na kinatawan ng ating Tanggapan sa pamumuno ni Doc Ram Andres, kasama ng team UGAT, ay dumalo sa launching at blessing ng 𝗠𝗼𝗻𝘁𝗲𝘃𝗲𝗿𝗱𝗲 𝗥𝗼𝘆𝗮𝗹𝗲 𝗜𝗻𝘁𝗲𝗴𝗿𝗮𝘁𝗲𝗱 𝗗𝗶𝘃𝗲𝗿𝘀𝗶𝗳𝗶𝗲𝗱 𝗢𝗿𝗴𝗮𝗻𝗶𝗰 𝗙𝗮𝗿𝗺 (𝗜𝗗𝗢𝗙) sa loob ng kanilang subdivision.\r\nAng nasabing programa ay dinaluhan ng Pamahalaang Panlalawigan ng Rizal sa pamumuno ng ating Gob. Nina Ynares na kinatawan ni Bokal Jun Cabitac at ng Provincial Agriculture Offfice sa pamumuno ni Doc Reynaldo Bonita. Kasama rin natin ang kinatawan ng Sangguniang Bayan na si Councilor Joan Calderon, Barangay San Juan, Taytay, Rizal sa pamumuno ni Kap Rasel Valera, at MENRO Taytay,Rizal sa pamumuno ni Engr. Rodolfo \'Jun\' De Leon.\r\nAng 𝗠𝗼𝗻𝘁𝗲𝘃𝗲𝗿𝗱𝗲 𝗥𝗼𝘆𝗮𝗹𝗲 𝗜𝗻𝘁𝗲𝗴𝗿𝗮𝘁𝗲𝗱 𝗗𝗶𝘃𝗲𝗿𝘀𝗶𝗳𝗶𝗲𝗱 𝗢𝗿𝗴𝗮𝗻𝗶𝗰 𝗙𝗮𝗿𝗺 (𝗜𝗗𝗢𝗙) ay bahagi ng Verde Farm initiatives ng Monteverde Royale Homeowners Association sa pamumuno ni Atty. Liza Santiago, HOA President, na nakapailalim na rin sa HAlina’t magtanim ng Prutas At Gulay sa Barangay Project ng Department of Agriculture RFO 4-A, YES Program, at Urban Gardening Augmentation Taytay (UGAT) Program.\r\nPlano ng mga residente ng nasabing subdivision na magtanim ng mga gulay na \"Chopsuey\" katulad ng sayote, carrots, broccoli, cauliflower, gayundin ang hydroponics, free range chicken at iba pang organic farming practices.\r\n', 'IDOF.jpg', '2023-05-04', 1, 2, 'Ang Pamahalaang Bayan sa pamumuno ng ating Smile Taytay Mayor Allan De Leon na kinatawan ng ating Tanggapan sa pamumuno ni Doc Ram Andres, kasama ng team UGAT, ay dumalo sa launching at blessing ng 𝗠𝗼𝗻𝘁𝗲𝘃𝗲𝗿𝗱𝗲 𝗥𝗼𝘆𝗮𝗹𝗲 𝗜𝗻𝘁𝗲𝗴𝗿𝗮𝘁𝗲𝗱 𝗗𝗶𝘃𝗲𝗿𝘀𝗶𝗳𝗶𝗲𝗱 𝗢𝗿𝗴𝗮𝗻𝗶𝗰 𝗙𝗮𝗿𝗺 (𝗜𝗗𝗢𝗙) sa loob ng kanilang subdivision.'),
(37, '𝗦𝗠𝗜𝗟𝗘 𝗞𝗔𝗕𝗔𝗧𝗔𝗔𝗡 𝗔𝗧 𝗔𝗚𝗥𝗜𝗞𝗨𝗟𝗧𝗨𝗥𝗔', '22 April 2023 - Bilang bahagi ng selebrasyon ng Earth Day 2023, ang ating Tanggapan ay naimbitahan upang pangunahan ang pagtuturo sa ating mga kabataan ng Paglilipat Tanim ng Gulay. Ang kanilang mga nailipat tanim ay siya rin nilang iuuwi upang palakihin sa kanilang mga bahay o bakuran.\r\nIto ay naging magandang oportunidad upang maagang mapakilala sa ating kabataan ang kahalagahan ng pagtatanim at agrikultura. Gayundin ang kahalagaan ng ating kalikasan.\r\nMaraming salamat po sa ating mga kapulisan, Philippine National Police sa paghanda ng mga recyclable bottles na siyang pinaglipatan ng tanim.\r\nAng programang ito ay hatid sa atin ng Pamahalaang Bayan sa pamumuno ng ating Smile Taytay Mayor Allan De Leon at ng MENRO Taytay,Rizal.\r\nAngat Kabataan, Angat Agrikultura!\r\n', 'SMILE_KABATAAN.jpg', '2023-05-04', 1, 2, '- Bilang bahagi ng selebrasyon ng Earth Day 2023, ang ating Tanggapan ay naimbitahan upang pangunahan ang pagtuturo sa ating mga kabataan ng Paglilipat Tanim ng Gulay.'),
(38, 'UGAT SIMONA NATIONAL HIGH SCHOOL', '20 April 2023 - Patuloy ang pagbisita at aktibidad ng mga guro at team UGAT sa Gulayan sa Paaralan ng Simona National High School, Barangay San Isidro. Gumagamit sila ng mga recyclable material kagaya ng bote upang gawing taniman.\r\nIto ay sa ilalim ng ating Urban Gardening Augmentation Taytay program ng ating Pamahalaang Bayan sa pamumuno ng ating Mayor Allan De Leon at Pambayang Tanggapan ng Agrikultura.\r\n', 'UGAT.jpg', '2023-05-04', 1, 2, 'Patuloy ang pagbisita at aktibidad ng mga guro at team UGAT sa Gulayan sa Paaralan ng Simona National High School, Barangay San Isidro'),
(39, '𝐓𝐞𝐚𝐦 𝐔𝐆𝐀𝐓 𝐠𝐨𝐞𝐬 𝐭𝐨 𝐂𝐑𝐄𝐒𝐃𝐀𝐕𝐈𝐋𝐋𝐄 𝟏!', '19 April 2023 - Bilang tugon sa pakikiisa ng Cresdaville 1 Subdivision sa ating programang Urban Augmentation Taytay Program, ang ating team UGAT ay pinangunahan ang land preparation, plastic mulching at transplanting sa nasabing lugar. Ang mga senior citizens at residente ang magmamaintain ng kanilang urban garden.\r\nIto ay patuloy na susuportahan at tutulungan ng ating team UGAT hanggang sa mapaganda ang kanilang urban garden.\r\nAng programang UGAT ay hatid sa atin ng Pamahalaang Bayan sa pamumuno ng ating Mayor Allan De Leon at Pambayang Tanggapan ng Agrikultura.\r\n', 'TEAM_UGAT.jpg', '2023-05-04', 1, 2, 'Bilang tugon sa pakikiisa ng Cresdaville 1 Subdivision sa ating programang Urban Augmentation Taytay Program'),
(40, '𝗡𝗢𝗪 𝗛𝗔𝗣𝗣𝗘𝗡𝗜𝗡𝗚: 𝗘𝗮𝗿𝘁𝗵 𝗗𝗮𝘆 𝟮𝟬𝟮𝟯: 𝗜𝗻𝘃𝗲𝘀𝘁 𝗜𝗻 𝗢𝘂𝗿 𝗣𝗹𝗮𝗻𝗲𝘁!', '19 April 2023 - Bilang tugon sa pakikiisa ng Cresdaville 1 Subdivision sa ating programang Urban Augmentation Taytay Program, ang ating team UGAT ay pinangunahan ang land preparation, plastic mulching at transplanting sa nasabing lugar. Ang mga senior citizens at residente ang magmamaintain ng kanilang urban garden.\r\nIto ay patuloy na susuportahan at tutulungan ng ating team UGAT hanggang sa mapaganda ang kanilang urban garden.\r\nAng programang UGAT ay hatid sa atin ng Pamahalaang Bayan sa pamumuno ng ating Mayor Allan De Leon at Pambayang Tanggapan ng Agrikultura.\r\n', 'NOW_HAPPENING_EARTHDAY.jpg', '2023-05-04', 1, 3, '- Bilang tugon sa pakikiisa ng Cresdaville 1 Subdivision sa ating programang Urban Augmentation Taytay Program, ang ating team UGAT ay pinangunahan ang land preparation, plastic mulching at transplanting sa nasabing lugar'),
(41, '𝗘𝗔𝗥𝗧𝗛 𝗗𝗔𝗬 𝟮𝟬𝟮𝟯 𝗥𝗘𝗔𝗗𝗬!', 'Ang atin pong Tanggapan ay mamamahagi ng libreng buto ng sari saring gulay, seedlings, liquid fertilizers, at IEC materials bilang pakikiisa sa selebrasyon ng Earth Day 2023 na may temang Invest In Our Planet ngayong Sabado, April 22, sa tapat ng Bagong Munisipyo. Magsisimula ang programa ng 6:00 ng umaga at ibibigay naman ang mga nabanggit sa taas ng 9:00 ng umaga.\r\nIto ay hatid sa atin ng Municipal Environment and Natural Resources Office MENRO Taytay,Rizal at ng Pamahalaang Bayan ng Taytay sa pamumuno ng ating Mayor Allan De Leon at pakikiisa ng Tanggapan ng ating Konsehal Tobit Cruz.\r\nLimited stock. Until supplies last only.\r\nMagkita kita po tayo!\r\n', 'EARTH_DAY_2023_READY.jpg', '2023-05-04', 1, 3, 'FREE SEEDS | SEEDLINGS | FERTILIZERS'),
(42, '𝐁𝐎𝐎𝐓𝐇 | 𝐓𝐑𝐀𝐃𝐄 | 𝐄𝐗𝐇𝐈𝐁𝐈𝐓 | 𝐅𝐑𝐄𝐄𝐁𝐈𝐄𝐒', 'Abangan ngayong MAYO 2023!\r\nHatid sa atin ng mga magsasaka at mangingisda ng bayan ng Taytay.\r\n', 'BOOTH_TRADE.jpg', '2023-05-04', 1, 3, 'Abangan ngayong MAYO 2023!'),
(43, '𝐅𝐔𝐑 𝐁𝐀𝐁𝐈𝐄𝐒\' 𝐃𝐀𝐘 𝐎𝐔𝐓', 'Inihahandog ng Rizal Provincial Government at Veterinary Office sa pamumuno ng ating Governor Nina Ynares sa pakikipagtulungan ng Pamahalaang Bayan ng Taytay sa pamumuno ng ating Mayor Allan De Leon at ng Tanggapan ng Agrikultura ang 𝗙𝗨𝗥 𝗕𝗔𝗕𝗜𝗘𝗦\' 𝗗𝗔𝗬 𝗢𝗨𝗧, a Veterinary Services Express, 𝗠𝗮𝗿𝗰𝗵 𝟮𝟰, 𝟮𝟬𝟮𝟯, 𝟴:𝟬𝟬 𝗔𝗠 𝘁𝗼 𝟱:𝟬𝟬 𝗣𝗠, 𝗦𝗮𝗻 𝗝𝘂𝗮𝗻 𝗚𝘆𝗺𝗻𝗮𝘀𝗶𝘂𝗺, Barangay Dolores. (Near St. John the Baptist Parish Church and Taytay Emergency Hospital).\r\nSponsored by: UNAHCO\r\nIto ay bukas sa lahat ng Taytayeños na may alagang aso at pusa.\r\nNarito ang mga 𝗟𝗜𝗕𝗥𝗘𝗡𝗚 𝗦𝗘𝗥𝗕𝗜𝗦𝗬𝗢:\r\n- Pet Checkup\r\n- Pet Consultation\r\n- Rabies Vaccine for cats & dogs\r\n- Treatment\r\n- Deworming (Injectable only for 6 months & above)\r\n- Film Showing / Information, Education & Communication Drive\r\n- Seedlings courtesy of team UGAT\r\nIto ay bahagi ng ating pakikiisa sa Rabies Awareness Month 2023 na may temang, \"Rabies-free na Pusa\'t Aso, Kaligtasan ng Pamilyang Pilipino\".\r\nTaytay Public Information Office\r\n', 'FUR_BABIES.jpg', '2023-05-04', 1, 3, 'Inihahandog ng Rizal Provincial Government at Veterinary Office sa pamumuno ng ating Governor Nina Ynares sa pakikipagtulungan ng Pamahalaang Bayan ng Taytay sa pamumuno ng ating Mayor Allan De Leon at ng Tanggapan ng Agrikultura ang 𝗙𝗨𝗥 𝗕𝗔𝗕𝗜𝗘𝗦\' 𝗗𝗔𝗬 𝗢𝗨𝗧');

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
(11, 6, 7, 1),
(12, 6, 6, 1),
(13, 7, 7, 1),
(14, 7, 6, 1);

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
(7, 0, 'GMDC', '1234', 'Glenn Marcus', 'Cinco', 'gmdcinco@gmail.com'),
(8, 0, 'mamamo', 'mama123', 'Mama', 'Mo', 'mamamo@email.com');

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
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `signup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
