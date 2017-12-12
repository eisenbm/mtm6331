-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2017 at 06:12 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtm6331-contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `contact_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `contact_name` varchar(120) NOT NULL,
  `contact_company` varchar(120) NOT NULL,
  `contact_thumbnail` varchar(120) NOT NULL,
  `contact_portrait` varchar(120) NOT NULL,
  `contact_birthday` date NOT NULL,
  `contact_street` varchar(120) NOT NULL,
  `contact_city` varchar(120) NOT NULL,
  `contact_state` varchar(50) NOT NULL,
  `contact_zip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_name`, `contact_company`, `contact_thumbnail`, `contact_portrait`, `contact_birthday`, `contact_street`, `contact_city`, `contact_state`, `contact_zip`) VALUES
(0000000104, 'Lynn Clemons', 'Aquasseur', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1993-12-06', '185 Cook Street', 'Rodanthe', 'Missouri', '93586'),
(0000000105, 'Waller Sanford', 'Intrawear', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1992-01-15', '886 Hinckley Place', 'Osmond', 'Michigan', '18375'),
(0000000106, 'Latonya Hull', 'Comdom', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1987-11-14', '640 Seton Place', 'Neibert', 'New Hampshire', '21806'),
(0000000107, 'Margery Wolfe', 'Insectus', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1978-05-19', '135 Gardner Avenue', 'Wedgewood', 'Rhode Island', '90706'),
(0000000108, 'Frances Golden', 'Zidant', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1978-04-15', '181 Sumpter Street', 'Gloucester', 'Ohio', '79709'),
(0000000109, 'Chang Fitzgerald', 'Bulljuice', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1977-07-04', '327 Indiana Place', 'Mansfield', 'Montana', '47345'),
(0000000110, 'Barrett Manning', 'Terrago', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1985-03-16', '223 Pierrepont Place', 'Graniteville', 'Oklahoma', '86497'),
(0000000111, 'Tami Mccormick', 'Freakin', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1977-11-28', '825 Pineapple Street', 'Weedville', 'Indiana', '87381'),
(0000000112, 'Crawford Jenkins', 'Extrawear', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1994-01-29', '635 Plymouth Street', 'Homeworth', 'Arizona', '34058'),
(0000000113, 'Melton Woods', 'Viocular', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1995-04-07', '726 Nixon Court', 'Gila', 'Nebraska', '50752'),
(0000000114, 'Berg Nixon', 'Dymi', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1993-03-31', '652 Rockaway Parkway', 'Dorneyville', 'New York', '82501'),
(0000000115, 'Campos Glover', 'Solaren', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1980-09-10', '147 High Street', 'Swartzville', 'Marshall Islands', '37023'),
(0000000116, 'Raquel Forbes', 'Quizmo', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1984-01-12', '675 Colin Place', 'Savage', 'Palau', '98109'),
(0000000117, 'Juana Merritt', 'Nixelt', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1996-11-16', '723 Kane Place', 'Sultana', 'Guam', '57520'),
(0000000118, 'Atkins Delaney', 'Prosure', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1977-09-17', '885 Lincoln Terrace', 'Waiohinu', 'New Jersey', '90368'),
(0000000119, 'Joanne Goodman', 'Urbanshee', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1986-02-15', '662 Bennet Court', 'Harleigh', 'Wyoming', '69972'),
(0000000120, 'Estelle Pace', 'Elentrix', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1993-11-07', '197 Bristol Street', 'Groveville', 'Louisiana', '77327'),
(0000000121, 'James Powers', 'Bisba', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1978-01-31', '548 Fayette Street', 'Kraemer', 'Kansas', '65514'),
(0000000122, 'Tracy Reeves', 'Apextri', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1987-07-24', '663 Flatbush Avenue', 'Steinhatchee', 'American Samoa', '57087'),
(0000000123, 'Holt Burris', 'Corepan', 'http://placehold.it/48x48', 'http://placehold.it/300x400', '1992-10-30', '242 Sheffield Avenue', 'Ada', 'Pennsylvania', '37905');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
CREATE TABLE `emails` (
  `email_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `email_type` varchar(30) NOT NULL,
  `email_address` varchar(120) NOT NULL,
  `contact_id` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`email_id`, `email_type`, `email_address`, `contact_id`) VALUES
