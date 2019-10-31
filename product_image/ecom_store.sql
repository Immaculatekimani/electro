-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 07:19 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `arduino`
--

CREATE TABLE `arduino` (
  `ardi_id` int(100) NOT NULL,
  `a_cat_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `ardi_title` text NOT NULL,
  `ardi_img1` text NOT NULL,
  `ardi_price` int(100) NOT NULL,
  `ardi_keyword` text NOT NULL,
  `ardi_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arduino`
--

INSERT INTO `arduino` (`ardi_id`, `a_cat_id`, `cat_id`, `date`, `ardi_title`, `ardi_img1`, `ardi_price`, `ardi_keyword`, `ardi_desc`) VALUES
(28, 1, 1, '2019-09-29 14:30:17.000000', 'Arduino Uno', 'arduino_uno.jpg', 1000, 'Arduino', 'The Arduino Uno is an open-source microcontroller board based on the Microchip ATmega328P microcontroller and developed by Arduino.cc.'),
(29, 1, 1, '2019-09-29 15:44:21.408141', 'Arduino Mega', 'arduino_nano.jpg', 500, 'arduino', 'The MEGA 2560 is designed for more complex projects. With 54 digital I/O pins, 16 analog inputs and a larger space for your sketch it is the recommended board for 3D printers and robotics projects. ');

-- --------------------------------------------------------

--
-- Table structure for table `breadboard`
--

CREATE TABLE `breadboard` (
  `bread_id` int(10) NOT NULL,
  `b_cat_id` int(10) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `b_title` text NOT NULL,
  `b_img1` text NOT NULL,
  `b_price` int(11) NOT NULL,
  `b_keyword` text NOT NULL,
  `b_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breadboard`
--

INSERT INTO `breadboard` (`bread_id`, `b_cat_id`, `cat_id`, `date`, `b_title`, `b_img1`, `b_price`, `b_keyword`, `b_desc`) VALUES
(2, 1, 5, '2019-09-30 16:16:04', 'Copper Perfboard', 'copper perfboard.jpg', 400, 'breadboard', 'Perfboard is a material for prototyping electronic circuits.It is a thin, rigid sheet with holes pre-drilled at standard intervals across a grid, usually a square grid of 0.1 inches (2.54 mm) spacing. These holes are ringed by round or square copper pads, though bare boards are also available.');

-- --------------------------------------------------------

--
-- Table structure for table `capacitor`
--

CREATE TABLE `capacitor` (
  `cap_id` int(10) NOT NULL,
  `c_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `cap_title` text NOT NULL,
  `cap_img1` text NOT NULL,
  `cap_price` int(100) NOT NULL,
  `cap_keyword` text NOT NULL,
  `cap_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capacitor`
--

INSERT INTO `capacitor` (`cap_id`, `c_cat_id`, `cat_id`, `date`, `cap_title`, `cap_img1`, `cap_price`, `cap_keyword`, `cap_desc`) VALUES
(2, 1, 3, '2019-09-30 15:41:14.000000', 'Ceramic Capacitor', 'capacitor2.jpg', 400, 'capacitor', 'A ceramic capacitor is a non-polarized fixed capacitor made out of two or more alternating layers of ceramic and metal in which the ceramic material acts as the dielectric and the metal acts as the electrodes.'),
(3, 1, 3, '2019-09-30 15:47:35.000000', 'Electrolytic Capacitor', 'capacitor.jpg', 300, 'capacitor', 'An electrolytic capacitor is a type of capacitor that uses an electrolyte to achieve a larger capacitance than other capacitor types.It can be used as filter for audio amplifiers\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Arduino', 'The Arduino Uno is an open-source microcontroller board based on the Microchip ATmega328P microcontroller and developed by Arduino.cc. Operating Voltage: 5 Vol\r\nInput Voltage: 7 to 20 Volts\r\nDigital I/O Pins: 14 \r\nAnalog Input Pins: 6\r\nDC Current per I/O Pin: 20 mA\r\nDC Current for 3.3V Pin: 50 mA\r\nFlash Memory: 32 KB \r\nSRAM: 2 KB\r\nEEPROM: 1 KB\r\nClock Speed: 16 MHz'),
(2, 'LED', 'The Arduino Uno is an open-source microcontroller board based on the Microchip ATmega328P microcontroller and developed by Arduino.cc. Operating Voltage: 5 Vol\r\nInput Voltage: 7 to 20 Volts\r\nDigital I/O Pins: 14 \r\nAnalog Input Pins: 6\r\nDC Current per I/O Pin: 20 mA\r\nDC Current for 3.3V Pin: 50 mA\r\nFlash Memory: 32 KB \r\nSRAM: 2 KB\r\nEEPROM: 1 KB\r\nClock Speed: 16 MHz'),
(3, 'Capacitors', ''),
(4, 'Resistors', ''),
(5, 'Breadboard', ''),
(6, 'Wires', ''),
(7, 'Inductors', ''),
(8, 'Transistors', '');

-- --------------------------------------------------------

--
-- Table structure for table `inductors`
--

CREATE TABLE `inductors` (
  `inductor_id` int(10) NOT NULL,
  `i_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `i_title` text NOT NULL,
  `i_img1` text NOT NULL,
  `i_price` int(100) NOT NULL,
  `i_keyword` text NOT NULL,
  `i_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inductors`
--

INSERT INTO `inductors` (`inductor_id`, `i_cat_id`, `cat_id`, `date`, `i_title`, `i_img1`, `i_price`, `i_keyword`, `i_desc`) VALUES
(3, 1, 7, '2019-10-01 16:51:42', 'Magnetic Inductors', 'magnetic inductor.jpg', 200, 'inductor', 'Magnetic inductors are used in low-frequency power supplies as filter chokes, filter circuits, common mode chokes, noise suppression, and high frequency power supplies.');

-- --------------------------------------------------------

--
-- Table structure for table `led`
--

CREATE TABLE `led` (
  `led_id` int(100) NOT NULL,
  `l_cat_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `l_title` text NOT NULL,
  `l_img1` text NOT NULL,
  `l_price` int(100) NOT NULL,
  `l_keyword` text NOT NULL,
  `l_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `led`
--

INSERT INTO `led` (`led_id`, `l_cat_id`, `cat_id`, `date`, `l_title`, `l_img1`, `l_price`, `l_keyword`, `l_desc`) VALUES
(6, 1, 2, '2019-09-30 15:21:33.000000', 'LED', 'led.jpg', 100, 'LED', 'An LED is an electronic device that emits light when an electrical current is passed through it.\r\nLED is available in rgb(red,green,blue) colours.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keyword` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keyword`, `product_desc`) VALUES
(4, 1, 1, '2019-09-24 17:05:12', 'Arduino', 'arduino_uno.jpg', 'arduino_mega.jpg', 'arduino_nano.jpg', 500, 'Arduino', 'Arduino is used for creating iot projects'),
(19, 2, 1, '2019-09-28 13:31:15', 'Arduino_mega', 'arduino_mega.jpg', '', '', 234, 'breadboard', 'arduino mega');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Electronic components', 'The Arduino Uno is an open-source microcontroller board based on the Microchip ATmega328P microcontroller and developed by Arduino.cc. Operating Voltage: 5 Vol\r\nInput Voltage: 7 to 20 Volts\r\nDigital I/O Pins: 14 \r\nAnalog Input Pins: 6\r\nDC Current per I/O Pin: 20 mA\r\nDC Current for 3.3V Pin: 50 mA\r\nFlash Memory: 32 KB \r\nSRAM: 2 KB\r\nEEPROM: 1 KB\r\nClock Speed: 16 MHz');

-- --------------------------------------------------------

--
-- Table structure for table `resistor`
--

CREATE TABLE `resistor` (
  `res_id` int(10) NOT NULL,
  `r_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `r_title` text NOT NULL,
  `r_img1` text NOT NULL,
  `r_price` int(200) NOT NULL,
  `r_keyword` text NOT NULL,
  `r_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resistor`
--

INSERT INTO `resistor` (`res_id`, `r_cat_id`, `cat_id`, `date`, `r_title`, `r_img1`, `r_price`, `r_keyword`, `r_desc`) VALUES
(2, 1, 4, '2019-09-30 16:02:19.000000', 'Resistor', 'resistor1.webp', 100, 'resistor', 'Resistors are electrical components that help control the flow of current in a circuit. A high resistance means there is less current available for a given voltage. Inside a resistor, electrons collide with ions, slowing the flow of electricity and lowering the current while producing heat.');

-- --------------------------------------------------------

--
-- Table structure for table `transistors`
--

CREATE TABLE `transistors` (
  `transistor_id` int(10) NOT NULL,
  `t_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `t_title` int(100) NOT NULL,
  `t_img1` text NOT NULL,
  `t_price` int(100) NOT NULL,
  `t_keyword` text NOT NULL,
  `t_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transistors`
--

INSERT INTO `transistors` (`transistor_id`, `t_cat_id`, `cat_id`, `date`, `t_title`, `t_img1`, `t_price`, `t_keyword`, `t_desc`) VALUES
(2, 1, 8, '2019-10-01 16:59:32', 0, 'transistors 3 pack.jpg', 300, 'transistor', 'A transistor is a semiconductor device used to amplify or switch electronic signals and electrical power. It is composed of semiconductor material usually with at least three terminals for connection to an external circuit.');

-- --------------------------------------------------------

--
-- Table structure for table `wires`
--

CREATE TABLE `wires` (
  `wire_id` int(10) NOT NULL,
  `w_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `w_title` text NOT NULL,
  `w_img1` text NOT NULL,
  `w_price` int(200) NOT NULL,
  `w_keyword` text NOT NULL,
  `w_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wires`
--

INSERT INTO `wires` (`wire_id`, `w_cat_id`, `cat_id`, `date`, `w_title`, `w_img1`, `w_price`, `w_keyword`, `w_desc`) VALUES
(3, 1, 6, '2019-10-01 16:39:55.000000', 'Jumper Wires', 'jumper wires.jpg', 100, 'wires', 'A jump wire is an electrical wire, or group of them in a cable, with a connector or pin at each end , which is normally used to interconnect the components of a breadboard or other prototype or test circuit, internally or with other equipment or components, without soldering.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arduino`
--
ALTER TABLE `arduino`
  ADD PRIMARY KEY (`ardi_id`);

--
-- Indexes for table `breadboard`
--
ALTER TABLE `breadboard`
  ADD PRIMARY KEY (`bread_id`);

--
-- Indexes for table `capacitor`
--
ALTER TABLE `capacitor`
  ADD PRIMARY KEY (`cap_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `inductors`
--
ALTER TABLE `inductors`
  ADD PRIMARY KEY (`inductor_id`);

--
-- Indexes for table `led`
--
ALTER TABLE `led`
  ADD PRIMARY KEY (`led_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `resistor`
--
ALTER TABLE `resistor`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `transistors`
--
ALTER TABLE `transistors`
  ADD PRIMARY KEY (`transistor_id`);

--
-- Indexes for table `wires`
--
ALTER TABLE `wires`
  ADD PRIMARY KEY (`wire_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arduino`
--
ALTER TABLE `arduino`
  MODIFY `ardi_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `breadboard`
--
ALTER TABLE `breadboard`
  MODIFY `bread_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `capacitor`
--
ALTER TABLE `capacitor`
  MODIFY `cap_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inductors`
--
ALTER TABLE `inductors`
  MODIFY `inductor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `led`
--
ALTER TABLE `led`
  MODIFY `led_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resistor`
--
ALTER TABLE `resistor`
  MODIFY `res_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transistors`
--
ALTER TABLE `transistors`
  MODIFY `transistor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wires`
--
ALTER TABLE `wires`
  MODIFY `wire_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