(0000000082, 'personal', 'lynnclemons@aquasseur.com', 0000000104),
(0000000083, 'personal', 'wallersanford@intrawear.com', 0000000105),
(0000000084, 'work', 'latonyahull@comdom.com', 0000000106),
(0000000085, 'personal', 'margerywolfe@insectus.com', 0000000107),
(0000000086, 'personal', 'francesgolden@zidant.com', 0000000108),
(0000000087, 'work', 'changfitzgerald@bulljuice.com', 0000000109),
(0000000088, 'work', 'barrettmanning@terrago.com', 0000000110),
(0000000089, 'work', 'tamimccormick@freakin.com', 0000000111),
(0000000090, 'personal', 'crawfordjenkins@extrawear.com', 0000000112),
(0000000091, 'personal', 'meltonwoods@viocular.com', 0000000113),
(0000000092, 'personal', 'bergnixon@dymi.com', 0000000114),
(0000000093, 'personal', 'camposglover@solaren.com', 0000000115),
(0000000094, 'personal', 'raquelforbes@quizmo.com', 0000000116),
(0000000095, 'work', 'juanamerritt@nixelt.com', 0000000117),
(0000000096, 'work', 'atkinsdelaney@prosure.com', 0000000118),
(0000000097, 'personal', 'joannegoodman@urbanshee.com', 0000000119),
(0000000098, 'personal', 'estellepace@elentrix.com', 0000000120),
(0000000099, 'personal', 'jamespowers@bisba.com', 0000000121),
(0000000100, 'personal', 'tracyreeves@apextri.com', 0000000122),
(0000000101, 'work', 'holtburris@corepan.com', 0000000123);

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

DROP TABLE IF EXISTS `phones`;
CREATE TABLE `phones` (
  `phone_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `phone_type` varchar(30) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `contact_id` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`phone_id`, `phone_type`, `phone_number`, `contact_id`) VALUES
(0000000081, 'work', '9345212021', 0000000104),
(0000000082, 'mobile', '9375072484', 0000000105),
(0000000083, 'home', '9525383710', 0000000106),
(0000000084, 'mobile', '9824582443', 0000000107),
(0000000085, 'mobile', '8764752476', 0000000108),
(0000000086, 'home', '9824133151', 0000000109),
(0000000087, 'work', '9285353620', 0000000110),
(0000000088, 'home', '9364943583', 0000000111),
(0000000089, 'mobile', '8384143488', 0000000112),
(0000000090, 'mobile', '8514763468', 0000000113),
(0000000091, 'home', '8194173489', 0000000114),
(0000000092, 'home', '9794982920', 0000000115),
(0000000093, 'mobile', '8004143647', 0000000116),
(0000000094, 'mobile', '8294892152', 0000000117),
(0000000095, 'home', '8125393359', 0000000118),
(0000000096, 'mobile', '9604933751', 0000000119),
(0000000097, 'mobile', '9434403470', 0000000120),
(0000000098, 'work', '8645942058', 0000000121),
(0000000099, 'home', '9845782334', 0000000122),
(0000000100, 'mobile', '8064783478', 0000000123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`email_id`),
  ADD KEY `contact_id` (`contact_id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`phone_id`),
  ADD KEY `contact_id` (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `email_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `phone_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `emails`
--
ALTER TABLE `emails`
  ADD CONSTRAINT `emails_ibfk_1` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`contact_id`);

--
-- Constraints for table `phones`
--
ALTER TABLE `phones`
  ADD CONSTRAINT `phones_ibfk_1` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`contact_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
